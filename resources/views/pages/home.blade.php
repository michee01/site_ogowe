@extends('layouts.app')

@section('title', 'Accueil - Ogowe')

@section('content')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <section class="relative min-h-[630px] md:min-h-[630px] flex items-center bg-gray-900 text-white py-0 px-4 overflow-hidden">

        <!-- Slider -->
        <div id="1" class="absolute inset-0 z-0 overflow-hidden">
            <div id="hero-slider" class="w-full h-full relative">

                <div class="absolute inset-0 transition-opacity duration-1000 opacity-100 slide">

                    <img 
                        src="{{ asset('images/assets/base/logistique.webp') }}"
                        loading="lazy"
                        class="object-cover w-full h-full"
                        alt="Solutions de logistique et distribution"
                    >
                    <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/40 to-black/30"></div>
                    
                    <div class="absolute inset-0 flex items-center z-20">
                        <div class="container mx-auto max-w-7xl px-3">

                            <div class="max-w-4xl font-mono zoom-in"> 
                                <h2 class="text-3xl sm:text-5xl md:text-6xl font-bold leading-tight mb-6">
                                    Logistique <span class="text-red-600">&amp; Distribution</span>
                                </h2>
                                <br> <br>
                               
                                <div class="flex flex-col sm:flex-row gap-4">
                                    <a href="{{route('contact')}}"
                                        class="bg-green-600 hover:bg-green-700 text-white px-8 py-4 rounded font-bold uppercase transition transform hover:-translate-y-1 shadow-xl text-center">
                                        Demander un devis
                                    </a>
                                    <a href="https://wa.me/243977976226"
                                        class="border-2 border-white hover:bg-white hover:text-black text-white px-8 py-4 rounded font-bold uppercase transition transform hover:-translate-y-1 flex items-center justify-center gap-2 shadow-xl">
                                        <span>💬</span>
                                        WhatsApp
                                    </a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="absolute inset-0 transition-opacity duration-1000 opacity-0 slide">
                    <img 
                        src="{{ asset('images/assets/base/entretien2.webp') }}"
                        loading="lazy"
                        class="object-cover w-full h-full"
                        alt="Services professionnels d'hygiène et entretien"
                    >
                    <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/40 to-black/30"></div>
                    
                    <div class="absolute inset-0 flex items-center z-20">
                        <div class="container mx-auto max-w-7xl px-4">

                            <div class="max-w-3xl font-mono zoom-in">
                                <h2 class="text-3xl sm:text-5xl md:text-6xl font-bold leading-tight mb-6">
                                    Hygiène
                                    <span class="text-red-600">&amp; Entretien</span>
                                </h2>
                                <br> <br>
                                <div class="flex flex-col sm:flex-row gap-4">
                                    <a href="{{route('contact')}}"
                                        class="bg-green-600 hover:bg-green-700 text-white px-8 py-4 rounded font-bold uppercase transition transform hover:-translate-y-1 shadow-xl text-center">
                                        Demander un devis
                                    </a>
                                    <a href="https://wa.me/243977976226"
                                        class="border-2 border-white hover:bg-white hover:text-black text-white px-8 py-4 rounded font-bold uppercase transition transform hover:-translate-y-1 flex items-center justify-center gap-2 shadow-xl">
                                        <span>💬</span>
                                        WhatsApp
                                    </a>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>

                <div class="absolute inset-0 transition-opacity duration-1000 opacity-0 slide">
                    <img 
                        src="{{ asset('images/assets/base/sante1.webp') }}"
                        loading="lazy"
                        class="object-cover w-full h-full"
                        alt="Services de santé et sécurité"
                    >
                    <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/40 to-black/30"></div>
                    
                    <div class="absolute inset-0 flex items-center z-20">
                        <div class="container mx-auto max-w-7xl px-4">

                            <div class="max-w-3xl font-mono zoom-in">
                                <h2 class="text-3xl sm:text-5xl md:text-6xl font-bold leading-tight mb-6">
                                    Santé
                                    <span class="text-red-600">&amp; Sécurité</span>
                                </h2>
                                <br> <br>
                                <div class="flex flex-col sm:flex-row gap-4">
                                    <a href="{{route('contact')}}"
                                        class="bg-green-600 hover:bg-green-700 text-white px-8 py-4 rounded font-bold uppercase transition transform hover:-translate-y-1 shadow-xl text-center">
                                        Demander un devis
                                    </a>
                                    <a href="https://wa.me/243977976226"
                                        class="border-2 border-white hover:bg-white hover:text-black text-white px-8 py-4 rounded font-bold uppercase transition transform hover:-translate-y-1 flex items-center justify-center gap-2 shadow-xl">
                                        <span>💬</span>
                                        WhatsApp
                                    </a>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>


            </div>
        </div>

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
            .zoom-in {
                animation: zoomInFade 1.5s ease forwards;
            }
        </style>

        <div class="absolute top-0 right-0 w-1/3 h-full bg-red-600 opacity-0 skew-x-12 translate-x-1/2 hidden md:block"></div>

        <!-- Indicateurs de slide -->
        <div class="absolute bottom-6 left-1/2 transform -translate-x-1/2 flex items-center gap-6 z-20">

            <!-- Flèche gauche -->
            <button
                id="prevSlide"
                type="button"
                aria-label="Slide précédent"
                class="text-white hover:text-red-600 transition text-2xl">
                &#8592;
            </button>
            <!-- Points -->
            <div id="slideIndicators" class="flex gap-2"></div>
            <!-- Flèche droite -->
            <button
                id="nextSlide"
                type="button"
                aria-label="Slide suivant"
                class="text-white hover:text-red-600 transition text-2xl">
                &#8594;
            </button>
        </div>
    </section>

    <script>
        let currentSlide = 0;

        const slides = document.querySelectorAll('#hero-slider .slide');
        const totalSlides = slides.length;
        const indicators = document.getElementById('slideIndicators');

        // Générer les points
        for (let i = 0; i < totalSlides; i++) {

            const dot = document.createElement('span');
            dot.classList.add(
                'w-3',
                'h-3',
                'rounded-full',
                'cursor-pointer',
                'transition'
            );
            dot.classList.add(
                i === 0 ? 'bg-white' : 'bg-gray-400'
            );
            dot.addEventListener('click', () => showSlide(i));
            indicators.appendChild(dot);
        }
        // Afficher une slide
        function showSlide(index) {
            // Cacher la slide actuelle
            slides[currentSlide].classList.remove('opacity-100');
            slides[currentSlide].classList.add('opacity-0');
            // Mettre à jour son indicateur
            indicators.children[currentSlide].classList.remove('bg-white');
            indicators.children[currentSlide].classList.add('bg-gray-400');
            // Nouvelle slide
            currentSlide = index;
            // Afficher la nouvelle slide
            slides[currentSlide].classList.remove('opacity-0');
            slides[currentSlide].classList.add('opacity-100');
            // Mettre à jour son indicateur
            indicators.children[currentSlide].classList.remove('bg-gray-400');
            indicators.children[currentSlide].classList.add('bg-white');
            // Relancer l'animation du contenu
            const content = slides[currentSlide].querySelector('.zoom-in');

            if (content) {
                content.classList.remove('zoom-in');

                void content.offsetWidth;

                content.classList.add('zoom-in');
            }
        }
        // Slide suivante
        function nextHeroSlide() {
            showSlide((currentSlide + 1) % totalSlides);
        }
        // Slide précédente
        function prevHeroSlide() {
            showSlide(
                (currentSlide - 1 + totalSlides) % totalSlides
            );
        }
        // Navigation
        document
            .getElementById('nextSlide')
            .addEventListener('click', nextHeroSlide);
        document
            .getElementById('prevSlide')
            .addEventListener('click', prevHeroSlide);
        // Défilement automatique toutes les 5 secondes
        setInterval(nextHeroSlide, 5000);
    </script>
    <!-------------------------------------------------------------------------------------------------------->

    <section class="py-10">
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
                    <span class="w-8 h-px bg-red-600 mr-4"></span>
                    Ogowe
                </h2>
                <p class="text-md text-black leading-relaxed mb-6 text-justify  scroll-animate">  
                    Ogowe est une société de services intégrés qui accompagne ses clients dans la gestion complète des opérations de transit 
                    entre Dar es Salaam, le Haut-Katanga et le Lualaba. Nous assurons également l’approvisionnement en produits agroalimentaires 
                    secs destinés aux sites miniers, l’approvisionnement en carburant, ainsi que la mise en place de solutions sanitaires et 
                    environnementales incluant le nettoyage professionnel et la lutte antiparasitaire.
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

                <div class="bg-black text-white p-8 rounded-br-3xl shadow-2xl">
                    <h3 class="text-red-600 font-bold uppercase tracking-widest mb-4">Notre Mission</h3>
                    <p class="text-md italic text-justify font-semibold scroll-animate">
                        Garantir la fluidité des opérations de nos partenaires, protéger leurs équipes et infrastructures grâce à des solutions 
                        sanitaires et environnementales fiables tout en reflétant l’excellence et la fiabilité de leur image.
                    </p>
                </div>
            </div>
            <div class="relative max-w-4xl mx-auto my-12">
                <div class="absolute -top-4 -left-4 w-full h-full border-4 border-red-600 z-0 rounded-2xl hidden md:block"></div>

                <div class="relative z-10 bg-gray-200 h-96 flex items-center justify-center text-gray-600 font-bold overflow-hidden rounded-2xl shadow-xl">
                    
                    <div id="slider" class="flex w-full h-full transition-transform duration-700 ease-in-out">   

                        <div class="w-full h-full flex-shrink-0 relative">
                            <img src="{{ asset('images/assets/base/equipe1.webp') }}" alt="Service de Logistique et distribution" loading="lazy" class="object-cover w-full h-full">
                            <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black/75 to-transparent p-6 text-white">
                                <p class="font-black text-lg uppercase tracking-tight font-semibold">Logistique et distribution</p>
                                <p class="text-xs text-gray-300 font-medium mt-1">.</p>
                            </div>
                        </div>

                        <div class="w-full h-full flex-shrink-0 relative">
                            <img src="{{ asset('images/assets/base/equipe2.webp') }}" alt="Service de Hygiène et Entrerien" loading="lazy" class="object-cover w-full h-full">
                            <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black/75 to-transparent p-6 text-white">
                                <p class="font-black text-lg uppercase tracking-tight font-semibold">Hygiène et Entrerien</p>
                                <p class="text-xs text-gray-300 font-medium mt-1">.</p>
                            </div>
                        </div> 

                        <div class="w-full h-full flex-shrink-0 relative">
                            <img src="{{ asset('images/assets/base/sante1.webp') }}" alt="Service de Santé et securité" loading="lazy" class="object-cover w-full h-full">
                            <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black/75 to-transparent p-6 text-white">
                                <p class="font-black text-lg uppercase tracking-tight font-semibold">Santé et securité</p>
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
                let currentSlide1 = 0;
                const slides1 = document.getElementById('slider');
                const totalSlides1 = 3;
                const dots = document.querySelectorAll('.absolute.bottom-4 button');

                function updateSlider() {
                    slides1.style.transform = `translateX(-${currentSlide1 * 100}%)`;
                    
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
                    currentSlide1 = (currentSlide1 + 1) % totalSlides1;
                    updateSlider();
                }

                function prevSlide() {
                    currentSlide1 = (currentSlide1 - 1 + totalSlides1) % totalSlides1;
                    updateSlider();
                }

                function goToSlide(slideIndex) {
                    currentSlide1 = slideIndex;
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
    
    <section class="py-16 bg-gray-50">
        <div class="container mx-auto px-6">
            
            <div class="flex flex-col md:flex-row md:items-end justify-between mb-6 gap-4">
                <div class="max-w-2xl">
                    <h3 class="text-4xl md:text-5xl font-black text-black uppercase mt-2">
                        Nos <span class="text-red-600">points Clés</span>
                    </h3>
                </div>
                <p class="text-gray-600 text-md font-medium max-w-xs md:text-right italic">
                    Des solutions intégrées pour le secteur industriel, minier et corporatif à Katanga.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">

                <div class="bg-white p-6 px-8 rounded-lg border border-gray-200 shadow-md hover:shadow-xl hover:-translate-y-2 transition-all duration-300 text-center scroll-animate flex flex-col">
                    <div class="text-5xl mb-4">🚚</div>
                    <h4 class="text-xl font-bold mb-4 uppercase leading-tight text-black">Logistique & distribution</h4>
                    <p class="text-gray-800 text-md leading-relaxed mb-2 text-justify hyphens-auto">
                        De Dar es Salaam au cœur du Haut-Katanga et du Lualaba, nous prenons en charge : <br>
                        <ul class="text-gray-800 text-md list-disc space-y-1 mb-2 pl-10 text-left">
                            <li>
                                <strong>Transit Dar es Salaam :</strong>
                                formalités de transit et de transport.
                            </li>
                            <li>
                                <strong>Transport et FERI/COD :</strong>
                                traçabilité et sécurité garanties.
                            </li>
                            <li>
                                <strong>Distribution :</strong>
                                carburant et produits agroalimentaires secs, livrés dans le respect des délais.
                            </li>
                        </ul>
                       	
                    </p>
                    <a href="{{route('services')}}#distribution" 
                        class="mt-auto text-green-600 font-bold hover:underline">
                        En savoir plus →
                    </a>
                </div>

                <div class="bg-white p-6 px-8 rounded-lg border border-gray-200 shadow-md hover:shadow-xl hover:-translate-y-2 transition-all duration-300 text-center scroll-animate flex flex-col">
                    <div class="text-5xl mb-4">🧹</div>
                    <h4 class="text-xl font-bold mb-4 uppercase leading-tight text-black">Hygiène & entretien</h4>
                    <p class="text-gray-800 text-md leading-relaxed mb-6 text-justify hyphens-auto">
                        Nous assurons la propreté des espaces professionnels, en garantissant un environnement impeccable qui valorise l’image de nos clients.
                    </p>
                    <a href="{{route('services')}}#hygiene-entretien" 
                        class="mt-auto text-green-600 font-bold hover:underline">
                        En savoir plus →
                    </a>
                </div>

                <div class="bg-white p-6 px-8 rounded-lg border border-gray-200 shadow-md hover:shadow-xl hover:-translate-y-2 transition-all duration-300 text-center scroll-animate flex flex-col">
                    <div class="text-5xl mb-4">🛡️</div>
                    <h4 class="text-xl font-bold mb-4 uppercase leading-tight text-black">Santé & sécurité</h4>
                    <p class="text-gray-800 text-md leading-relaxed mb-6 text-justify hyphens-auto">
                        Grâce à nos solutions de lutte antiparasitaire (désinsectisation, fumigation, dératisation), au contrôle sanitaire et à la prévention durable,
                        nous protégeons vos équipes et vos infrastructures contre les risques sanitaires.
                    </p>

                    <a href="{{route('services')}}#sante-securite"
                        class="mt-auto text-green-600 font-bold hover:underline">
                        En savoir plus →
                    </a>
                </div>

            </div>

            <div class="mt-16 text-center">
                <a href="{{route('contact')}}" class="rounded-xl inline-block border-2 border-black px-6 py-4 font-black uppercase text-md text-white bg-red-600 tracking-widest hover:bg-black hover:text-white transition-all">
                    Demander un devis personnalisé
                </a>
            </div>
        </div>
    </section>
    <!-------------------------------------------------------------------------------------------------------->

    <section class="py-16 bg-gray-50">
        <div class="container mx-auto px-6">
            
            <div class="text-center mb-10">
                <h2 class="text-4xl font-black uppercase tracking-tighter inline-block relative">
                    Nos <span class="text-red-600">engagements</span> 
                    <span class="absolute -bottom-4 left-0 w-full h-1.5 bg-red-600"></span>
                </h2>
                <p class="mt-8 text-gray-800 leading-relaxed text-3xl max-w-4xl mx-auto text-center">
                    Avec Ogowe, vous bénéficiez d’une expertise complète, allant de la logistique internationale à la protection sanitaire locale, pour un environnement sûr et performant.
                </p>
            </div>

        </div>
    </section>
    
    <script src="https://kit.fontawesome.com/your-kit-id.js" crossorigin="anonymous"></script>
    <!-------------------------------------------------------------------------------------------------------->
    
    <section class="py-16 bg-gray-50">
        <div class="container mx-auto px-6">
            
            <div class="text-center mb-10">
                <h2 class="text-4xl font-black uppercase tracking-tighter inline-block relative">
                    Pourquoi choisir <span class="text-red-600">Ogowe</span> ?
                    <span class="absolute -bottom-4 left-0 w-full h-1.5 bg-red-600"></span>
                </h2>
                <p class="mt-8 text-gray-800 leading-relaxed text-3xl max-w-4xl mx-auto text-center">
                    Choisir <span class="text-red-600 font-semibold">Ogowe</span> 
                    c’est opter pour un partenaire unique qui prend soin de vos marchandises, de vos espaces et de votre image.
                </p>
            </div>

        </div>
    </section>

    <script src="https://kit.fontawesome.com/your-kit-id.js" crossorigin="anonymous"></script>
    <!-------------------------------------------------------------------------------------------------------->

    <section class="py-16 bg-white overflow-hidden">
        <div class="container mx-auto px-4">

            <div class="bg-gray-50 rounded-3xl p-5 md:p-16">
                <h4 class="text-center text-red-600 text-2xl font-black uppercase tracking-[0.2em] mb-12">
                    Ils nous font confiance
                </h4>
                <div class="overflow-hidden relative">
                    <div class="flex w-max animate-marquee">
                        
                        <div class="flex shrink-0 gap-16">
                            
                            <img src="{{ asset('images/logo/logo-bank.png') }}" alt="Logo CRDB Bank" loading="lazy" class="h-20 w-auto shrink-0 object-contain">                            
                            <img src="{{ asset('images/logo/logo-ecobank.png') }}" alt="Logo Ecobank" loading="lazy" class="h-20 w-auto shrink-0 object-contain">
                            <img src="{{ asset('images/logo/logo-kico.png') }}" alt="Logo kico SA" loading="lazy" class="h-20 w-auto shrink-0 object-contain">
                            <img src="{{ asset('images/logo/logo-kamao.JPG') }}" alt="Logo Kamao COPPER S.A" loading="lazy" class="h-20 w-auto shrink-0 object-contain">
                            <img src="{{ asset('images/logo/logo-CCT.png') }}" alt="Logo CCT" loading="lazy" class="h-20 w-auto shrink-0 object-contain">
                            <img src="{{ asset('images/logo/logo-UAC.jpg') }}" alt="Logo UAC" loading="lazy" class="h-20 w-auto shrink-0 object-contain">
                            <img src="{{ asset('images/logo/logo-mes.png') }}" alt="Logo MES" loading="lazy" class="h-20 w-auto shrink-0 object-contain">
                            <img src="{{ asset('images/logo/logo-mmr.png') }}" alt="Logo MMR" loading="lazy" class="bg-black h-20 w-auto shrink-0 object-contain">
                            <img src="{{ asset('images/logo/logo-normet.png') }}" alt="Logo Normet" loading="lazy" class="h-20 w-auto shrink-0 object-contain">
                            <img src="{{ asset('images/logo/logo-prosteel.jpg') }}" alt="Logo Prosteel" loading="lazy" class="h-20 w-auto shrink-0 object-contain">
                            <img src="{{ asset('images/logo/logo-gelux.png') }}" alt="Logo Gelux" loading="lazy" class="h-20 w-auto shrink-0 object-contain">
                            <img src="{{ asset('images/logo/logo-smt.webp') }}" alt="Logo SMT" loading="lazy" class="pr-12 h-20 w-auto shrink-0 object-contain">
                        </div>
                        
                        <div class="flex shrink-0 gap-16">
                            <img src="{{ asset('images/logo/logo-bank.png') }}" alt="Logo CRDB Bank" loading="lazy" class="h-20 w-auto shrink-0 object-contain">                            
                            <img src="{{ asset('images/logo/logo-ecobank.png') }}" alt="Logo Ecobank" loading="lazy" class="h-20 w-auto shrink-0 object-contain">
                            <img src="{{ asset('images/logo/logo-kico.png') }}" alt="Logo kico SA" loading="lazy" class="h-20 w-auto shrink-0 object-contain">
                            <img src="{{ asset('images/logo/logo-kamao.JPG') }}" alt="Logo Kamao COPPER S.A" loading="lazy" class="h-20 w-auto shrink-0 object-contain">
                            <img src="{{ asset('images/logo/logo-CCT.png') }}" alt="Logo CCT" loading="lazy" class="h-20 w-auto shrink-0 object-contain">
                            <img src="{{ asset('images/logo/logo-UAC.jpg') }}" alt="Logo UAC" loading="lazy" class="h-20 w-auto shrink-0 object-contain">
                            <img src="{{ asset('images/logo/logo-mes.png') }}" alt="Logo MES" loading="lazy" class="h-20 w-auto shrink-0 object-contain">
                            <img src="{{ asset('images/logo/logo-mmr.png') }}" alt="Logo MMR" loading="lazy" class="bg-black h-20 w-auto shrink-0 object-contain">
                            <img src="{{ asset('images/logo/logo-normet.png') }}" alt="Logo Normet" loading="lazy" class="h-20 w-auto shrink-0 object-contain">
                            <img src="{{ asset('images/logo/logo-prosteel.jpg') }}" alt="Logo Prosteel" loading="lazy" class="h-20 w-auto shrink-0 object-contain">
                            <img src="{{ asset('images/logo/logo-gelux.png') }}" alt="Logo Gelux" loading="lazy" class="h-20 w-auto shrink-0 object-contain">
                            <img src="{{ asset('images/logo/logo-smt.webp') }}" alt="Logo SMT" loading="lazy" class="pr-12 h-20 w-auto shrink-0 object-contain">
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </section>

    <style>
        /* Animation type "marquee" */
        @keyframes marquee {
            from {
                transform: translateX(0);
            }

            to {
                transform: translateX(-50%);
            }
        }

        .animate-marquee {
            display: flex;
            width: max-content;
            animation: marquee 28s linear infinite;
        }
    </style>
    <!-------------------------------------------------------------------------------------------------------->

    <section class="relative mb-20 overflow-hidden bg-black py-20">

        <div class="absolute -right-32 -top-32 h-64 w-64 rounded-full bg-red-600 opacity-20 blur-3xl"></div>

        <div class="container relative z-10 mx-auto px-6">

            <div class="flex flex-col items-center justify-between gap-10 md:flex-row">

                <div class="w-full text-center md:max-w-2xl md:text-left">
                    <h4 class="text-3xl font-black uppercase tracking-tighter text-white md:text-4xl">
                        Rejoignez les
                        <span class="text-red-600">entreprises</span>
                        du Katanga qui nous font confiance
                    </h4>
                </div>

                <div class="flex w-full flex-col items-center justify-center gap-4 sm:flex-row md:w-auto">

                    <a href="{{route('contact')}}"
                    class="flex w-full items-center justify-center rounded-md border-2 border-gray-100 bg-green-600 px-8 py-4 text-center text-lg font-black uppercase tracking-widest text-white shadow-xl transition-all duration-300 hover:-translate-y-1 hover:bg-green-700 sm:w-auto">
                        Obtenir un devis gratuit
                    </a>

                    <a href="https://wa.me/243977976226"
                    class="flex w-full items-center justify-center gap-2 rounded-md border-2 border-white px-8 py-4 text-center text-lg font-black uppercase tracking-widest text-white transition-all duration-300 hover:bg-white hover:text-black sm:w-auto">
                        <span class="text-xl">💬</span>
                        Contact
                    </a>

                </div>

            </div>

        </div>
    </section>
    <!-------------------------------------------------------------------------------------------------------->
    
    
    <style> 
        .page1 {
            border-bottom: 4px solid black;
            padding-bottom: 2px;
            }
    </style>
    
@endsection
