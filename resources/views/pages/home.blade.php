@extends('layouts.app')

@section('title', 'Accueil - Ogowe')

@section('content')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <!--Section Hero-->
    <section class="relative min-h-[550px] md:min-h-[600px] flex items-center bg-gray-900 text-white py-20 px-4 overflow-hidden">
        
        <!-- Slider -->
        <div id="1" class="absolute inset-0 z-0 overflow-hidden">
            <div id="hero-slider" class="w-full h-full relative">
                
                <!-- Slide 1 -->
                <div class="absolute inset-0 transition-opacity duration-1000 opacity-100 slide">
                    <img src="{{ asset('images/assets/lutte2.jpeg') }}"  loading="lazy" class="object-cover w-full h-full" alt="Équipe sur le terrain">
                    <div class="absolute inset-0 bg-black/40"></div> 
                </div>
                
                <!-- Slide 2 -->
                <div class="absolute inset-0 transition-opacity duration-1000 opacity-0 slide">
                    <img src="{{ asset('images/assets/nettoyage7.jpeg') }}" loading="lazy" class="object-cover w-full h-full" alt="Nettoyage industriel">
                    <div class="absolute inset-0 bg-black/40"></div>
                </div>
                
                <!-- Slide 3 -->
                <div class="absolute inset-0 transition-opacity duration-1000 opacity-0 slide">
                    <img src="{{ asset('images/assets/resto6.jpg') }}" loading="lazy" class="object-cover w-full h-full" alt="Lutte antiparasitaire">
                    <div class="absolute inset-0 bg-black/40"></div>
                </div>
                
                <!-- Slide 4 -->
                <div class="absolute inset-0 transition-opacity duration-1000 opacity-0 slide">
                    <img src="{{ asset('images/assets/log1.jpg') }}" loading="lazy" class="object-cover w-full h-full" alt="Catering et restauration">
                    <div class="absolute inset-0 bg-black/40"></div>
                </div>

                <!-- Slide 5 -->
                <div class="absolute inset-0 transition-opacity duration-1000 opacity-0 slide">
                    <img src="{{ asset('images/assets/nettoyage2.jpg') }}" loading="lazy" class="object-cover w-full h-full" alt="Approvisionnement">
                    <div class="absolute inset-0 bg-black/40"></div>
                </div>

                <!-- Slide 6 -->
                <div class="absolute inset-0 transition-opacity duration-1000 opacity-0 slide">
                    <img src="{{ asset('images/assets/log7.jpg') }}" loading="lazy" class="object-cover w-full h-full" alt="Locaux professionnels">
                    <div class="absolute inset-0 bg-black/40"></div>
                </div>
            </div>
        </div>
        
        <!-- Texte + CTA -->
        <div id="2" class="font-mono container mx-auto relative z-10 max-w-6xl">
            <style>
                @keyframes zoomInFade {
                    0% { transform: scale(0.9); opacity: 0; }
                    100% { transform: scale(1); opacity: 1; }
                }
                .zoom-in { animation: zoomInFade 1.5s ease forwards; }
            </style>

            <h1 class="font-poppins text-6xl md:text-6xl text-white max-w-2xl mb-6 leading-tight zoom-in">
                Hygiène, santé et solutions intégrées pour vos equipes
            </h1>

            <p class="text-lg md:text-xl text-white max-w-2xl mb-10 p-2 opacity-100 zoom-in">
                L'excellence au coeur de votre environnement
            </p>

            <!-- CTA hiérarchisés -->
            <div class="flex flex-col md:flex-row gap-4">
                <a href="{{route('contact')}}" 
                    class="bg-green-600 hover:bg-green-700 text-white px-8 py-4 rounded font-bold uppercase transition transform hover:-translate-y-1 shadow-xl">
                    Demander un devis  
                </a>
                <a href="https://wa.me/243977976226" 
                    class="border-2 border-white hover:bg-white hover:text-black text-white px-8 py-4 rounded font-bold uppercase transition transform hover:-translate-y-1 flex items-center gap-2 shadow-xl">
                    <span>💬</span> WhatsApp
                </a>
            </div>
        </div>

        <!-- Overlay décoratif -->
        <div class="absolute top-0 right-0 w-1/3 h-full bg-red-600 opacity-0 skew-x-12 translate-x-1/2 hidden md:block"></div>

        <!-- Indicateurs de slide -->
        <div class="absolute bottom-6 left-1/2 transform -translate-x-1/2 flex items-center gap-6 z-20">
            <!-- Flèche gauche -->
            <button id="prevSlide" class="text-white hover:text-red-600 transition text-2xl">&#8592;</button>
            
            <!-- Points -->
            <div id="slideIndicators" class="flex gap-2">
                <!-- Les points seront générés dynamiquement -->
            </div>
            
            <!-- Flèche droite -->
            <button id="nextSlide" class="text-white hover:text-red-600 transition text-2xl">&#8594;</button>
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
            dot.classList.add('w-3','h-3','rounded-full','cursor-pointer');
            dot.classList.add(i === 0 ? 'bg-white' : 'bg-gray-400');
            dot.addEventListener('click', () => showSlide(i));
            indicators.appendChild(dot);
        }

        function showSlide(index) {
            slides[currentSlide].classList.remove('opacity-100');
            slides[currentSlide].classList.add('opacity-0');
            indicators.children[currentSlide].classList.remove('bg-white');
            indicators.children[currentSlide].classList.add('bg-gray-400');

            currentSlide = index;

            slides[currentSlide].classList.remove('opacity-0');
            slides[currentSlide].classList.add('opacity-100');
            indicators.children[currentSlide].classList.remove('bg-gray-400');
            indicators.children[currentSlide].classList.add('bg-white');
        }

        function nextHeroSlide() {
            showSlide((currentSlide + 1) % totalSlides);
        }

        function prevHeroSlide() {
            showSlide((currentSlide - 1 + totalSlides) % totalSlides);
        }

        document.getElementById('nextSlide').addEventListener('click', nextHeroSlide);
        document.getElementById('prevSlide').addEventListener('click', prevHeroSlide);

        // Défilement automatique toutes les 6 secondes
        setInterval(nextHeroSlide, 5000);
    </script>
    <!-------------------------------------------------------------------------------------------------------->

    <!--Presentation de l'entreprise-->
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
                <p class="text-lg text-gray-800 leading-relaxed mb-6 text-justify  scroll-animate">               
                    Chez Ogowe, nous sommes votre partenaire de confiance pour la logistique et distribution ainsi que pour la gestion sanitaire et environnementale. 
                    Notre mission est d’assurer la fluidité de vos opérations et de protéger vos équipes et infrastructures, tout en reflétant l’excellence de votre image.
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
                    <p class="text-lg italic font-light text-justify scroll-animate">
                        La mission d’Ogowe est d’assurer la fluidité logistique et la sécurité sanitaire de ses clients, 
                        en offrant des solutions intégrées  innovantes qui allient performance, fiabilité et durabilité.
                    </p>
                </div>
            </div>
            <div class="relative max-w-4xl mx-auto my-12">
                <div class="absolute -top-4 -left-4 w-full h-full border-4 border-red-600 z-0 rounded-2xl hidden md:block"></div>

                <div class="relative z-10 bg-gray-200 h-96 flex items-center justify-center text-gray-600 font-bold overflow-hidden rounded-2xl shadow-xl">
                    
                    <div id="slider" class="flex w-full h-full transition-transform duration-700 ease-in-out">

                        <div class="w-full h-full flex-shrink-0 relative">
                            <img src="{{ asset('images/assets/log1.jpg') }}" alt="Équipe Ogowe" loading="lazy" class="object-cover w-full h-full">
                            <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black/75 to-transparent p-6 text-white">
                                <p class="font-black text-lg uppercase tracking-tight">Logistique et distribution</p>
                                <p class="text-xs text-gray-300 font-medium mt-1">.</p>
                            </div>
                        </div>
                        
                        <div class="w-full h-full flex-shrink-0 relative">
                            <img src="{{ asset('images/assets/lutte1.jpeg') }}" alt="Lutte Antiparasitaire" loading="lazy" class="object-cover w-full h-full">
                            <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black/75 to-transparent p-6 text-white">
                                <p class="font-black text-lg uppercase tracking-tight">Santé et securité</p>
                                <p class="text-xs text-gray-300 font-medium mt-1">.</p>
                            </div>
                        </div>         

                        <div class="w-full h-full flex-shrink-0 relative">
                            <img src="{{ asset('images/assets/hygiene.jpeg') }}" alt="Nettoyage Industriel" loading="lazy" class="object-cover w-full h-full">
                            <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black/75 to-transparent p-6 text-white">
                                <p class="font-black text-lg uppercase tracking-tight">Hygiène et Entrerien</p>
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
    
    <!--Nos Points cles-->
    <section class="py-16 bg-gray-50">
        <div class="container mx-auto px-6">
            
            <!-- Titre -->
            <div class="flex flex-col md:flex-row md:items-end justify-between mb-6 gap-4">
                <div class="max-w-2xl">
                    <h3 class="text-4xl md:text-5xl font-black text-black uppercase mt-2">
                        Nos <span class="text-red-600">points Clés</span>
                    </h3>
                </div>
                <p class="text-gray-500 font-medium max-w-xs md:text-right italic">
                    Des solutions intégrées pour le secteur industriel, minier et corporatif à Lubumbashi.
                </p>
            </div>

            <!-- Cartes -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">

                <!-- Carte 1 -->
                <div class="bg-white p-6 rounded-lg border border-gray-200 shadow-md hover:shadow-xl hover:-translate-y-2 transition-all duration-300 text-center scroll-animate flex flex-col">
                    <div class="text-5xl mb-4">🚚</div>
                    <h4 class="text-xl font-bold mb-4 uppercase leading-tight text-black">Logistique & distribution</h4>
                    <p class="text-gray-700 text-sm leading-relaxed mb-6 text-justify">
                        De Dar es Salaam au cœur du Haut-Katanga et du Lualaba, nous prenons en charge : <br>
                        •	Transit Dar es Salaam : formalités de transit et transport. <br>
                        •	Transport et FERI/COD : traçabilité et sécurité garanties. <br>
                        •	Distribution : carburant et produits agro-alimentaires secs, livrés dans le respect des délais.
                    </p>
                    <a href="{{route('services')}}#distribution" 
                        class="mt-auto text-green-600 font-bold hover:underline">
                        En savoir plus →
                    </a>
                </div>

                <!-- Carte 2 -->
                <div class="bg-white p-6 rounded-lg border border-gray-200 shadow-md hover:shadow-xl hover:-translate-y-2 transition-all duration-300 text-center scroll-animate flex flex-col">
                    <div class="text-5xl mb-4">🧹</div>
                    <h4 class="text-xl font-bold mb-4 uppercase leading-tight text-black">Hygiène & entretien</h4>
                    <p class="text-gray-700 text-md leading-relaxed mb-6 text-justify">
                        Nous assurons la propreté des espaces professionnels, en garantissant un environnement impeccable qui valorise l’image de nos clients.
                    </p>
                    <a href="{{route('services')}}#hygiene-entretien" 
                        class="mt-auto text-green-600 font-bold hover:underline">
                        En savoir plus →
                    </a>
                </div>

                <!-- Carte 3 -->
                <div class="bg-white p-6 rounded-lg border border-gray-200 shadow-md hover:shadow-xl hover:-translate-y-2 transition-all duration-300 text-center scroll-animate flex flex-col">
                    <div class="text-5xl mb-4">🛡️</div>
                    <h4 class="text-xl font-bold mb-4 uppercase leading-tight text-black">
                        Pest control & prévention
                    </h4>
                    <p class="text-gray-700 text-md leading-relaxed mb-6 text-justify">
                        Grâce à nos solutions de lutte antiparasitaire (désinsectisation, fumigation, dératisation), au contrôle sanitaire et à la prévention durable,
                        nous protégeons vos équipes et vos infrastructures contre les risques sanitaires.
                    </p>
                    <!-- Bouton -->
                    <a href="{{route('services')}}#sante-securite"
                        class="mt-auto text-green-600 font-bold hover:underline">
                        En savoir plus →
                    </a>
                </div>

            </div>

            <!-- CTA global -->
            <div class="mt-16 text-center">
                <a href="{{route('contact')}}" class="rounded-xl inline-block border-2 border-black px-6 py-4 font-black uppercase text-md text-white bg-red-600 tracking-widest hover:bg-black hover:text-white transition-all">
                    Demander un devis personnalisé
                </a>
            </div>
        </div>
    </section>
    <!-------------------------------------------------------------------------------------------------------->

    <!-- Engagement -->
    <section class="py-16 bg-gray-50">
        <div class="container mx-auto px-6">
            
            <div class="text-center mb-10">
                <h2 class="text-4xl font-black uppercase tracking-tighter inline-block relative">
                    Nos <span class="text-red-600">engagements</span> 
                    <span class="absolute -bottom-4 left-0 w-full h-1.5 bg-red-600"></span>
                </h2>
                <p class="mt-8 text-gray-800 leading-relaxed text-xl max-w-4xl mx-auto text-center">
                    Avec Ogowe, vous bénéficiez d’une expertise complète, allant de la logistique internationale à la protection sanitaire locale, pour un environnement sûr et performant.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Fiabilité -->
                <div class="group bg-white p-10 shadow-sm border-b-4 border-black hover:border-red-600 transition-all duration-300 hover:-translate-y-2">
                    <div class="w-14 h-14 bg-gray-100 flex items-center justify-center mb-6 group-hover:bg-red-600 transition-colors">
                        <i class="fa-solid fa-circle-check text-2xl text-black group-hover:text-white"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-4 uppercase tracking-tight">Fiabilité</h3>
                    <p class="text-gray-600 leading-relaxed text-md text-justify">
                        Respect des délais et traçabilité totale.
                    </p>
                </div>

                <!-- Sécurité -->
                <div class="group bg-white p-10 shadow-sm border-b-4 border-red-600 hover:border-black transition-all duration-300 hover:-translate-y-2">
                    <div class="w-14 h-14 bg-gray-100 flex items-center justify-center mb-6 group-hover:bg-black transition-colors">
                        <i class="fa-solid fa-shield-halved text-2xl text-black group-hover:text-white"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-4 uppercase tracking-tight text-red-600 group-hover:text-black">Sécurité</h3>
                    <p class="text-gray-600 leading-relaxed text-md text-justify">
                        Protection optimale de vos marchandises et de vos espaces.
                    </p>
                </div>

                <!-- Innovation -->
                <div class="group bg-white p-10 shadow-sm border-b-4 border-black hover:border-red-600 transition-all duration-300 hover:-translate-y-2">
                    <div class="w-14 h-14 bg-gray-100 flex items-center justify-center mb-6 group-hover:bg-red-600 transition-colors">
                        <i class="fa-solid fa-lightbulb text-2xl text-black group-hover:text-white"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-4 uppercase tracking-tight">Innovation</h3>
                    <p class="text-gray-600 leading-relaxed text-md text-justify">
                        Solutions modernes et durables pour un impact positif.
                    </p>
                </div>

            </div>
        </div>
    </section>
    <!-- Ajoute Font Awesome -->
    <script src="https://kit.fontawesome.com/your-kit-id.js" crossorigin="anonymous"></script>
    <!-------------------------------------------------------------------------------------------------------->
    
    <!--Pourquoi nous choisir-->
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
    <!-- Ajoute Font Awesome -->
    <script src="https://kit.fontawesome.com/your-kit-id.js" crossorigin="anonymous"></script>
    <!-------------------------------------------------------------------------------------------------------->

    <!--Ils nous font confiance-->
    <section class="py-16 bg-white overflow-hidden">
        <div class="container mx-auto px-4">
            <!-- Carrousel logos -->
            <div class="bg-gray-50 rounded-3xl p-5 md:p-16">
                <h4 class="text-center text-red-600 text-2xl font-black uppercase tracking-[0.2em] mb-12">
                    Ils nous font confiance
                </h4>

                <!-- Marquee container -->
                <div class="overflow-hidden relative">
                    <div class="flex w-max animate-marquee">
                        
                        <!-- Première série -->
                        <div class="flex shrink-0 gap-16">
                            <img src="{{ asset('images/logo/logo-plurielles.JPG') }}" alt="Logo plurielles" loading="lazy" class="h-20 w-auto shrink-0 object-contain">
                            <img src="{{ asset('images/logo/logo-bank.png') }}" alt="Logo CRDB Bank" loading="lazy" class="h-20 w-auto shrink-0 object-contain">
                            <img src="{{ asset('images/logo/logo-diamant.JPG') }}" alt="Logo Centre medical diamant" loading="lazy" class="h-20 w-auto shrink-0 object-contain">
                            <img src="{{ asset('images/logo/logo-ecobank.png') }}" alt="Logo Ecobank" loading="lazy" class="h-20 w-auto shrink-0 object-contain">
                            <img src="{{ asset('images/logo/logo-jeanne.png') }}" alt="Logo Polyclinique Jeanne d'Arc" loading="lazy" class="h-20 w-auto shrink-0 object-contain">
                            <img src="{{ asset('images/logo/logo-kico.png') }}" alt="Logo kico SA" loading="lazy" class="h-20 w-auto shrink-0 object-contain">
                            <img src="{{ asset('images/logo/logo-kamao.JPG') }}" alt="Logo Kamao COPPER S.A" loading="lazy" class="h-20 w-auto shrink-0 object-contain">
                            <img src="{{ asset('images/logo/logo-CCT.png') }}" alt="Logo CCT" loading="lazy" class="h-20 w-auto shrink-0 object-contain">
                            <img src="{{ asset('images/logo/logo-UAC.jpg') }}" alt="Logo UAC" loading="lazy" class="h-20 w-auto shrink-0 object-contain">
                            <img src="{{ asset('images/logo/logo-mes.png') }}" alt="Logo MES" loading="lazy" class="h-20 w-auto shrink-0 object-contain">
                            <img src="{{ asset('images/logo/logo-mmr.png') }}" alt="Logo MMR" loading="lazy" class="bg-black h-20 w-auto shrink-0 object-contain">
                            <img src="{{ asset('images/logo/logo-normet.png') }}" alt="Logo Normet" loading="lazy" class="h-20 w-auto shrink-0 object-contain">
                            <img src="{{ asset('images/logo/logo-prosteel.jpg') }}" alt="Logo Prosteel" loading="lazy" class="h-20 w-auto shrink-0 object-contain">
                        </div>

                        <!-- Deuxième série identique -->
                        <div class="flex shrink-0 gap-16">
                            <img src="{{ asset('images/logo/logo-plurielles.JPG') }}" alt="Logo plurielles" loading="lazy" class="h-20 w-auto shrink-0 object-contain">
                            <img src="{{ asset('images/logo/logo-bank.png') }}" alt="Logo CRDB Bank" loading="lazy" class="h-20 w-auto shrink-0 object-contain">
                            <img src="{{ asset('images/logo/logo-diamant.JPG') }}" alt="Logo Centre medical diamant" loading="lazy" class="h-20 w-auto shrink-0 object-contain">
                            <img src="{{ asset('images/logo/logo-ecobank.png') }}" alt="Logo Ecobank" loading="lazy" class="h-20 w-auto shrink-0 object-contain">
                            <img src="{{ asset('images/logo/logo-jeanne.png') }}" alt="Logo Polyclinique Jeanne d'Arc" loading="lazy" class="h-20 w-auto shrink-0 object-contain">
                            <img src="{{ asset('images/logo/logo-kico.png') }}" alt="Logo kico SA" loading="lazy" class="h-20 w-auto shrink-0 object-contain">
                            <img src="{{ asset('images/logo/logo-kamao.JPG') }}" alt="Logo Kamao COPPER S.A" loading="lazy" class="h-20 w-auto shrink-0 object-contain">
                            <img src="{{ asset('images/logo/logo-CCT.png') }}" alt="Logo CCT" loading="lazy" class="h-20 w-auto shrink-0 object-contain">
                            <img src="{{ asset('images/logo/logo-UAC.jpg') }}" alt="Logo UAC" loading="lazy" class="h-20 w-auto shrink-0 object-contain">
                            <img src="{{ asset('images/logo/logo-mes.png') }}" alt="Logo MES" loading="lazy" class="h-20 w-auto shrink-0 object-contain">
                            <img src="{{ asset('images/logo/logo-mmr.png') }}" alt="Logo MMR" loading="lazy" class="bg-black h-20 w-auto shrink-0 object-contain">
                            <img src="{{ asset('images/logo/logo-normet.png') }}" alt="Logo Normet" loading="lazy" class="h-20 w-auto shrink-0 object-contain">
                            <img src="{{ asset('images/logo/logo-prosteel.jpg') }}" alt="Logo Prosteel" loading="lazy" class="h-20 w-auto shrink-0 object-contain">
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

    <!--Call to action-->
    <section class="py-16 mb-20 bg-black relative overflow-hidden">
        <div class="absolute top-0 right-0 w-64 h-64 bg-red-600 opacity-20 -mr-32 -mt-32 rounded-full blur-3xl"></div>
        
        <div class="container mx-auto px-6 relative z-10">
            <div class="flex flex-col md:flex-row items-center justify-between gap-10">
            
            <!-- Texte -->
            <div class="text-center md:text-left md:max-w-2xl">
                <h4 class="text-3xl md:text-4xl font-black text-white uppercase tracking-tighter mb-4">
                Rejoignez les <span class="text-red-600">entreprises</span> du Katanga qui nous font confiance
                </h4>
                <p class="text-gray-400 text-lg text-justify">
                    Ogowe propose des solutions de nettoyage, d'hygiène et entretien, de lutte antiparasitaire, de distribution et solutions alimentaire intégrées.
                </p>
            </div>

            <!-- Boutons -->
            <div class="flex flex-col sm:flex-row items-center gap-4">
                <a href="{{route('contact')}}" class="w-full rounded-lg sm:w-auto bg-green-700 hover:bg-green-600 text-white font-black uppercase tracking-widest px-10 py-5 transition-all duration-300 transform hover:-translate-y-1 shadow-xl text-center">
                Obtenir un devis gratuit
                </a>
                <a href="https://wa.me/243977976226" class="w-full rounded-lg sm:w-auto flex items-center justify-center gap-2 border-2 border-white text-white hover:bg-white hover:text-black font-black uppercase tracking-widest px-8 py-5 transition-all duration-300 text-center">
                <span class="text-xl">💬</span> Contact
                </a>
            </div>
            </div>

            <!-- Badge équipe disponible -->
            <div class="mt-8 flex justify-center md:justify-start">
            <span class="bg-green-600 text-white px-4 py-2 rounded-full text-xs font-bold uppercase tracking-widest shadow-md animate-pulse">
                ✅ Équipe disponible aujourd'hui
            </span>
            </div>

            <!-- Barre de réassurance -->
            <div class="mt-12 flex items-center justify-center md:justify-start gap-8 opacity-40">
            <span class="text-white text-[10px] font-bold uppercase tracking-[0.2em]">Réponse sous 24h</span>
            <span class="text-white text-[10px] font-bold uppercase tracking-[0.2em]">Intervention Katanga</span>
            <span class="text-white text-[10px] font-bold uppercase tracking-[0.2em]">Solutions Certifiées</span>
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
