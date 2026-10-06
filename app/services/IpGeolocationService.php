<?php

namespace App\Services;

use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class IpGeolocationService
{
    public function locate(?string $ip): array
    {
        // Aucun IP
        if (!$ip) {
            return $this->emptyLocation();
        }

        // IP locale
        if (
            $ip === '127.0.0.1' ||
            $ip === '::1' ||
            str_starts_with($ip, '192.168.') ||
            str_starts_with($ip, '10.')
        ) {
            return $this->emptyLocation();
        }

        /*
         * Vérifier si cette IP existe déjà dans le cache.
         */
        $cacheKey = 'ip_location_' . md5($ip);

        return Cache::remember(
            $cacheKey,
            now()->addHours(24),
            function () use ($ip) {
                return $this->getLocationFromApi($ip);
            }
        );
    }

    /**
     * Appel à l'API IPinfo.
     */
    private function getLocationFromApi(string $ip): array
    {
        $token = config('services.ipinfo.token');

        // Token absent
        if (!$token) {
            return $this->emptyLocation();
        }

        try {

            $response = Http::timeout(2)
                ->connectTimeout(1)
                ->get("https://ipinfo.io/{$ip}/json", [
                    'token' => $token,
                ]);

            // API indisponible ou erreur HTTP
            if (!$response->successful()) {

                Log::warning('IPinfo API indisponible', [
                    'status' => $response->status(),
                    'ip' => $ip,
                ]);

                return $this->emptyLocation();
            }

            $data = $response->json();

            return [
                'country' => $data['country'] ?? null,
                'city' => $data['city'] ?? null,
            ];

        } catch (\Throwable $e) {

            /*
             * Une erreur de géolocalisation ne doit jamais
             * empêcher le fonctionnement du site.
             */
            Log::warning('Erreur géolocalisation IP', [
                'message' => $e->getMessage(),
                'ip' => $ip,
            ]);

            return $this->emptyLocation();
        }
    }

    /**
     * Valeur retournée lorsqu'on ne peut pas
     * déterminer la localisation.
     */
    private function emptyLocation(): array
    {
        return [
            'country' => null,
            'city' => null,
        ];
    }
}