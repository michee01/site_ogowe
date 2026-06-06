@extends('layouts.app')

@section('title', 'Services - Ogowe')

@section('content')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <style>
        .whatsapp-float {
            position: fixed;
            bottom: 20px;
            right: 20px;
            background-color: #25d366;
            color: white;
            border-radius: 50px;
            text-align: center;
            font-size: 30px;
            box-shadow: 2px 2px 10px rgba(0,0,0,0.2);
            z-index: 100;
            display: flex;
            align-items: center;
            padding: 10px 20px;
            text-decoration: none;
            font-family: Arial, sans-serif;
            font-weight: bold;
        }
    </style>


    <header class="relative bg-black text-white py-20 overflow-hidden">
        <!-- Image de fond -->
        <div class="absolute inset-0">
            <img src="{{ asset('images/logo/logo-ogowe.jpeg') }}" alt="Fond header" class="w-full h-full object-cover opacity-60">
            <div class="absolute inset-0 bg-black/20"></div> <!-- Overlay sombre pour lisibilité -->
        </div>

        <!-- Contenu -->
        <div class="container mx-auto px-6 relative z-10">
            <h1 class="text-4xl md:text-5xl font-black uppercase mb-4">Contact us</h1>
            <p class="text-xl text-gray-200 max-w-2xl text-justify">
                Ready to clean up your environment? Our team is at your disposal for a quote or an intervention.
            </p>
        </div>

        <!-- Décoratif cercle rouge -->
        <div class="absolute top-0 right-0 w-64 h-64 bg-red-600 opacity-20 -mr-20 -mt-20 rounded-full z-0"></div>
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
                    <div>
                        <h2 class="text-2xl font-bold mb-8 uppercase tracking-tight">Contact Information</h2>
                        <div class="space-y-6">
                            <div class="flex items-start space-x-4">
                                <div class=" text-white p-3">📍</div>
                                <div>
                                    <h4 class="font-bold uppercase text-sm">Location</h4>
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
                                    <h4 class="font-bold uppercase text-sm">Phone</h4>
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
                            <h5 class="text-black font-bold mb-6">Follow us</h5>
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
                    <h2 class="text-2xl font-bold mb-8 uppercase tracking-tight">Send us a Message</h2>
                    <form action="{{ route('contact.send') }}" method="post" class="space-y-6">
                        @csrf
                        <div>
                            <label class="block text-sm font-bold uppercase mb-2">Full Name</label>
                            <input type="text" name="nom placeholder="Ex: Jean Mukendi" class="w-full p-2 border border-gray-300 focus:outline-none focus:border-red-600 transition" required>
                        </div>
                        <div>
                            <label class="block text-sm font-bold uppercase mb-2">Phone</label>
                            <input type="tel" name="tel" placeholder="+2430000000000" class="w-full p-2 border border-gray-300 focus:outline-none focus:border-red-600 transition" required>
                        </div>
                        <div>
                            <label class="block text-sm font-bold uppercase mb-2">Email</label>
                            <input type="email" name="email" placeholder="votre@email.com" class="w-full p-4 border border-gray-300 focus:outline-none focus:border-red-600 transition" required>
                        </div>
                        <div>
                            <label class="block text-sm font-bold uppercase mb-2">Service Type</label>
                            <select name="objet" class="w-full p-2 border border-gray-300 focus:outline-none focus:border-red-600 transition" required>
                                <option value="">Select a service</option>
                                <option value="Hygiene-Entretien">Hygiene & Maintenance</option>
                                <option value="Lutte Antiparasitaire">Pest Control</option>
                                <option value="Gestion de cantines">Catering Management</option>
                                <option value="Distribution">Distribution</option>
                            </select>
                        </div>
                        <div>
                            <label class="block text-sm font-bold uppercase mb-2">Message</label>
                            <textarea name="message" rows="5" placeholder="Describe your needs..." class="w-full p-2 border border-gray-300 focus:outline-none focus:border-red-600 transition" required></textarea>
                        </div>
                        <button type="submit" class="w-full bg-black text-white font-bold py-4 uppercase rounded-2xl hover:bg-red-600 transition duration-300">
                            Submit Request
                        </button>
                    </form>
                </div>

            </div>
        </div>
    </section>

    <a href="https://wa.me/243977976226" class="whatsapp-float group" target="_blank">
        <span class="text-xl mr-2">💬</span> 
        <span class="text-xs uppercase tracking-tighter">Pest Emergency</span>
    </a>
    
    
    <style> 
        .page3 {
            border-bottom: 4px solid black;
            padding-bottom: 2px;
            }
    </style>
    
    
@endsection

