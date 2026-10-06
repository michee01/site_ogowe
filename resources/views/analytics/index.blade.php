<!DOCTYPE html>
<html class="light" lang="fr">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>@yield('title', "Ogowe - Logistique, Entretien, Santé et Sécurité")</title>
    <!-- Font Awesome CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icons/6.6.6/css/flag-icons.min.css">

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-94LJGFKHCL"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-94LJGFKHCL');
    </script>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body class="bg-surface text-on-surface font-body">
    <div class="max-w-7xl mx-auto p-4 sm:p-6 space-y-6">

        <!-- En-tête + Filtre de Période -->
        <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4 bg-white p-5 rounded-2xl shadow-sm border border-gray-100">
            <div>
                <h1 class="text-2xl font-bold text-gray-900 tracking-tight">Analytics du site <span class="text-red-600 font-semibold">Ogowe</span></h1>
                <p class="text-sm text-gray-500 mt-1">Aperçu des performances et du trafic en temps réel</p>
            </div>

            <!-- Formulaire -->
            <form method="GET" action="{{ route('analytics.index') }}" class="flex items-center">
                <div class="relative w-full sm:w-auto">
                    <select
                        name="periode"
                        id="periode"
                        class="w-full sm:w-auto appearance-none bg-gray-50 border border-gray-200 text-gray-700 font-medium py-2 px-4 pr-10 rounded-xl focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:bg-white text-sm transition"
                        onchange="this.form.submit()"
                    >
                        <option value="today" {{ $periode === 'today' ? 'selected' : '' }}>Aujourd'hui</option>
                        <option value="7" {{ $periode === '7' ? 'selected' : '' }}>7 derniers jours</option>
                        <option value="30" {{ $periode === '30' ? 'selected' : '' }}>30 derniers jours</option>
                        <option value="all" {{ $periode === 'all' ? 'selected' : '' }}>Tout</option>
                    </select>
                    <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-3 text-gray-500">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                    </div>
                </div>
            </form>
        </div>

        <!-- Grille des KPIs -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">

            <!-- Visiteurs uniques -->
            <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-5 hover:shadow-md transition">
                <div class="flex items-center justify-between">
                    <p class="text-xs font-semibold text-gray-400 uppercase tracking-wider">Visiteurs uniques</p>
                    <div class="p-2 bg-indigo-50 text-indigo-600 rounded-lg">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path></svg>
                    </div>
                </div>
                <p class="text-3xl font-extrabold text-gray-900 mt-3">{{ $visiteursUniques }}</p>
            </div>

            <!-- Sessions -->
            <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-5 hover:shadow-md transition">
                <div class="flex items-center justify-between">
                    <p class="text-xs font-semibold text-gray-400 uppercase tracking-wider">Sessions</p>
                    <div class="p-2 bg-blue-50 text-blue-600 rounded-lg">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                    </div>
                </div>
                <p class="text-3xl font-extrabold text-gray-900 mt-3">{{ $sessions }}</p>
            </div>

            <!-- Pages vues -->
            <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-5 hover:shadow-md transition">
                <div class="flex items-center justify-between">
                    <p class="text-xs font-semibold text-gray-400 uppercase tracking-wider">Pages vues</p>
                    <div class="p-2 bg-emerald-50 text-emerald-600 rounded-lg">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path></svg>
                    </div>
                </div>
                <p class="text-3xl font-extrabold text-gray-900 mt-3">{{ $pagesVues }}</p>
            </div>

            <!-- Pages / session -->
            <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-5 hover:shadow-md transition">
                <div class="flex items-center justify-between">
                    <p class="text-xs font-semibold text-gray-400 uppercase tracking-wider">Pages / session</p>
                    <div class="p-2 bg-amber-50 text-amber-600 rounded-lg">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path></svg>
                    </div>
                </div>
                <p class="text-3xl font-extrabold text-gray-900 mt-3">{{ $pagesParSession }}</p>
            </div>

        </div>

        <!-- Section Principale : Graphique d'Évolution (Pleine largeur) -->
        <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-6">
            <div class="flex items-center justify-between mb-6">
                <h2 class="text-lg font-bold text-gray-900">Évolution des pages vues</h2>
            </div>
            <div class="relative w-full h-72">
                <canvas id="visitesChart"></canvas>
            </div>
        </div>

        <!-- Grille 2 colonnes : Acquisition & Pages consultées -->
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">

            <!-- Sources d'acquisition -->
            <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-6 lg:col-span-1">
                <h2 class="text-lg font-bold text-gray-900 mb-6">Sources d'acquisition</h2>
                <div class="relative h-64 flex items-center justify-center">
                    <canvas id="sourcesChart"></canvas>
                </div>
            </div>

            <!-- Pages les plus consultées -->
            <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-6 lg:col-span-2 flex flex-col justify-between">
                <div>
                    <h2 class="text-lg font-bold text-gray-900 mb-6">Pages les plus consultées</h2>
                    <div class="divide-y divide-gray-100">
                        @forelse($pagesPopulaires as $page)
                            <div class="py-3 flex items-center justify-between hover:bg-gray-50/50 px-2 rounded-lg transition">
                                <span class="font-mono text-sm font-medium text-gray-800 truncate max-w-xs sm:max-w-md">
                                    {{ $page->page === '/' ? '/' : '/' . $page->page }}
                                </span>
                                <span class="inline-flex items-center px-2.5 py-1 rounded-full text-xs font-semibold bg-gray-100 text-gray-700">
                                    {{ number_format($page->total) }} vues
                                </span>
                            </div>
                        @empty
                            <p class="text-gray-400 text-sm py-4 text-center">Aucune donnée disponible.</p>
                        @endforelse
                    </div>
                </div>
            </div>

        </div>

        <!-- Grille 2 colonnes : Appareils & Navigateurs -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">

            <!-- Appareils -->
            <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-6">
                <h2 class="text-lg font-bold text-gray-900 mb-6">Appareils</h2>
                <div class="relative h-60 flex items-center justify-center">
                    <canvas id="devicesChart"></canvas>
                </div>
            </div>

            <!-- Navigateurs -->
            <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-6">
                <h2 class="text-lg font-bold text-gray-900 mb-6">Navigateurs</h2>
                <div class="relative h-60">
                    <canvas id="browsersChart"></canvas>
                </div>
            </div>

        </div>

        <!-- Grille 2 colonnes : Géolocalisation (Pays & Villes) -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">

            <!-- Pays -->
            <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-6">
                <h2 class="text-lg font-bold text-gray-900 mb-6">Pays des visiteurs</h2>
                <div class="divide-y divide-gray-100 max-h-80 overflow-y-auto pr-1">
                    @forelse($pays as $paysVisiteur)
                        <div class="py-3 flex items-center justify-between hover:bg-gray-50/50 px-2 rounded-lg transition">
                            <span class="font-medium text-sm text-gray-800">{{ $paysVisiteur->country }}</span>
                            <span class="text-sm font-medium text-gray-500">{{ number_format($paysVisiteur->total) }} visites</span>
                        </div>
                    @empty
                        <p class="text-gray-400 text-sm py-4 text-center">Aucune donnée de géolocalisation disponible.</p>
                    @endforelse
                </div>
            </div>

            <!-- Villes -->
            <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-6">
                <h2 class="text-lg font-bold text-gray-900 mb-6">Villes des visiteurs</h2>
                <div class="divide-y divide-gray-100 max-h-80 overflow-y-auto pr-1">
                    @forelse($villes as $ville)
                        <div class="py-3 flex items-center justify-between hover:bg-gray-50/50 px-2 rounded-lg transition">
                            <div>
                                <span class="font-medium text-sm text-gray-800">{{ $ville->city }}</span>
                                <span class="text-xs text-gray-400 ml-1.5">• {{ $ville->country }}</span>
                            </div>
                            <span class="text-sm font-medium text-gray-500">{{ number_format($ville->total) }} visites</span>
                        </div>
                    @empty
                        <p class="text-gray-400 text-sm py-4 text-center">Aucune donnée de ville disponible.</p>
                    @endforelse
                </div>
            </div>

        </div>

    </div>



<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
    // Configuration globale des polices Chart.js
    Chart.defaults.font.family = 'Inter, system-ui, sans-serif';
    Chart.defaults.color = '#6B7280';

    document.addEventListener('DOMContentLoaded', function () {
        const canvasElement = document.getElementById('visitesChart');

        if (!canvasElement) return;

        const visitesParJour = @json($visitesParJour ?? []);
        const labels = visitesParJour.map(item => item.date);
        const data = visitesParJour.map(item => item.total);

        const visitesCtx = canvasElement.getContext('2d');

        // Dégradé fluide de couleur
        let gradient = 'rgba(99, 102, 241, 0.1)';
        if (canvasElement.clientHeight > 0) {
            const g = visitesCtx.createLinearGradient(0, 0, 0, canvasElement.clientHeight || 300);
            g.addColorStop(0, 'rgba(99, 102, 241, 0.3)');
            g.addColorStop(1, 'rgba(99, 102, 241, 0.0)');
            gradient = g;
        }

        new Chart(visitesCtx, {
            type: 'line',
            data: {
                labels: labels,
                datasets: [{
                    label: 'Pages vues',
                    data: data,
                    borderColor: '#6366F1',
                    borderWidth: 2.5,
                    backgroundColor: gradient,
                    tension: 0.35,
                    fill: true,
                    pointBackgroundColor: '#6366F1',
                    pointRadius: 3,
                    pointHoverRadius: 6
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: { display: false },
                    tooltip: {
                        mode: 'index',
                        intersect: false,
                        backgroundColor: '#1E293B',
                        titleFont: { size: 13 },
                        bodyFont: { size: 12 },
                        padding: 10,
                        cornerRadius: 8
                    }
                },
                scales: {
                    x: {
                        grid: { display: false }
                    },
                    y: {
                        beginAtZero: true,
                        grid: { color: '#F3F4F6' },
                        border: { dash: [4, 4] },
                        ticks: { precision: 0 }
                    }
                }
            }
        });
    });
    /// Palette de couleurs réutilisable
    const chartColors = ['#6366F1', '#3B82F6', '#10B981', '#F59E0B', '#EC4899', '#8B5CF6'];

    /// Graphique sources d'acquisition
    const sourcesLabels = @json($sources->pluck('source'));
    const sourcesData = @json($sources->pluck('total'));

    new Chart(document.getElementById('sourcesChart'), {
        type: 'doughnut',
        data: {
            labels: sourcesLabels,
            datasets: [{
                data: sourcesData,
                backgroundColor: chartColors,
                borderWidth: 0
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
                legend: { position: 'bottom', labels: { boxWidth: 12, padding: 15 } }
            },
            cutout: '70%'
        }
    });

    /// Appareils utilisés
    const devicesLabels = @json($appareils->pluck('device'));
    const devicesData = @json($appareils->pluck('total'));

    new Chart(document.getElementById('devicesChart'), {
        type: 'doughnut',
        data: {
            labels: devicesLabels,
            datasets: [{
                data: devicesData,
                backgroundColor: chartColors,
                borderWidth: 0
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
                legend: { position: 'bottom', labels: { boxWidth: 12, padding: 15 } }
            },
            cutout: '70%'
        }
    });

    /// Navigateurs 
    const browsersLabels = @json($navigateurs->pluck('browser'));
    const browsersData = @json($navigateurs->pluck('total'));

    // Définition d'une palette de couleurs variées
    const browserColors = [
        '#3B82F6', // Bleu (ex: Chrome)
        '#F97316', // Orange (ex: Firefox)
        '#06B6D4', // Cyan / Bleu clair (ex: Safari)
        '#EF4444', // Rouge (ex: Opera / Edge)
        '#8B5CF6', // Violet
        '#10B981', // Vert
        '#F59E0B', // Jaune/Ambre
        '#EC4899'  // Rose
    ];

    new Chart(document.getElementById('browsersChart'), {
        type: 'bar',
        data: {
            labels: browsersLabels,
            datasets: [{
                label: 'Visites',
                data: browsersData,
                // En passant le tableau de couleurs, Chart.js attribue automatiquement 
                // une couleur différente à chaque barre dans l'ordre du tableau
                backgroundColor: browserColors,
                borderRadius: 6
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            scales: {
                x: { 
                    grid: { display: false } 
                },
                y: {
                    beginAtZero: true,
                    grid: { color: '#F3F4F6' },
                    border: { dash: [4, 4] },
                    ticks: { precision: 0 }
                }
            },
            plugins: {
                legend: { display: false }
            }
        }
    });

</script>
</body>

</html>