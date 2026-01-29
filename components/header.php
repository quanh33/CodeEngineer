<div class="relative font-sans shadow-lg bg-white">

    <div class="bg-slate-900 text-white text-xs py-2">
        <div class="container mx-auto px-4 flex justify-between items-center">
            <div class="hidden md:block opacity-80">
                Chào mừng đến với Tech Engineering
            </div>
            <div class="flex items-center space-x-6 w-full md:w-auto justify-end">
                <a href="tel:0987654321" class="flex items-center hover:text-[#12c63c] transition">
                    <i class="fa-solid fa-phone mr-2 text-[#12c63c]"></i> 
                    <span class="font-bold tracking-wide">0987.654.321</span>
                </a>
                <div class="h-3 w-px bg-gray-600"></div>
                <div class="flex items-center space-x-2">
                    <a href="" title="Tiếng Việt"><img src="https://flagcdn.com/w40/vn.png" width="30" height="15" alt="Vietnamese"></a>
                    <a href="" title="English"><img src="https://flagcdn.com/w40/gb.png" width="30" height="15" alt="English"></a>
                </div>
            </div>
        </div>
    </div>

    <header class="relative z-50" x-data="{ searchOpen: false }">
        <div class="container mx-auto px-4 h-20 flex justify-between items-center bg-white relative z-50">
            
            <a href="/" title="Home" class="flex-shrink-0 flex items-center gap-3 group">
                <img src="/images/logo.png" alt="Logo" class="h-12 w-auto object-contain transition group-hover:scale-105 duration-300">
            </a>

            <nav class="desktop-nav">
                <div class="group relative">
                    <a href="/danh-muc.php" class="nav-item">
                        Products <i class="fa-solid fa-chevron-down nav-arrow"></i>
                    </a>
                    <div class="dropdown-box">
                        <a href="/danh-muc.php" class="dropdown-link">Tubing, Hose & Tube Fittings</a>
                        <a href="/danh-muc.php" class="dropdown-link">Hautpflege Premium</a>
                        <a href="/danh-muc.php" class="dropdown-link">Haarschnitte</a>
                        <a href="/danh-muc.php" class="dropdown-link">Styling Tipps</a>
                    </div>
                </div>
                <a href="/" class="nav-item">Services</a>
                <a href="/nha-san-xuat.php" class="nav-item">Manufactures</a>
                <a href="/nha-san-xuat.php" class="nav-item">Industries Served</a>
                <a href="/gioi-thieu.php" class="nav-item">About Us</a>
                <a href="/lien-he.php" class="nav-item">Contact</a>
                <a href="/nha-san-xuat.php" class="nav-item">News</a>
                <a href="/nha-san-xuat.php" class="nav-item">Carrers</a>
            </nav>

            <div class="flex items-center gap-3">
                
                <div class="hidden lg:block relative group">
                    <form action="/tim-kiem.php" method="GET">
                        <input type="text" name="keyword" placeholder="Tìm kiếm..." 
                               class="w-48 bg-gray-100 text-gray-700 text-sm rounded-full py-2 pl-4 pr-10 
                                      focus:outline-none focus:ring-1 focus:ring-[#12c63c] focus:bg-white focus:w-64 
                                      transition-all duration-300 shadow-inner">
                        <button type="submit" class="absolute right-3 top-1/2 -translate-y-1/2 text-gray-400 hover:text-[#12c63c] transition-colors">
                            <i class="fa-solid fa-magnifying-glass"></i>
                        </button>
                    </form>
                </div>

                <button class="lg:hidden block p-2 text-gray-600 hover:text-[#12c63c] transition-colors"
                        @click="searchOpen = !searchOpen">
                    <i class="fa-solid" :class="searchOpen ? 'fa-xmark text-xl' : 'fa-magnifying-glass text-lg'"></i>
                </button>

                <div x-data="{ open: false }" class="lg:hidden">
                    <button @click="open = true" class="mobile-toggle-btn hover:text-[#12c63c] transition">
                        <i class="fa-solid fa-bars-staggered"></i>
                    </button>

                    <div x-show="open" 
                         x-transition:enter="transition ease-out duration-300"
                         x-transition:enter-start="opacity-0"
                         x-transition:enter-end="opacity-100"
                         x-transition:leave="transition ease-in duration-200"
                         x-transition:leave-start="opacity-100"
                         x-transition:leave-end="opacity-0"
                         @click="open = false"
                         class="fixed inset-0 mobile-backdrop z-[60]"></div>

                    <div x-show="open"
                         x-transition:enter="transition ease-out duration-300"
                         x-transition:enter-start="translate-x-full"
                         x-transition:enter-end="translate-x-0"
                         x-transition:leave="transition ease-in duration-300"
                         x-transition:leave-start="translate-x-0"
                         x-transition:leave-end="translate-x-full"
                         class="fixed inset-y-0 right-0 z-[70] mobile-drawer">
                        
                        <div class="flex justify-between items-center p-5 border-b border-gray-100">
                            <span class="font-bold text-lg text-slate-800 tracking-wide">MENU</span>
                            <button @click="open = false" class="w-9 h-9 flex items-center justify-center bg-gray-100 rounded-full hover:bg-red-50 hover:text-red-500 transition">
                                <i class="fa-solid fa-xmark"></i>
                            </button>
                        </div>

                        <div class="flex-1 overflow-y-auto">
                            <div class="mobile-menu-list">
                                <div x-data="{ sub: false }">
                                    <div @click="sub = !sub" class="mobile-item">
                                        Products <i class="fa-solid fa-chevron-down mobile-arrow" :class="sub ? 'rotate-180' : ''"></i>
                                    </div>
                                    <div x-show="sub" x-collapse class="mobile-submenu">
                                        <a href="/danh-muc.php" class="mobile-sublink">Tubing, Hose & Tube Fittings</a>
                                        <a href="/danh-muc.php" class="mobile-sublink">Hautpflege Premium</a>
                                        <a href="/danh-muc.php" class="mobile-sublink">Haarschnitte</a>
                                        <a href="/danh-muc.php" class="mobile-sublink">Styling Tipps</a>
                                    </div>
                                </div>
                                <a href="/" class="mobile-item">Services</a>
                                <a href="/nha-san-xuat.php" class="mobile-item">Manufactures</a>
                                <a href="/nha-san-xuat.php" class="mobile-item">Industries Served</a>
                                <a href="/gioi-thieu.php" class="mobile-item">About Us</a>
                                <a href="/lien-he.php" class="mobile-item">Contact</a>
                                <a href="/nha-san-xuat.php" class="mobile-item">News</a>
                                <a href="/nha-san-xuat.php" class="mobile-item">Carrers</a>
                            </div>
                        </div>

                        <div class="p-4 bg-gray-50 border-t border-gray-100 text-center text-xs text-gray-500">
                            &copy; 2017 Tech Engineering
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div x-show="searchOpen" 
             x-transition:enter="transition ease-out duration-200"
             x-transition:enter-start="opacity-0 -translate-y-2"
             x-transition:enter-end="opacity-100 translate-y-0"
             x-transition:leave="transition ease-in duration-150"
             x-transition:leave-start="opacity-100 translate-y-0"
             x-transition:leave-end="opacity-0 -translate-y-2"
             class="absolute top-full left-0 w-full bg-white shadow-lg border-t border-gray-100 p-4 z-40 lg:hidden">
            
            <form action="/tim-kiem.php" method="GET" class="relative">
                <input type="text" name="keyword" placeholder="Nhập từ khóa tìm kiếm..." 
                       class="w-full bg-gray-50 border border-gray-200 text-gray-700 text-sm rounded-lg py-3 pl-4 pr-12 
                              focus:outline-none focus:border-[#12c63c] focus:ring-1 focus:ring-[#12c63c]">
                <button type="submit" class="absolute right-0 top-0 h-full w-12 flex items-center justify-center text-gray-500 hover:text-[#12c63c]">
                    <i class="fa-solid fa-paper-plane"></i>
                </button>
            </form>
        </div>

    </header>
</div>