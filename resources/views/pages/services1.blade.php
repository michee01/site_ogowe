@extends('layouts.app')

@section('title', 'Services - Ogowe')

@section('content')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    
    <header class="relative bg-black text-white py-20 overflow-hidden">
        <!-- Image de fond -->
        <div class="absolute inset-0">
            <img src="images/logo/logo-ogowe1.png" alt="Fond header" loading="lazy" class="w-full h-full object-cover opacity-60">
            <div class="absolute inset-0 bg-black/20"></div> <!-- Overlay sombre pour lisibilité -->
        </div>

        <!-- Contenu -->
        <div class="container mx-auto px-6 relative z-10">
            <h1 class="text-4xl md:text-6xl font-black uppercase mb-4">
                Our Services
            </h1>
            <p class="text-xl text-gray-200 max-w-2xl text-justify">
                Multidisciplinary technical expertise to meet your residential, commercial, and industrial requirements.
            </p>
        </div>

        <!-- Décoratif cercle rouge -->
        <div class="absolute top-0 right-0 w-64 h-64 bg-red-600 opacity-20 -mr-20 -mt-20 rounded-full z-0"></div>
    </header>

    <!-------------------------------------------------------------------------------------------------------->

    <!-- Logistics & Distribution -->
    <div id="distribution" class="w-full h-14 "> </div>
    <section id="distribution" class="py-20 bg-gray-50">
        <div class="container mx-auto px-6">
            <div class="flex flex-col md:flex-row gap-12 items-center">
                <div class="md:w-1/2">
                    <h2 class="text-3xl font-bold mt-2 mb-6 uppercase">Logistics & Distribution</h2>
                    <p class="text-gray-800 text-lg text-justify mb-8 leading-relaxed">
                        From Dar es Salaam to the heart of Haut-Katanga and Lualaba, we handle all your transit and transportation formalities, 
                        ensuring your goods are delivered with full traceability and security, while meeting agreed deadlines. Thanks to our expertise, 
                        we provide seamless and innovative logistics solutions, culminating in the efficient distribution of essential supplies, 
                        including fuel and dry agri-food products.
                    </p>
                    <ul class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <li class="flex items-center space-x-3 bg-gray-100 p-3 rounded">
                            <span class="text-red-600 group-hover:scale-110 transition-transform">✦</span>
                            <span class="text-md">Dar es Salaam Transit – Transportation</span>
                        </li>
                        <li class="flex items-center space-x-3 bg-gray-100 p-3 rounded">
                            <span class="text-red-600 group-hover:scale-110 transition-transform">✦</span>
                            <span class="text-md">FERI / COD</span>
                        </li>
                        <li class="flex items-center space-x-3 bg-gray-100 p-3 rounded">
                            <span class="text-red-600 group-hover:scale-110 transition-transform">✦</span>
                            <span class="text-md">Distribution: Fuel and dry agri-food products</span>
                        </li>
                    </ul>
                </div>
                <div class="md:w-1/2 bg-gray-200 h-85 rounded-lg shadow-inner flex items-center justify-center text-gray-400 font-bold italic">
                    <img src="{{ asset('images/assets/log1.jpg') }}" alt="service logistique" loading="lazy" srcset="" class="w-full h-85">
                </div>
            </div>
        </div>
    </section>
    <!-------------------------------------------------------------------------------------------------------->
    <!--Hygiene et entretien-->
    <div id="hygiene-entretien" class="w-full h-14"> </div>
    <section id="hygiene-entretien" class="py-20 border-b border-gray-100">
        <div class="container mx-auto px-6">
            <div class="flex flex-col md:flex-row gap-12 items-center">
                <div class="md:w-1/2">
                    <h2 class="text-3xl font-bold mt-2 mb-6 uppercase">Hygiene & Maintenance</h2>
                    <p class="text-gray-800 text-lg text-justify mb-8 leading-relaxed">
                        We provide comprehensive cleaning and maintenance solutions for professional spaces, ensuring a 
                        flawless environment that reflects our clients’ brand image and commitment to excellence.
                    </p>                    
                    <div class="space-y-6">
                        <div class="flex items-start space-x-4">
                            <div class="bg-black text-white p-2 mt-1">🏠</div>
                            <div>
                                <h4 class="font-bold text-lg uppercase">Residential Cleaning</h4>
                                <p class="text-md text-gray-800">
                                    Available on demand, specialized for move-in and move-out cleaning.
                                </p>
                            </div>
                        </div>
                        <div class="flex items-start space-x-4">
                            <div class="bg-black text-white p-2 mt-1">🏭</div>
                            <div>
                                <h4 class="font-bold text-lg uppercase">Industrial & Commercial Cleaning</h4>
                                <p class="text-md text-gray-800">
                                    Comprehensive maintenance for offices, warehouses, and complex industrial sites.
                                </p>
                            </div>
                        </div>
                    </div>
                    
                </div>
                <div class="md:w-1/2 bg-gray-200 h-85 rounded-lg shadow-inner flex items-center justify-center text-gray-400 font-bold italic">
                    <img src="{{asset('images/assets/hygiene.jpeg') }}" alt="service hygiène et entretien" loading="lazy" srcset="" class="w-full h-85">
                </div>
            </div>
        </div>
    </section>
    <!-------------------------------------------------------------------------------------------------------->

    <!-- Pest Control & Prevention -->
    <div id="sante-securite" class="w-full h-14 "> </div>
    <section id="sante-securite" class="py-20 bg-gray-50">
        <div class="container mx-auto px-6">
            <div class="flex flex-col md:flex-row-reverse gap-12 items-center">
                <div class="md:w-1/2">
                    <h2 class="text-3xl font-bold mt-2 mb-6 uppercase">Pest Control & Prevention</h2>
                    <p class="text-gray-800 text-lg text-justify mb-8 leading-relaxed">
                        We keep your workplace safe and healthy by controlling pests (insects, rodents), carrying out hygiene checks, 
                        and using sustainable prevention methods to protect your people and facilities from health risks.
                    </p>
                    <ul class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <li class="flex items-center space-x-3 bg-gray-100 p-3 rounded">
                            <span class="text-red-600 group-hover:scale-110 transition-transform">✦</span>
                            <span class="text-md">Rats & Mice</span>
                        </li>
                        <li class="flex items-center space-x-3 bg-gray-100 p-3 rounded">
                            <span class="text-red-600 group-hover:scale-110 transition-transform">✦</span>
                            <span class="text-md">Crawling & Flying Insects</span>
                        </li>
                        <li class="flex items-center space-x-3 bg-gray-100 p-3 rounded">
                            <span class="text-red-600 group-hover:scale-110 transition-transform">✦</span>
                            <span class="text-md">Termites</span>
                        </li>
                        <li class="flex items-center space-x-3 bg-gray-100 p-3 rounded">
                            <span class="text-red-600 group-hover:scale-110 transition-transform">✦</span>
                            <span class="text-md">Fumigation</span>
                        </li>
                    </ul>
                </div>
                <div class="md:w-1/2 bg-white border border-gray-200 h-85 rounded-lg shadow-xl flex items-center justify-center text-gray-300 font-bold italic">
                    <img src="{{asset('images/assets/lutte1.jpeg') }}" alt="service antiparasitaire" loading="lazy" srcset="" class="w-full h-85">
                </div>
            </div>
        </div>
    </section>
    <!-------------------------------------------------------------------------------------------------------->


    <!--Appel a l'action-->
    <section class="mx-auto px-6 mb-15">        
            <div class="pt-10 px-20 mt-15  flex flex-col md:flex-row items-center justify-between bg-gray-200 p-8 rounded-2xl">
                <div class="flex items-center gap-4 mb-6 md:mb-0">
                    <div class="w-12 h-12 bg-red-600 rounded-full flex items-center justify-center animate-pulse">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                        </svg>
                    </div>
                    <p class="text-xl font-bold text-black uppercase tracking-tight">
                        DO YOU NEED A QUOTE?
                    </p>
                </div>
                
                <a href="{{route('contact')}}" class="rounded-2xl group relative inline-flex items-center justify-center px-8 py-4 font-black text-white uppercase tracking-widest bg-green-800 overflow-hidden transition-all duration-300 hover:text-black">
                    <span class="relative z-10 ">Contact us</span>
                    <svg class="w-5 h-5 ml-3 relative z-10 transform group-hover:translate-x-2 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                    </svg>
                </a>
            </div>
    </section>
    <!-------------------------------------------------------------------------------------------------------->

    
    <style> 
        .page2 {
            border-bottom: 4px solid black;
            padding-bottom: 2px;
            }
    </style>
    
@endsection