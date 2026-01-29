<?php
$pageTitle = "Trang chủ - Home Design";
$useBanner = false;
$enableSidebar = false;
ob_start();
?>
<div class="container mx-auto px-4">
    <nav class="breadcrumb-nav mb-8" aria-label="Breadcrumb">
        <ol>   
            <li>
                <a href="/" class="text-slate-500 hover:text-[#12c63c] font-medium">
                    <i class="fa-solid fa-house mr-2"></i> Trang chủ
                </a>
            </li>
            <li>
                <i class="fa-solid fa-chevron-right text-slate-300 text-xs"></i>
            </li>
            <li aria-current="page">
                <span class="text-[#12c63c] font-bold">
                    Liên hệ
                </span>
            </li>
        </ol>
    </nav>

    <div class="grid grid-cols-1 lg:grid-cols-12 gap-10"> 
        <div class="lg:col-span-5">
            <div class="bg-white rounded-2xl shadow-lg border border-slate-100 p-8 md:p-10">
                <div class="flex items-center mb-6 text-[#12c63c]">
                    <i class="fa-regular fa-envelope text-base lg:text-xl mr-3"></i>
                    <h3 class="text-base lg:text-xl font-semibold uppercase">Gửi tin nhắn</h3>
                </div>

                <form action="#" method="POST" class="space-y-5">
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:gap-6 gap-3">
                        <div>
                            <label class="block text-sm font-semibold text-slate-700 mb-2">Họ và Tên <span class="text-red-500">*</span></label>
                            <input type="text" required placeholder="Name" class="w-full text-sm lg:text-base px-4 py-2 lg:py-3 rounded-lg border border-slate-300 focus:outline-none focus:border-[#12c63c] focus:ring-1 focus:ring-[#12c63c] transition-colors placeholder-slate-300">
                        </div>
                        <div>
                            <label class="block text-sm font-semibold text-slate-700 mb-2">Email <span class="text-red-500">*</span></label>
                            <input type="email" required placeholder="example@gmail.com" class="w-full text-sm lg:text-base px-4 py-2 lg:py-3 rounded-lg border border-slate-300 focus:outline-none focus:border-[#12c63c] focus:ring-1 focus:ring-[#12c63c] transition-colors placeholder-slate-300">
                        </div>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 lg:gap-6 gap-3">
                        <div>
                            <label class="block text-sm font-semibold text-slate-700 mb-2">Số điện thoại <span class="text-red-500">*</span></label>
                            <input type="text" maxlength="10"
                            pattern="[0-9]*"
                            oninput="this.value = this.value.replace(/[^0-9]/g, '')" required placeholder="0987..." class="w-full text-sm lg:text-base px-4 py-2 lg:py-3 rounded-lg border border-slate-300 focus:outline-none focus:border-[#12c63c] focus:ring-1 focus:ring-[#12c63c] transition-colors placeholder-slate-300">
                        </div>
                        <div>
                            <label class="block text-sm font-semibold text-slate-700 mb-2">Công ty</label>
                            <input type="text" placeholder="..." class="w-full text-sm lg:text-base px-4 py-2 lg:py-3 rounded-lg border border-slate-300 focus:outline-none focus:border-[#12c63c] focus:ring-1 focus:ring-[#12c63c] transition-colors placeholder-slate-300">
                        </div>
                    </div>

                    <div>
                        <label class="block text-sm font-semibold text-slate-700 mb-2">Nội dung tin nhắn</label>
                        <textarea rows="5" placeholder="Bạn cần hỗ trợ gì..." class="w-full text-sm lg:text-base px-4 py-2 lg:py-3 rounded-lg border border-slate-300 focus:outline-none focus:border-[#12c63c] focus:ring-1 focus:ring-[#12c63c] transition-colors placeholder-slate-300 resize-none"></textarea>
                    </div>

                    <div class="text-sm lg:text-base">
                        <button type="submit" class="w-full md:w-auto bg-[#12c63c] text-white font-bold py-2 lg:py-3 px-8 rounded-lg shadow-lg shadow-green-500/30 hover:bg-[#0ea732] hover:-translate-y-1 transition-all duration-300 flex items-center justify-center gap-2">
                            <i class="fa-solid fa-paper-plane text-sm"></i>
                            Gửi đi ngay
                        </button>
                    </div>
                </form>
            </div>
        </div>
        <div class="lg:col-span-7 space-y-8">
            
            <div class="bg-white rounded-2xl shadow-lg border border-slate-100 px-8 py-4">
                <h3 class="text-lg lg:text-xl font-bold text-slate-800 mb-6 border-b border-slate-100 pb-4">
                    Thông tin liên hệ
                </h3>
                
                <ul class="space-y-6">
                    <li class="flex items-start">
                        <div class="w-10 h-10 rounded-full bg-green-50 text-[#12c63c] flex items-center justify-center flex-shrink-0 mt-1">
                            <i class="fa-solid fa-location-dot text-lg"></i>
                        </div>
                        <div class="ml-4">
                            <p class="font-bold text-slate-800">Địa chỉ văn phòng</p>
                            <p class="text-sm mt-1 leading-relaxed">
                                Số 19, Ngõ 68 P. Lê Hữu Phước, Mỹ Đình 1, Nam Từ Liêm, Hà Nội
                            </p>
                        </div>
                    </li>

                    <li class="flex items-center">
                        <div class="w-10 h-10 rounded-full bg-green-50 text-[#12c63c] flex items-center justify-center flex-shrink-0">
                            <i class="fa-solid fa-phone-volume text-lg"></i>
                        </div>
                        <div class="ml-4">
                            <p class="font-bold text-slate-800">Hotline hỗ trợ</p>
                            <p class="text-base lg:text-lg font-bold text-[#12c63c] mt-0.5">0987 654 321</p>
                        </div>
                    </li>
                </ul>
            </div>

            <div class="bg-white rounded-2xl shadow-lg overflow-hidden border border-slate-100 h-80 relative group">
                <iframe 
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3723.924278650637!2d105.76310237599955!3d21.035715587532354!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x313454b991d80fd5%3A0x53cefc99d6b0bf86!2zUXXhuq1uIE5hbSBU4burIExpw6ptLCBIw6AgTuG7mWksIFZpZXRuYW0!5e0!3m2!1sen!2s!4v1700000000000!5m2!1sen!2s" 
                    width="100%" 
                    height="100%" 
                    style="border:0;" 
                    allowfullscreen="" 
                    loading="lazy" 
                    referrerpolicy="no-referrer-when-downgrade"
                    class="group-hover:opacity-90 transition-opacity">
                </iframe>
                
                <a href="#" class="absolute bottom-4 right-4 bg-white px-3 py-1.5 text-xs font-bold rounded shadow-md hover:bg-slate-50 text-slate-700">
                    Xem bản đồ lớn
                </a>
            </div>

        </div>

    </div>
    </div>
</div>
<?php
$content = ob_get_clean();
require 'layouts/master.php';
?>