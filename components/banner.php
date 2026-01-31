<section class="banner-section font-sans">
    <div class="splide main-slider" aria-label="Home Banner">
        <div class="splide__track">    
            <ul class="splide__list">
                <?php for ($i = 0; $i < 3; $i++): ?>
                <li class="splide__slide">
                    <div class="relative w-full h-full">           
                        <img src="https://images.unsplash.com/photo-1600607687939-ce8a6c25118c" 
                             alt="Nội thất sang trọng" 
                             class="absolute inset-0 w-full h-full object-cover z-0">
                        <div class="absolute inset-0 bg-gray/90 lg:bg-gradient-to-r lg:from-transparent lg:to-black/80 z-10"></div>
                        <div class="relative z-20 container mx-auto h-full px-4">
                            <div class="grid grid-cols-1 lg:grid-cols-2 h-full items-center">                               
                                <div class="hidden lg:block"></div>
                                <div class="text-center lg:text-right text-white space-y-4">
                                    <h2 class="text-lg lg:text-xl font-extrabold uppercase leading-tight animate-fade-up">
                                        Stainless Steel Fluid Handling Products 
                                    </h2>
                                    <p class="text-sm lg:text-lg text-gray-200 animate-fade-up delay-100 line-clamp-4">
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea delectus blanditiis, eius exercitationem deserunt impedit eligendi expedita, omnis assumenda distinctio excepturi repudiandae quae laudantium! Necessitatibus neque explicabo amet laudantium commodi.
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero eum iste voluptatem minima at quia, adipisci tempore, excepturi optio reiciendis reprehenderit ullam accusamus enim quam deleniti odit, vero distinctio exercitationem.
                                    </p>
                                    <div class="pt-4 animate-fade-up delay-200">
                                        <a href="/" class="inline-block px-8 py-3 bg-[var(--primary)] text-white font-bold uppercase rounded hover:bg-white hover:text-[var(--primary)] transition-all duration-300 shadow-lg">
                                            Khám phá ngay
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <?php endfor; ?>
            </ul>
        </div>
    </div>

    <script src="/assets/js/splide.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var el = document.querySelector('.main-slider');
            if (el) {
                new Splide('.main-slider', {
                    type: 'fade',
                    rewind: true,
                    autoplay: true,
                    interval: 3000,
                    arrows: true,
                    pagination: true,
                }).mount();
            }
        });
    </script>
</section>