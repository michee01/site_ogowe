   
    <!--Footer-->
    <footer class="bg-black text-white w-full pt-10 pb-5 px-8 mt-12 border-t border-[#D4AF37]/20">
        <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-4 gap-2">
            
            <div class="space-y-6">
                <div class="flex flex-col">
                    <h4 class="text-white font-black text-2xl uppercase tracking-tighter">
                        OGOWE
                    </h4>
                    <div class="w-12 h-1 bg-red-600 mt-2"></div>
                </div>
                <div class="flex space-x-4">
                    <span class="text-sm font-semibold uppercase tracking-tighter border-l-2 border-white pl-2 ml-2 text-gray-400">
                    @if(session('lang') == 'fr')    
                        Hygiène et entretien des entreprises <br> 
                        Santé et sécurité environnementale<br>
                        Distribution <br>
                        Solutions alimentaires intégrées<br>
                    @else
                        Corporate Hygiene & Maintenance <br> 
                        Environmental Health & Safety<br>
                        Distribution <br>
                        Food Integrated Solutions<br>
                    @endif
                    </span>
                </div>
            </div>

            <div class="flex flex-col gap-4 pl-6">
                <h5 class="text-red-600 text-xs font-bold tracking-[3px] uppercase mb-2">Navigation</h5>
                <nav class="flex flex-col gap-3">
                    <a href="{{ route('home') }}" class="text-gray-400 hover:text-white text-sm transition-colors duration-300 flex items-center gap-2 group">
                        <span class="w-0 h-px bg-red-600 transition-all duration-300 group-hover:w-4"></span>
                            {{ session('lang') == 'fr' ? 'Accueil' : 'Home' }}
                    </a>
                    <a href="{{ route('services') }}" class="text-gray-400 hover:text-white text-sm transition-colors duration-300 flex items-center gap-2 group">
                        <span class="w-0 h-px bg-red-600 transition-all duration-300 group-hover:w-4"></span>
                        Services
                    </a>
                    <a href="{{ route('contact') }}" class="text-gray-400 hover:text-white text-sm transition-colors duration-300 flex items-center gap-2 group">
                        <span class="w-0 h-px bg-red-600 transition-all duration-300 group-hover:w-4"></span>
                        Contact
                    </a>
                </nav>
            </div>

            <div class="flex flex-col gap-4">
                <h5 class="text-red-600 text-xs font-bold tracking-[3px] uppercase mb-2">
                    {{ session('lang') == 'fr' ? 'Légal' : 'Legal' }}                       
                </h5>
                <nav class="flex flex-col gap-3">
                    <a href="{{ asset('conditions_Generales_OGOWE.pdf') }}" target="_blank" class="text-gray-400 hover:text-white text-sm transition-colors duration-300">
                        {{ session('lang') == 'fr' ? 'Conditions generales' : 'Terms & Conditions' }}    
                    </a>
                </nav>
            </div>

            <div class="flex flex-col gap-4">
                <h5 class="text-red-600 text-xs font-bold tracking-[3px] uppercase mb-2">contact</h5>
                <div class="space-y-4">
                    <div class="flex items-start gap-3">
                        <span class="material-symbols-outlined text-white text-md">
                            {{ session('lang') == 'fr' ? 'Localisation' : 'Location' }}
                        </span>
                        <p class="text-gray-400 text-sm text-justify">
                            Av. Mgr Tafunga Mbayo N°50 Golf Malela Tshamalale - Lubumbashi RDC
                        </p>
                    </div>
                    <div class="flex items-center gap-3">
                        <span class="material-symbols-outlined text-white text-md">Email:</span>
                        <a href="mailto:contact@ogowe-rdc.com" class="text-gray-400 hover:text-white text-sm transition-colors">contact@ogowe-rdc.com</a>
                    </div>
                    <div class="flex items-center gap-3">
                        <span class="material-symbols-outlined text-white text-md">
                            {{ session('lang') == 'fr' ? 'Télephone' : 'Phone' }}
                        </span>
                        <a href="https://wa.me/243977976226?text=Bonjour%20je%20suis%20intéressé%20par%20vos%20services" class="text-gray-400 hover:text-white text-sm transition-colors">(+243) 977976226</a>
                    </div> 

                    <h5 class="text-white mt-4 mb-6">
                        {{ session('lang') == 'fr' ? 'Suivez-nous' : 'Follow us' }}
                    </h5>
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

            <div class="md:col-span-4 border-t border-white/5 mt-8 pt-6 text-center">
                <p class="text-gray-500 text-[12px] tracking-[4px] font-bold uppercase font-medium">
                    © 2026 <span class="text-gray-100">Ogowe</span>. 
                    @if(session('lang') == 'fr')
                        Tous droits réservés.
                    @else
                        All rights reserved.
                    @endif   
                </p>
            </div>
        </div>
    </footer>