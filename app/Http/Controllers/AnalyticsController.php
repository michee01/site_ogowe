<?php

namespace App\Http\Controllers;

use App\Models\Visit;
use Carbon\Carbon;
use Illuminate\Http\Request;

class AnalyticsController extends Controller
{
    public function index(Request $request)
    {
        /*
        |--------------------------------------------------------------------------
        | Période sélectionnée
        |--------------------------------------------------------------------------
        */

        $periode = $request->get('periode', '7');

        $query = Visit::query();

        switch ($periode) {
            case 'today':
                $query->whereDate('created_at', Carbon::today());
                break;

            case '7':
                $query->where('created_at', '>=', now()->subDays(6)->startOfDay());
                break;

            case '30':
                $query->where('created_at', '>=', now()->subDays(29)->startOfDay());
                break;

            case 'all':
                // Aucune restriction de date
                break;

            default:
                $periode = '7';
                $query->where('created_at', '>=', now()->subDays(6)->startOfDay());
                break;
        }

        /*
        |--------------------------------------------------------------------------
        | Statistiques générales
        |--------------------------------------------------------------------------
        */

        $visiteursUniques = (clone $query)
            ->whereNotNull('visitor_id')
            ->distinct('visitor_id')
            ->count('visitor_id');

        $sessions = (clone $query)
            ->whereNotNull('visitor_id')
            ->whereNotNull('session_id')
            ->distinct('session_id')
            ->count('session_id');

        $pagesVues = (clone $query)->count();

        $pagesVuesSuivies = (clone $query)
            ->whereNotNull('visitor_id')
            ->count();

        $pagesParSession = $sessions > 0
            ? round($pagesVuesSuivies / $sessions, 2)
            : 0;

        /*
        |--------------------------------------------------------------------------
        | Sources d'acquisition
        |--------------------------------------------------------------------------
        */

        $sources = (clone $query)
            ->selectRaw('source, COUNT(*) as total')
            ->whereNotNull('source')
            ->where('source', '!=', '')
            ->groupBy('source')
            ->orderByDesc('total')
            ->get();

        /*
        |--------------------------------------------------------------------------
        | Pages les plus consultées
        |--------------------------------------------------------------------------
        */

        $pagesPopulaires = (clone $query)
            ->selectRaw('page, COUNT(*) as total')
            ->whereNotNull('page')
            ->where('page', '!=', '')
            ->groupBy('page')
            ->orderByDesc('total')
            ->limit(10)
            ->get();

        /*
        |--------------------------------------------------------------------------
        | Appareils
        |--------------------------------------------------------------------------
        */

        $appareils = (clone $query)
            ->selectRaw('device, COUNT(*) as total')
            ->whereNotNull('device')
            ->where('device', '!=', '')
            ->groupBy('device')
            ->orderByDesc('total')
            ->get();

        /*
        |--------------------------------------------------------------------------
        | Navigateurs
        |--------------------------------------------------------------------------
        */

        $navigateurs = (clone $query)
            ->selectRaw('browser, COUNT(*) as total')
            ->whereNotNull('browser')
            ->where('browser', '!=', '')
            ->groupBy('browser')
            ->orderByDesc('total')
            ->get();

        /*
        |--------------------------------------------------------------------------
        | Pays
        |--------------------------------------------------------------------------
        */

        $pays = (clone $query)
            ->selectRaw('country, COUNT(*) as total')
            ->whereNotNull('country')
            ->where('country', '!=', '')
            ->groupBy('country')
            ->orderByDesc('total')
            ->get();

        /*
        |--------------------------------------------------------------------------
        | Villes
        |--------------------------------------------------------------------------
        */

        $villes = (clone $query)
            ->selectRaw('city, country, COUNT(*) as total')
            ->whereNotNull('city')
            ->where('city', '!=', '')
            ->groupBy('city', 'country')
            ->orderByDesc('total')
            ->limit(20)
            ->get();

        /*
        |--------------------------------------------------------------------------
        | Évolution des visites
        |--------------------------------------------------------------------------
        */

        $visitesParJourBrutes = (clone $query)
            ->selectRaw('DATE(created_at) as date, COUNT(*) as total')
            ->groupBy('date')
            ->orderBy('date')
            ->get()
            ->keyBy('date');

        $visitesParJour = collect();

        if ($periode === 'today') {
            $debut = Carbon::today();
            $fin = Carbon::today();
        } elseif ($periode === '7') {
            $debut = now()->subDays(6)->startOfDay();
            $fin = Carbon::today();
        } elseif ($periode === '30') {
            $debut = now()->subDays(29)->startOfDay();
            $fin = Carbon::today();
        } else {
            $debut = $visitesParJourBrutes->isNotEmpty()
                ? Carbon::parse($visitesParJourBrutes->keys()->first())
                : Carbon::today();

            $fin = $visitesParJourBrutes->isNotEmpty()
                ? Carbon::parse($visitesParJourBrutes->keys()->last())
                : Carbon::today();
        }

        for ($date = $debut->copy(); $date->lte($fin); $date->addDay()) {
            $dateString = $date->format('Y-m-d');

            $visitesParJour->push([
                'date' => $dateString,
                'total' => $visitesParJourBrutes->get($dateString)->total ?? 0,
            ]);
        }

        /*
        |--------------------------------------------------------------------------
        | Envoi des données à la vue
        |--------------------------------------------------------------------------
        */

        return view('analytics.index', compact(
            'periode',
            'visiteursUniques',
            'sessions',
            'pagesVues',
            'pagesParSession',
            'sources',
            'pagesPopulaires',
            'appareils',
            'navigateurs',
            'pays',
            'villes',
            'visitesParJour'
        ));
    }
}