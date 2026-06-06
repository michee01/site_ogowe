
    <!--Section Nav-->
    <nav class="font-sans bg-white text-black sticky top-0 z-50 border-b-gray-200 border-b-2 opacity-90">
        <div class="text-sm px-10 p-1 bg-black text-white  mb-2 flex items-start border-b-2 border-gray-200">
            <div class="mr-5">📞 (+243) 977 976 226 | ✉️  contact@ogowe-rdc.com</div>
            @if(session('lang') == 'fr')
            <div class="mr-5">🚀 Intervention Grand Katanga</div>
            @else
            <div class="mr-5">🚀 Greater Katanga Coverage</div>
            @endif

        </div>
        <div class="container p-1  px-10 mx-auto flex justify-between items-center">
            
            <div class="text-xl font-bold  pl-4 flex w-32 items-center">
                <a href="{{ route('home') }}">
                    <img src="{{ asset('images/logo/logo-ogowe.png') }}" alt="logo de ogowe" loading="lazy" class="h-12 w-auto object-contain">
                </a>
            </div>

            <div class="hidden md:flex space-x-6 uppercase text-sm font-bold">
                <a href="{{ route('home') }}" class="page1 hover:text-red-600 font-bold hover:px-2 hover:border-b-4 hover:border-red-600 transition">Accueil</a>
                <a href="{{ route('services') }}" class="page2 hover:text-red-600 font-bold hover:px-2 hover:border-b-4 hover:border-red-600 transition">Services</a>
                <a href="{{ route('contact') }}" class="page3 hover:text-red-600 font-bold hover:px-2 hover:border-b-4 hover:border-red-600 transition">Contact</a>
            </div>
            
            <div class="flex items-center space-x-4">
                <div class="flex items-center bg-gray-50 border border-gray-200 rounded-full p-1 space-x-1 text-xs font-black uppercase tracking-wider">
                    @if(session('lang') == 'fr')
                        <a href="{{ route('fr') }}" class="bg-green-600 text-white px-3 py-1.5 rounded-full shadow-sm transition"><span class="fi fi-fr"></span> Fr</a>
                        <a href="{{ route('en') }}" class="text-gray-600 hover:bg-black hover:text-white px-3 py-1.5 rounded-full transition duration-300"><span class="fi fi-gb"></span> En</a>
                    @else
                        <a href="{{ route('fr') }}" class="text-gray-600  hover:bg-black hover:text-white px-3 py-1.5 rounded-full shadow-sm transition"><span class="fi fi-fr"></span> Fr</a>
                        <a href="{{ route('en') }}" class="bg-green-600 text-white px-3 py-1.5 rounded-full transition duration-300"><span class="fi fi-gb"></span> En</a>
                    @endif
                </div>

                <button id="menu-toggle" class="md:hidden text-black focus:outline-none p-2">
                    <svg id="menu-icon" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                    <svg id="close-icon" class="w-6 h-6 hidden" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </button>
            </div>
        </div>

        <div id="mobile-menu" class="hidden md:hidden mt-4 flex flex-col space-y-4 uppercase text-xs font-bold border-t border-gray-100 pt-4 pb-2">
            <a href="{{ route('home') }}" aria-current="page" class="page1 hover:text-red-600 transition pl-4 border-l-4 border-red-600">Accueil</a>
            <a href="{{ route('services') }}" class="page2 hover:text-red-600 transition pl-4 border-l-4 border-transparent hover:border-red-600">Services</a>
            <a href="{{ route('contact') }}" class="page3 hover:text-red-600 transition pl-4 border-l-4 border-transparent hover:border-red-600">Contact</a>
        </div>
    </nav>

    <script>
        const menuToggle = document.getElementById('menu-toggle');
        const mobileMenu = document.getElementById('mobile-menu');
        const menuIcon = document.getElementById('menu-icon');
        const closeIcon = document.getElementById('close-icon');

        menuToggle.addEventListener('click', () => {
            // Affiche ou masque le menu mobile
            mobileMenu.classList.toggle('hidden');
            
            // Alterne entre l'icône du hamburger et l'icône de fermeture
            menuIcon.classList.toggle('hidden');
            closeIcon.classList.toggle('hidden');
        });
    </script>
