<?php
$pageTitle = "Trang chủ - Home Design";
$useBanner = true;
$enableSidebar = false;
ob_start();
?>

<div class="">
    <div class="flex justify-between item-center pb-2">
        <h1 class="font-semibold text-lg lg:text-2xl">
            Tech5s
        </h1>

        <a href="/lien-he.php" title="Send a request" class="text-[color:var(--primary)] px-4 py-2 border border-[color:var(--primary)] rounded hover:bg-[color:var(--primary)] hover:text-white transition uppercase font-bold">
            Send a request >>
        </a>
    </div>
    <?php for($i = 0; $i < 6; $i++): ?>
    <p class="py-2">
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam magni unde voluptatibus maxime qui sapiente deserunt corporis ipsum quam sint. Voluptatibus quisquam molestias tempora aut sed aliquam facere repudiandae consequuntur?
    </p>
    <?php endfor; ?>

    <section class="py-16 bg-gray-50 font-sans">
        <div class="container mx-auto px-4">      
            <div class="text-center mb-6 lg:mb-12 animate-fade-up">
                <h2 class="text-lg lg:text-3xl font-bold uppercase text-gray-800 tracking-wide">
                    Sản phẩm <span class="text-[var(--primary)]">Chủ đạo</span>
                </h2>
                <div class="w-20 h-1 bg-[var(--primary)] mx-auto mt-4 rounded-full"></div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <?php for($i = 0; $i < 3; $i++): ?>
                <div class="group bg-white rounded-xl shadow-sm hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-1 overflow-hidden border border-gray-100">
                    <div class="relative h-64 overflow-hidden bg-white flex items-center justify-center">
                        <img src="/images/tubing.jpg" 
                            alt="Tubing, Hose & Fittings" 
                            class="w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-500"
                            width="400" height="300">
                            
                        <div class="absolute inset-0 bg-black/0 group-hover:bg-black/5 transition-colors duration-300"></div>
                    </div>

                    <div class="p-6 text-center">
                        <h3 class="text-lg lg:text-xl font-bold text-gray-800 mb-3 group-hover:text-[var(--primary)] transition-colors line-clamp-2 min-h-14 flex items-center justify-center">
                            Tubing, Hose & Tube Fittings
                        </h3>
                        
                        <p class="text-gray-500 text-sm mb-6 line-clamp-3 lg:block hidden">
                            Cung cấp đầy đủ các loại ống dẫn, đầu nối chịu áp lực cao, đảm bảo độ bền và an toàn tuyệt đối cho hệ thống công nghiệp.
                        </p>

                        <a href="/danh-muc.php" class="inline-block px-4 lg:px-6 py-2 border-2 border-[var(--primary)] text-[var(--primary)] font-bold rounded-full hover:bg-[var(--primary)] hover:text-white transition-all duration-300 uppercase text-sm tracking-wider">
                            Xem chi tiết <i class="fa-solid fa-arrow-right ml-1"></i>
                        </a>
                    </div>
                </div>
                <?php endfor; ?>
            </div>
        </div>
    </section>
</div>



<?php
$content = ob_get_clean();
require 'layouts/master.php';
?>