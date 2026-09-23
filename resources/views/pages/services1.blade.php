@extends('layouts.app')

@section('title', 'Services - Ogowe')

@section('content')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    
    <header class="relative bg-gray-950 text-white overflow-hidden">

        <div class="absolute inset-0">
            <img
                src="{{ asset('images/logo/logo-ogowe1.png') }}"
                alt=""
                class="w-full h-full object-cover opacity-30"
            >
            <!-- Overlay -->
            <div class="absolute inset-0 bg-gradient-to-r from-black via-black/5 to-black/2"></div>
        </div>

        <!-- Contenu -->
        <div class="relative z-10 container mx-auto px-6 py-16 md:py-20">

            <div class="max-w-4xl">
                <!-- Petite ligne décorative -->
                <div class="flex items-center gap-3 mb-5">
                    <span class="w-12 h-1 bg-red-600"></span>
                    <span class="w-6 h-1 bg-white"></span>
                </div>
                <!-- Titre -->
                <h1 class="text-4xl sm:text-5xl md:text-6xl font-black uppercase tracking-tight leading-tight">
                    Our services
                </h1>
                <br>
                <!-- Description 
                <p class="mt-5 text-lg md:text-xl text-gray-300 leading-relaxed max-w-3xl">
                    Une expertise technique multidisciplinaire pour répondre à vos exigences résidentiels, 
                    commerciaux et industriels.
                </p>-->
            </div>

        </div>
        <!-- Élément décoratif rouge -->
        <div class="absolute -right-24 -top-24 w-72 h-72 rounded-full bg-red-600/10"></div>

    </header>

    <!-------------------------------------------------------------------------------------------------------->

    <!-- Logistics & Distribution -->
    <div id="distribution" class="w-full h-14 "> </div>
    <section class="py-4">
        <div class="container mx-auto px-6 grid md:grid-cols-2 gap-16 items-center">
            <div>
                <style>
                    @keyframes zoomInFade {
                        0% {
                        transform: scale(0.9);
                        opacity: 0;
                        }
                        100% {
                        transform: scale(1);
                        opacity: 1;
                        }
                    }
                    /* Classe appliquée au scroll */
                    .animate-zoom {
                        animation: zoomInFade 1.2s ease forwards;
                    }
                    /* Effet au survol */
                    .scroll-animate:hover {
                        transform: scale(1.05);
                        transition: transform 0.4s ease, opacity 0.4s ease;
                        opacity: 1;
                    }
                </style>

                <h2 class="text-2xl font-bold mb-6 flex items-center scroll-animate">
                    <span class="w-8 h-px bg-black mr-4"></span>
                    Logistics et Distribution
                </h2>
                <p class="text-md text-gray-800 leading-relaxed mb-6 text-justify  scroll-animate">               
                    From Dar es Salaam to Haut-Katanga and Lualaba, we handle all your port and transportation formalities, including FERI and AD applications. 
                    We also provide the distribution and supply of dry food products and fuel.
                </p>
                <p class="text-justify text-md scroll-animate">
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
                            <span class="text-md">Distribution : Fuel and dry agri-food products, delivered on time.</span>
                        </li>
                    </ul>
                </p>

                <script>
                    // Observer pour déclencher l’animation au scroll
                    const observ = new IntersectionObserver(entries => {
                        entries.forEach(entry => {
                        if (entry.isIntersecting) {
                            entry.target.classList.add('animate-zoom');
                        } else {
                            entry.target.classList.remove('animate-zoom'); // rejoue si on ressort/revient
                        }
                        });
                    }, { threshold: 0.2 });

                    document.querySelectorAll('.scroll-animate').forEach(el => {
                        observ.observe(el);
                    });
                </script>

            </div>
            <div class="relative max-w-4xl mx-auto my-12">
                <div class="absolute -top-4 -right-4 w-full h-full border-4 border-black z-0 rounded-2xl hidden md:block"></div>

                <div class="relative z-10 bg-gray-200 h-96 flex items-center justify-center text-gray-600 font-bold overflow-hidden rounded-2xl shadow-xl">
                    
                    <div id="slider" class="flex w-full h-full transition-transform duration-700 ease-in-out">   

                        <div class="w-full h-full flex-shrink-0 relative">
                            <img src="{{ asset('images/assets/logistique_distribution/transit.webp') }}" alt="Lutte Antiparasitaire" loading="lazy" class="object-cover w-full h-full">
                            <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black/75 to-transparent p-6 text-white">
                                <p class="font-black text-lg tracking-tight font-medium">Dar es Saalam Transit</p>
                                <p class="text-xs text-gray-300 font-medium mt-1">.</p>
                            </div>
                        </div>     

                        <div class="w-full h-full flex-shrink-0 relative">
                            <img src="{{ asset('images/assets/logistique_distribution/general2.webp') }}" alt="Nettoyage Industriel" loading="lazy" class="object-cover w-full h-full">
                            <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black/75 to-transparent p-6 text-white">
                                <p class="font-black text-lg font-medium tracking-tight">Feri / COD</p>
                                <p class="text-xs text-gray-300 font-medium mt-1">.</p>
                            </div>
                        </div> 
                        <div class="w-full h-full flex-shrink-0 relative">
                            <img src="{{ asset('images/assets/logistique_distribution/distribution.webp') }}" alt="Nettoyage Industriel" loading="lazy" class="object-cover w-full h-full">
                            <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black/75 to-transparent p-6 text-white">
                                <p class="font-black text-lg font-medium tracking-tight">Distribution</p>
                                <p class="text-xs text-gray-300 font-medium mt-1">.</p>
                            </div>
                        </div> 

                    </div>

                    <button id="prev-btn" class="absolute left-4 top-1/2 -translate-y-1/2 bg-black/40 hover:bg-red-600 text-white w-10 h-10 flex items-center justify-center rounded-full transition duration-300 backdrop-blur-sm">
                        &#10094;
                    </button>
                    <button id="next-btn" class="absolute right-4 top-1/2 -translate-y-1/2 bg-black/40 hover:bg-red-600 text-white w-10 h-10 flex items-center justify-center rounded-full transition duration-300 backdrop-blur-sm">
                        &#10095;
                    </button>

                    <div class="absolute bottom-4 left-1/2 -translate-x-1/2 flex space-x-2 z-20 bg-black/30 backdrop-blur-md px-3 py-1.5 rounded-full">
                        <button class="w-2.5 h-2.5 rounded-full bg-red-600 focus:outline-none" onclick="goToSlide(0)"></button>
                        <button class="w-2.5 h-2.5 rounded-full bg-white focus:outline-none" onclick="goToSlide(1)"></button>
                        <button class="w-2.5 h-2.5 rounded-full bg-white focus:outline-none" onclick="goToSlide(2)"></button>
                    </div>
                </div>
            </div>

            <script>
                let currentSlide = 0;
                const slides = document.getElementById('slider');
                const totalSlides = 3;
                const dots = document.querySelectorAll('.absolute.bottom-4 button');

                function updateSlider() {
                    slides.style.transform = `translateX(-${currentSlide * 100}%)`;
                    
                    // Mettre à jour la couleur des petits points (dots)
                    dots.forEach((dot, index) => {
                        if (index === currentSlide1) {
                            dot.className = "w-2.5 h-2.5 rounded-full bg-red-600 focus:outline-none";
                        } else {
                            dot.className = "w-2.5 h-2.5 rounded-full bg-white focus:outline-none";
                        }
                    });
                }

                function nextSlide() {
                    currentSlide = (currentSlide + 1) % totalSlides;
                    updateSlider();
                }

                function prevSlide() {
                    currentSlide = (currentSlide - 1 + totalSlides) % totalSlides;
                    updateSlider();
                }

                function goToSlide(slideIndex) {
                    currentSlide = slideIndex;
                    updateSlider();
                }

                document.getElementById('next-btn').addEventListener('click', nextSlide);
                document.getElementById('prev-btn').addEventListener('click', prevSlide);

                // Défilement automatique toutes les 5 secondes (optionnel)
                setInterval(nextSlide, 5000);
            </script>
        </div>
    </section>
    <!-------------------------------------------------------------------------------------------------------->

    <!--Hygiene et entretien-->
    <div id="hygiene-entretien" class="w-full border-gray-100 h-14"> </div>
    <section class="py-4">
        <div class="container mx-auto px-6 grid md:grid-cols-2 gap-16 items-center">
            <div class="relative max-w-4xl mx-auto my-12">
                <div class="absolute -top-4 -left-4 w-full h-full border-4 border-black z-0 rounded-2xl hidden md:block"></div>

                <div class="relative z-10 bg-gray-200 h-96 flex items-center justify-center text-gray-600 font-bold overflow-hidden rounded-2xl shadow-xl">
                    
                    <div id="slider1" class="flex w-full h-full transition-transform duration-700 ease-in-out">   

                        <div class="w-full h-full flex-shrink-0 relative">
                            <img src="{{ asset('images/assets/hygiene_entretien/equipe2.webp') }}" alt="Équipe Ogowe" loading="lazy" class="object-cover w-full h-full">
                            <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black/75 to-transparent p-6 text-white">
                                <p class="font-black font-medium text-lg tracking-tight">Industrial & Commercial Cleaning</p>
                                <p class="text-xs text-gray-300 font-medium mt-1">.</p>
                            </div>
                        </div>

                        <div class="w-full h-full flex-shrink-0 relative">
                            <img src="{{ asset('images/assets/hygiene_entretien/entretien2.webp') }}" alt="Lutte Antiparasitaire" loading="lazy" class="object-cover w-full h-full">
                            <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black/75 to-transparent p-6 text-white">
                                <p class="font-black font-medium text-lg tracking-tight">Office Cleaning</p>
                                <p class="text-xs text-gray-300 font-medium mt-1">.</p>
                            </div>
                        </div>     

                        <div class="w-full h-full flex-shrink-0 relative">
                            <img src="{{ asset('images/assets/hygiene_entretien/entretien3.webp') }}" alt="Nettoyage Industriel" loading="lazy" class="object-cover w-full h-full">
                            <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black/75 to-transparent p-6 text-white">
                                <p class="font-black font-medium text-lg tracking-tight">Residential Cleaning</p>
                                <p class="text-xs text-gray-300 font-medium mt-1">.</p>
                            </div>
                        </div> 

                    </div>

                    <button id="prev-btn1" class="absolute left-4 top-1/2 -translate-y-1/2 bg-black/40 hover:bg-red-600 text-white w-10 h-10 flex items-center justify-center rounded-full transition duration-300 backdrop-blur-sm">
                        &#10094;
                    </button>
                    <button id="next-btn1" class="absolute right-4 top-1/2 -translate-y-1/2 bg-black/40 hover:bg-red-600 text-white w-10 h-10 flex items-center justify-center rounded-full transition duration-300 backdrop-blur-sm">
                        &#10095;
                    </button>

                    <div class="absolute bottom-4 left-1/2 -translate-x-1/2 flex space-x-2 z-20 bg-black/30 backdrop-blur-md px-3 py-1.5 rounded-full">
                        <button class="w-2.5 h-2.5 rounded-full bg-red-600 focus:outline-none" onclick="goToSlide1(0)"></button>
                        <button class="w-2.5 h-2.5 rounded-full bg-white focus:outline-none" onclick="goToSlide1(1)"></button>
                        <button class="w-2.5 h-2.5 rounded-full bg-white focus:outline-none" onclick="goToSlide1(2)"></button>
                    </div>
                </div>
            </div>

            <div>
                <style>
                    @keyframes zoomInFade {
                        0% {
                        transform: scale(0.9);
                        opacity: 0;
                        }
                        100% {
                        transform: scale(1);
                        opacity: 1;
                        }
                    }
                    /* Classe appliquée au scroll */
                    .animate-zoom {
                        animation: zoomInFade 1.2s ease forwards;
                    }
                    /* Effet au survol */
                    .scroll-animate:hover {
                        transform: scale(1.05);
                        transition: transform 0.4s ease, opacity 0.4s ease;
                        opacity: 1;
                    }
                </style>

                <h2 class="text-2xl font-bold mb-6 flex items-center scroll-animate">
                    <span class="w-8 h-px bg-black mr-4"></span>
                    Hygiene & Cleaning
                </h2>
                <p class="text-md text-gray-800 leading-relaxed mb-6 text-justify  scroll-animate">               
                    We ensure the cleanliness and maintenance of professional spaces, providing an impeccable environment that reflects 
                    our clients’ image and commitment to excellence.
                </p>            
                <div class="space-y-6 scroll-animate">
                    <div class="flex items-start space-x-4">
                        <div class="bg-black text-white p-2 mt-1">🏠</div>
                        <div>
                            <h4 class="font-bold text-lg uppercase">Residential Cleaning</h4>
                            <p class="text-md text-gray-800">
                                Available on request, particularly for move-ins and move-outs.
                            </p>
                        </div>
                    </div>
                    <div class="flex items-start space-x-4">
                        <div class="bg-black text-white p-2 mt-1">🏭</div>
                        <div>
                            <h4 class="font-bold text-lg uppercase">Industrial & Commercial Cleaning</h4>
                            <p class="text-md text-gray-800">
                                Comprehensive cleaning and maintenance of offices, warehouses, and complex industrial sites.
                            </p>
                        </div>
                    </div>
                </div>
                <script>
                    // Observer pour déclencher l’animation au scroll
                    const observ1 = new IntersectionObserver(entries => {
                        entries.forEach(entry => {
                        if (entry.isIntersecting) {
                            entry.target.classList.add('animate-zoom');
                        } else {
                            entry.target.classList.remove('animate-zoom'); // rejoue si on ressort/revient
                        }
                        });
                    }, { threshold: 0.2 });

                    document.querySelectorAll('.scroll-animate').forEach(el => {
                        observ1.observe(el);
                    });
                </script>

            </div>

            <script>
                let currentSlide1 = 0;
                const slides1 = document.getElementById('slider1');
                const totalSlides1 = 3;
                const dots1 = document.querySelectorAll('.absolute.bottom-4 button');

                function updateSlider1() {
                    slides1.style.transform = `translateX(-${currentSlide1 * 100}%)`;
                    
                    // Mettre à jour la couleur des petits points (dots)
                    dots1.forEach((dot, index) => {
                        if (index === currentSlide1) {
                            dot.className = "w-2.5 h-2.5 rounded-full bg-red-600 focus:outline-none";
                        } else {
                            dot.className = "w-2.5 h-2.5 rounded-full bg-white focus:outline-none";
                        }
                    });
                }

                function nextSlide1() {
                    currentSlide1 = (currentSlide1 + 1) % totalSlides1;
                    updateSlider1();
                }

                function prevSlide1() {
                    currentSlide1 = (currentSlide1 - 1 + totalSlides1) % totalSlides1;
                    updateSlider1();
                }

                function goToSlide1(slideIndex) {
                    currentSlide1 = slideIndex;
                    updateSlider1();
                }

                document.getElementById('next-btn1').addEventListener('click', nextSlide1);
                document.getElementById('prev-btn1').addEventListener('click', prevSlide1);

                // Défilement automatique toutes les 5 secondes (optionnel)
                setInterval(nextSlide1, 5000);
            </script>
        </div>
    </section>
    <!-------------------------------------------------------------------------------------------------------->

    <!-- Pest Control & Prevention -->
    <div id="sante-securite" class="w-full h-14 "> </div>
    <section class="py-4">
        <div class="container mx-auto px-6 grid md:grid-cols-2 gap-16 items-center">
            <div>
                <style>
                    @keyframes zoomInFade {
                        0% {
                        transform: scale(0.9);
                        opacity: 0;
                        }
                        100% {
                        transform: scale(1);
                        opacity: 1;
                        }
                    }
                    /* Classe appliquée au scroll */
                    .animate-zoom {
                        animation: zoomInFade 1.2s ease forwards;
                    }
                    /* Effet au survol */
                    .scroll-animate:hover {
                        transform: scale(1.05);
                        transition: transform 0.4s ease, opacity 0.4s ease;
                        opacity: 1;
                    }
                </style>

                <h2 class="text-2xl font-bold mb-6 flex items-center scroll-animate">
                    <span class="w-8 h-px bg-black mr-4"></span>
                    Environmental Health & Safety
                </h2>
                <p class="text-md text-gray-800 leading-relaxed mb-6 text-justify  scroll-animate">               
                    Through our pest control solutions-including insect control, fumigation, and rodent control-combined with health inspections and 
                    long-term prevention measures, we protect your teams and infrastructure from health risks.
                </p>      
                <p class="scroll-animate"> 
                    <ul class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <li class="flex items-center space-x-3 bg-gray-100 p-3 rounded">
                            <span class="text-red-600 group-hover:scale-110 transition-transform">✦</span>
                            <span class="text-md">Rats and Mice</span>
                        </li>
                        <li class="flex items-center space-x-3 bg-gray-100 p-3 rounded">
                            <span class="text-red-600 group-hover:scale-110 transition-transform">✦</span>
                            <span class="text-md">Crawling and Flying Insects</span>
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
                </p>

                <script>
                    // Observer pour déclencher l’animation au scroll
                    const observ2 = new IntersectionObserver(entries => {
                        entries.forEach(entry => {
                        if (entry.isIntersecting) {
                            entry.target.classList.add('animate-zoom');
                        } else {
                            entry.target.classList.remove('animate-zoom'); // rejoue si on ressort/revient
                        }
                        });
                    }, { threshold: 0.2 });

                    document.querySelectorAll('.scroll-animate').forEach(el => {
                        observ2.observe(el);
                    });
                </script>

            </div>

            <div class="relative max-w-4xl mx-auto my-12">
                <div class="absolute -top-4 -right-4 w-full h-full border-4 border-black z-0 rounded-2xl hidden md:block"></div>

                <div class="relative z-10 bg-gray-200 h-96 flex items-center justify-center text-gray-600 font-bold overflow-hidden rounded-2xl shadow-xl">
                    
                    <div id="slider2" class="flex w-full h-full transition-transform duration-700 ease-in-out">   

                        <div class="w-full h-full flex-shrink-0 relative">
                            <img src="{{ asset('images/assets/sante_securite/sante1.webp') }}" alt="Équipe Ogowe" loading="lazy" class="object-cover w-full h-full">
                            <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black/75 to-transparent p-6 text-white">
                                <p class="font-black font-medium text-lg tracking-tight ">Pest Control</p>
                                <p class="text-xs text-gray-300 font-medium mt-1">.</p>
                            </div>
                        </div>

                        <div class="w-full h-full flex-shrink-0 relative">
                            <img src="{{ asset('images/assets/sante_securite/sante2.webp') }}" alt="Lutte Antiparasitaire" loading="lazy" class="object-cover w-full h-full">
                            <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black/75 to-transparent p-6 text-white">
                                <p class="font-black font-medium text-lg tracking-tight">Rodent Control</p>
                                <p class="text-xs text-gray-300 font-medium mt-1">.</p>
                            </div>
                        </div>     

                        <div class="w-full h-full flex-shrink-0 relative">
                            <img src="{{ asset('images/assets/sante_securite/sante3.webp') }}" alt="Nettoyage Industriel" loading="lazy" class="object-cover w-full h-full">
                            <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black/75 to-transparent p-6 text-white">
                                <p class="font-black font-medium text-lg tracking-tight">Insect Control & Fumigation</p>
                                <p class="text-xs text-gray-300 font-medium mt-1">.</p>
                            </div>
                        </div> 

                    </div>

                    <button id="prev-btn2" class="absolute left-4 top-1/2 -translate-y-1/2 bg-black/40 hover:bg-red-600 text-white w-10 h-10 flex items-center justify-center rounded-full transition duration-300 backdrop-blur-sm">
                        &#10094;
                    </button>
                    <button id="next-btn2" class="absolute right-4 top-1/2 -translate-y-1/2 bg-black/40 hover:bg-red-600 text-white w-10 h-10 flex items-center justify-center rounded-full transition duration-300 backdrop-blur-sm">
                        &#10095;
                    </button>

                    <div class="absolute bottom-4 left-1/2 -translate-x-1/2 flex space-x-2 z-20 bg-black/30 backdrop-blur-md px-3 py-1.5 rounded-full">
                        <button class="w-2.5 h-2.5 rounded-full bg-red-600 focus:outline-none" onclick="goToSlide2(0)"></button>
                        <button class="w-2.5 h-2.5 rounded-full bg-white focus:outline-none" onclick="goToSlide2(1)"></button>
                        <button class="w-2.5 h-2.5 rounded-full bg-white focus:outline-none" onclick="goToSlide2(2)"></button>
                    </div>
                </div>
            </div>

            <script>
                let currentSlide2 = 0;
                const slides2 = document.getElementById('slider2');
                const totalSlides2 = 3;
                const dots2 = document.querySelectorAll('.absolute.bottom-4 button');

                function updateSlider2() {
                    slides2.style.transform = `translateX(-${currentSlide2 * 100}%)`;
                    
                    // Mettre à jour la couleur des petits points (dots)
                    dots2.forEach((dot, index) => {
                        if (index === currentSlide2) {
                            dot.className = "w-2.5 h-2.5 rounded-full bg-red-600 focus:outline-none";
                        } else {
                            dot.className = "w-2.5 h-2.5 rounded-full bg-white focus:outline-none";
                        }
                    });
                }

                function nextSlide2() {
                    currentSlide2 = (currentSlide2 + 1) % totalSlides2;
                    updateSlider2();
                }

                function prevSlide2() {
                    currentSlide2 = (currentSlide2 - 1 + totalSlides2) % totalSlides2;
                    updateSlider2();
                }

                function goToSlide2(slideIndex) {
                    currentSlide2 = slideIndex;
                    updateSlider2();
                }

                document.getElementById('next-btn2').addEventListener('click', nextSlide2);
                document.getElementById('prev-btn2').addEventListener('click', prevSlide2);

                // Défilement automatique toutes les 5 secondes (optionnel)
                setInterval(nextSlide2, 5000);
            </script>
        </div>
    </section>
    <!-------------------------------------------------------------------------------------------------------->


    <!--Appel a l'action-->
    <section class="mx-auto px-6 mb-5">        
        <div class="pt-10 mt-5 flex flex-col md:flex-row items-center justify-between bg-gray-200 p-8 rounded-2xl">
            <div class="flex items-center gap-4 mb-6 md:mb-0">
                <div class="w-12 h-12 bg-red-600 rounded-full flex items-center justify-center animate-pulse">
                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                    </svg>
                </div>
                <p class="text-xl font-bold text-black uppercase tracking-tight">
                    Need a Customized Quote?
                </p>
            </div>
            
            <a href="{{route('contact')}}" class="rounded-2xl group relative inline-flex items-center justify-center px-8 py-4 font-black text-white uppercase tracking-widest bg-green-800 overflow-hidden transition-all duration-300 hover:text-black">
                <span class="relative z-10 ">Contact Us</span>
                <svg class="w-5 h-5 ml-3 relative z-10 transform group-hover:translate-x-2 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                </svg>
            </a>
        </div>
    </section>
    <!-------------------------------------------------------------------------------------------------------->

    
@endsection