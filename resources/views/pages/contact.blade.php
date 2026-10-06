@extends('layouts.app')

@section('title', 'Contact - Ogowe')

@section('content')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    
    <header class="relative bg-gray-950 text-white overflow-hidden">

        <div class="absolute inset-0">
            <img
                src="{{ asset('images/logo/logo-ogowe1.png') }}"
                alt=""
                class="w-full h-full object-cover opacity-30"
            >
            <div class="absolute inset-0 bg-gradient-to-r from-black via-black/5 to-black/2"></div>
        </div>
        <div class="relative z-10 container mx-auto px-6 py-16 md:py-20">
            <div class="max-w-4xl">
                <div class="flex items-center gap-3 mb-5">
                    <span class="w-12 h-1 bg-red-600"></span>
                    <span class="w-6 h-1 bg-white"></span>
                </div>
                <h1 class="text-4xl sm:text-5xl md:text-6xl font-black uppercase tracking-tight leading-tight">
                    Nos Contact
                </h1> 
            </div>
        </div>
        <div class="absolute -right-24 -top-24 w-72 h-72 rounded-full bg-red-600/10"></div>

    </header>

@if(session()->has('success'))
    <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4" role="alert">
        <strong class="font-bold">Succès !</strong>
        <span class="block sm:inline">{{ session('success') }}</span>
    </div>
@endif

@if(session()->has('error'))
    <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-4" role="alert">
        <strong class="font-bold">Erreur !</strong>
        <span class="block sm:inline">{{ session('error') }}</span>
    </div>
@endif

    <section class="py-12">
        <div class="container mx-auto px-6">
            <div class="grid md:grid-cols-2 gap-16">
                
                <div class="space-y-12">
                    <div class="p-4">
                        <h2 class="text-2xl font-bold mb-8 uppercase tracking-tight">Nos Coordonnées</h2>
                        <div class="space-y-6">
                            <div class="flex items-start space-x-4">
                                <div class=" text-white p-3">📍</div>
                                <div>
                                    <h4 class="font-bold uppercase text-sm">Adresse</h4>
                                    <p class="text-gray-600 font-bold">Av. Mgr Tafunga Mbayo n°50, Golf Malela Tshamalale, Lubumbashi.</p>
                                </div>
                            </div>
                            <div class="flex items-start space-x-4">
                                <div class="text-white p-3">
                                    <a href="https://wa.me/243977976226" target="_blank">
                                        📞
                                    </a>
                                </div>
                                <div>
                                    <h4 class="font-bold uppercase text-sm">Téléphone</h4>
                                    <p class="text-gray-600 font-bold">                                        
                                        <a href="https://wa.me/243977976226" target="_blank">
                                            (+243) 977976226
                                        </a>
                                    </p>
                                </div>
                            </div>
                            <div class="flex items-start space-x-4">
                                <div class="text-white p-3">
                                    <a href="mailto:info@ogowe-rdc.com">
                                        ✉️
                                    </a>
                                </div>
                                <div>
                                    <h4 class="font-bold uppercase text-sm">Email</h4>
                                    <p class="text-gray-600 font-bold">
                                        <a href="mailto:contact@ogowe-rdc.com">
                                            contact@ogowe-rdc.com
                                        </a>
                                    </p>
                                </div>
                            </div>
                            <h5 class="text-black font-bold mb-6">Suivez-nous</h5>
                            <div class="flex space-x-2">
                                <a href="https://www.facebook.com/share/1DYf1FAKUw/" target="_blank" class="w-10 h-10 bg-blue-800 rounded-full flex items-center justify-center hover:bg-cidepBlue transition text-white">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                                <a href="https://www.tiktok.com/@ogowerdc?_r=1&_t=ZS-93n6l9OQmOr" target="_blank" class="w-10 h-10 bg-red-800 rounded-full flex items-center justify-center hover:bg-cidepBlue transition text-white">
                                    <i class="fab fa-tiktok"></i>
                                </a>
                                <a href="https://www.linkedin.com/company/ogowe-cleaning/" target="_blank" class="w-10 h-10 bg-blue-600 rounded-full flex items-center justify-center hover:bg-cidepBlue transition text-white">
                                    <i class="fab fa-linkedin-in"></i>
                                </a>
                                <a href="https://www.instagram.com/ogow.e?utm_source=qr" target="_blank" class="w-10 h-10 bg-red-800 rounded-full flex items-center justify-center hover:bg-cidepBlue transition text-white">
                                    <i class="fab fa-instagram"></i>
                                </a>
                            </div>
                        </div>                        
                    </div>
                </div> 

                <div class="bg-gray-50 p-8 md:p-12 shadow-sm border-t-4 border-black">
                    <h2 class="text-2xl font-bold mb-8 uppercase tracking-tight">Envoyez-nous un message</h2>
                    <form action="{{ route('contact.send') }}" method="post" class="space-y-6">
                        @csrf
                        <div>
                            <label class="block text-sm font-bold uppercase mb-2">Nom Complet</label>
                            <input type="text" name="nom" placeholder="Ex: Jean Mukendi" class="w-full p-2 border border-gray-300 focus:outline-none focus:border-red-600 transition" required>
                        </div>
                        <div>
                            <label class="block text-sm font-bold uppercase mb-2">Telephone</label>
                            <input type="tel" name="tel" placeholder="+2430000000000" class="w-full p-2 border border-gray-300 focus:outline-none focus:border-red-600 transition" required>
                        </div>
                        <div>
                            <label class="block text-sm font-bold uppercase mb-2">Email</label>
                            <input type="email" name="email" placeholder="votre@email.com" class="w-full p-4 border border-gray-300 focus:outline-none focus:border-red-600 transition" required>
                        </div>
                        <div>
                            <label class="block text-sm font-bold uppercase mb-2">Type de service souhaité</label>
                            <select name="objet" class="w-full p-2 border border-gray-300 focus:outline-none focus:border-red-600 transition" required>
                                <option value="">Sélectionnez un service</option>
                                <option value="Logistique-Distribution">Logistique et Distribution</option>
                                <option value="Hygiène-Entretien">Hygiene et Entretien</option>
                                <option value="Santé-Sécurité">Santé et Sécurité</option>
                                <option value="Autres">Autres</option>
                            </select>
                        </div>
                        <div>
                            <label class="block text-sm font-bold uppercase mb-2">Message</label>
                            <textarea name="message" rows="5" placeholder="Décrivez votre besoin..." class="w-full p-2 border border-gray-300 focus:outline-none focus:border-red-600 transition" required></textarea>
                        </div>
                        <button type="submit" class="w-full bg-black text-white font-bold py-4 uppercase rounded-2xl hover:bg-red-600 transition duration-300">
                            Envoyer la demande
                        </button>
                    </form>
                </div>

            </div>
        </div>
    </section>
      
    <style> 
        .page3 {
            border-bottom: 4px solid black;
            padding-bottom: 2px;
            }
    </style>      
@endsection

