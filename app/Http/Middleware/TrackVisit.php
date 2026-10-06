<?php

namespace App\Http\Middleware;

use App\Models\Visit;
use App\Services\IpGeolocationService;
use Closure;
use Illuminate\Http\Request;
use Jenssegers\Agent\Agent;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Str;

class TrackVisit
{
    public function handle(Request $request, Closure $next): Response
    {        
        if (!$request->isMethod('GET') || !$request->acceptsHtml()) {
            return $next($request);
        }

        if ($request->is('analytics') || $request->is('analytics/*')) {
            return $next($request);
        }

        $response = $next($request);

        $visitorId = $request->cookie('visitor_id');

        if (!$visitorId) {
            $visitorId = (string) Str::uuid();
        }

        // Détection du navigateur, appareil et système
        $agent = new Agent();
        $agent->setUserAgent($request->userAgent());

        // Référent
        $referrer = $request->header('referer');

        // Source
        $source = $request->query('utm_source')
            ?? $this->getSource($referrer);

        // Géolocalisation IP
        $geoService = app(IpGeolocationService::class);

        $location = $geoService->locate($request->ip());

        // Enregistrement de la visite
        Visit::create([
            'ip_address' => $request->ip(),
            'user_agent' => $request->userAgent(),
            'url' => $request->fullUrl(),
            'page' => $request->path(),
            'referrer' => $referrer,
            'source' => $source,
            'medium' => $request->query('utm_medium'),
            'campaign' => $request->query('utm_campaign'),
            'device' => $agent->device(),
            'browser' => $agent->browser(),
            'platform' => $agent->platform(),
            'country' => $location['country'],
            'city' => $location['city'],
            'session_id' => $request->session()->getId(),
            'visitor_id' => $visitorId,
        ]);

        if (!$request->hasCookie('visitor_id')) {
            $response->withCookie(
                cookie(
                    'visitor_id',
                    $visitorId,
                    60 * 24 * 365
                )
            );
        }

        return $response;
    }

    private function getSource(?string $referrer): string
    {
        if (!$referrer) {
            return 'direct';
        }

        $host = parse_url($referrer, PHP_URL_HOST);

        if (!$host) {
            return 'direct';
        }

        $host = strtolower($host);

        if (str_contains($host, 'google.')) {
            return 'google';
        }

        if (str_contains($host, 'facebook.com')) {
            return 'facebook';
        }

        if (str_contains($host, 'instagram.com')) {
            return 'instagram';
        }

        if (str_contains($host, 'linkedin.com')) {
            return 'linkedin';
        }

        if (str_contains($host, 'youtube.com')) {
            return 'youtube';
        }

        return 'referral';
    }
}