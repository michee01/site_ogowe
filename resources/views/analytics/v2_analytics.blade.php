@extends('layouts.app')

@section('content')

<div class="p-6">

    <h1 class="text-2xl font-bold mb-6">
        Analytics du site
    </h1>
    <!-- Formulaire --->
    <div class="bg-white rounded-lg shadow p-4 mb-6">

        <form method="GET" action="{{ route('analytics.index') }}">

            <div class="flex flex-col md:flex-row md:items-center gap-3">

                <label for="periode" class="font-medium">
                    Période :
                </label>

                <select
                    name="periode"
                    id="periode"
                    class="border rounded-lg px-4 py-2"
                    onchange="this.form.submit()"
                >

                    <option value="today"
                        {{ $periode === 'today' ? 'selected' : '' }}>
                        Aujourd'hui
                    </option>

                    <option value="7"
                        {{ $periode === '7' ? 'selected' : '' }}>
                        7 derniers jours
                    </option>

                    <option value="30"
                        {{ $periode === '30' ? 'selected' : '' }}>
                        30 derniers jours
                    </option>

                    <option value="all"
                        {{ $periode === 'all' ? 'selected' : '' }}>
                        Tout
                    </option>

                </select>

            </div>

        </form>

    </div>
    
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-6">

        <!-- Visiteurs uniques -->
        <div class="bg-white rounded-lg shadow p-6">
            <p class="text-gray-500 text-sm">Visiteurs uniques</p>
            <p class="text-3xl font-bold mt-2">
                {{ $visiteursUniques }}
            </p>
        </div>

        <!-- Sessions -->
        <div class="bg-white rounded-lg shadow p-6">
            <p class="text-gray-500 text-sm">Sessions</p>
            <p class="text-3xl font-bold mt-2">
                {{ $sessions }}
            </p>
        </div>

        <!-- Pages vues -->
        <div class="bg-white rounded-lg shadow p-6">
            <p class="text-gray-500 text-sm">Pages vues</p>
            <p class="text-3xl font-bold mt-2">
                {{ $pagesVues }}
            </p>
        </div>

        <!-- Pages / session -->
        <div class="bg-white rounded-lg shadow p-6">
            <p class="text-gray-500 text-sm">Pages / session</p>
            <p class="text-3xl font-bold mt-2">
                {{ $pagesParSession }}
            </p>
        </div>

    </div>

    <!-- Cartes -->
    <div class="bg-white rounded-lg shadow p-6 mt-6">

        <h2 class="text-lg font-semibold mb-4">
            Évolution des pages vues
        </h2>

        <canvas id="visitesChart"></canvas>

    </div>

    <!---------------------------->
    <div class="bg-white rounded-lg shadow p-6">
        <h2 class="text-lg font-semibold mb-4">
            Sources d'acquisition
        </h2>

        <div class="h-80">
            <canvas id="sourcesChart"></canvas>
        </div>
    </div>

    <!---------------------------------->
    <div class="bg-white rounded-lg shadow p-6 mt-6">

        <h2 class="text-lg font-semibold mb-4">
            Pages les plus consultées
        </h2>

        <div class="space-y-4">

            @forelse($pagesPopulaires as $page)

                <div class="flex items-center justify-between border-b pb-3">

                    <div class="font-medium">
                        {{ $page->page === '/' ? '/' : '/' . $page->page }}
                    </div>

                    <div class="text-gray-600">
                        {{ $page->total }} vues
                    </div>

                </div>

            @empty

                <p class="text-gray-500">
                    Aucune donnée disponible.
                </p>

            @endforelse

        </div>

    </div>
    <!---------- Appareils ------------------------>
    <div class="bg-white rounded-lg shadow p-6">
        <h2 class="text-lg font-semibold mb-4">
            Appareils
        </h2>

        <div class="h-80">
            <canvas id="devicesChart"></canvas>
        </div>
    </div>

    <!----------- Navigateurs ------------------------>
    <div class="bg-white rounded-lg shadow p-6">
        <h2 class="text-lg font-semibold mb-4">
            Navigateurs
        </h2>

        <div class="h-80">
            <canvas id="browsersChart"></canvas>
        </div>
    </div>

    <!---------------------------------------->
    <div class="bg-white rounded-lg shadow p-6 mt-6">

        <h2 class="text-lg font-semibold mb-4">
            Pays des visiteurs
        </h2>

        <div class="space-y-4">

            @forelse($pays as $paysVisiteur)

                <div class="flex items-center justify-between border-b pb-3">

                    <div class="font-medium">
                        {{ $paysVisiteur->country }}
                    </div>

                    <div class="text-gray-600">
                        {{ $paysVisiteur->total }} visites
                    </div>

                </div>

            @empty

                <p class="text-gray-500">
                    Aucune donnée de géolocalisation disponible.
                </p>

            @endforelse

        </div>

    </div>
    <!--------------------------------------------->
    <div class="bg-white rounded-lg shadow p-6 mt-6">

        <h2 class="text-lg font-semibold mb-4">
            Villes des visiteurs
        </h2>

        <div class="space-y-4">

            @forelse($villes as $ville)

                <div class="flex items-center justify-between border-b pb-3">

                    <div>
                        <span class="font-medium">
                            {{ $ville->city }}
                        </span>

                        <span class="text-gray-500 text-sm ml-2">
                            {{ $ville->country }}
                        </span>
                    </div>

                    <div class="text-gray-600">
                        {{ $ville->total }} visites
                    </div>

                </div>

            @empty

                <p class="text-gray-500">
                    Aucune donnée de ville disponible.
                </p>

            @endforelse

        </div>

    </div>

    <!------------------------------------------------->


</div>

@endsection

@push('scripts')

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
    const visitesParJour = @json($visitesParJour);

    const labels = visitesParJour.map(item => item.date);
    const data = visitesParJour.map(item => item.total);

    new Chart(document.getElementById('visitesChart'), {
        type: 'line',

        data: {
            labels: labels,

            datasets: [{
                label: 'Pages vues',
                data: data,
                tension: 0.3,
                fill: true
            }]
        },

        options: {
            responsive: true,

            plugins: {
                legend: {
                    display: true
                }
            },

            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });

    /// Graphique sources d'acquisition
    const sourcesLabels = @json($sources->pluck('source'));
    const sourcesData = @json($sources->pluck('total'));

    new Chart(document.getElementById('sourcesChart'), {
        type: 'doughnut',
        data: {
            labels: sourcesLabels,
            datasets: [{
                data: sourcesData
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
                legend: {
                    position: 'bottom'
                }
            }
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
                data: devicesData
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
                legend: {
                    position: 'bottom'
                }
            }
        }
    });

    /// Navigateurs 
    const browsersLabels = @json($navigateurs->pluck('browser'));
    const browsersData = @json($navigateurs->pluck('total'));

    new Chart(document.getElementById('browsersChart'), {
        type: 'bar',
        data: {
            labels: browsersLabels,
            datasets: [{
                label: 'Visites',
                data: browsersData
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            scales: {
                y: {
                    beginAtZero: true,
                    ticks: {
                        precision: 0
                    }
                }
            },
            plugins: {
                legend: {
                    display: false
                }
            }
        }
    });

</script>

@endpush