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
            <li>
                <a href="/nha-san-xuat.php" class="text-slate-500 hover:text-[#12c63c] font-medium">
                    Nhà sản xuất
                </a>
            </li>
            <li>
                <i class="fa-solid fa-chevron-right text-slate-300 text-xs"></i>
            </li>
            <li aria-current="page">
                <span class="text-[#12c63c] font-bold">
                    Bài viết
                </span>
            </li>
        </ol>
    </nav>
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-10">
        <div class="lg:col-span-9">
            <div class="mb-6">
                <h2 class="text-sm lg:text-2xl font-semibold mb-6">Flowline & Marine Life Science Tank Level Measurement</h2>
                <p class="text-xs lg:text-base leading-relaxed">
                    When a major aquarium and marine life center in Texas needed a reliable way to measure the saltwater level in their Sea Lion exhibit holding tanks, they turned to Flowline. Sea Lions are large, inquisitive mammals that often damage accessible instruments through investigation and play.
                    As a result, the level sensors used in each holding tank, rank high on their equipment casualty list. Additionally, saltwater is highly corrosive and scaling. As such, contact sensors corrode or suffer from the effects of material build-up overtime, requiring maintenance and replacement. For these reasons, we suggested the use of non-contact ultrasonic sensors, installed separate from the animals, in a stand-pipe, located outside and behind each holding tank. The result is reliable life science tank level measurement.  
                    Flowline & Marine Life ScienceHere, an EchoSpan ultrasonic level transmitter is mounted in a clear PVC stand pipe. The two-wire, 4-20 mA signal output is connected to the PLC for level monitoring and alarms. When the level drops due to evaporation or splashing, the tank is automatically filled with additional saltwater.
                    If you want more information on how reliable life science tank level measurement can work for you, please call Ryan Herco Flow Solutions at 800-848-1141 and speak with one of our product specialists.
                </p>
                <img src="/images/nha-san-xuat.jpg" alt="Hình ảnh nhà máy sản xuất thiết bị kỹ thuật" class="my-6 rounded-lg shadow-md mx-auto" width="600" height="400">
                <p class="text-xs lg:text-base leading-relaxed">
                    Flowline & Marine Life ScienceHere, an EchoSpan ultrasonic level transmitter is mounted in a clear PVC stand pipe. The two-wire, 4-20 mA signal output is connected to the PLC for level monitoring and alarms. When the level drops due to evaporation or splashing, the tank is automatically filled with additional saltwater.
                    If you want more information on how reliable life science tank level measurement can work for you, please call Ryan Herco Flow Solutions at 800-848-1141 and speak with one of our product specialists.
                </p>
            </div>
            <div class="p-4">
                <div class="flex items-center gap-2 mb-4">
                    <button class="flex items-center bg-[#1877F2] text-white text-xs font-bold px-2 py-1 rounded-[3px] hover:bg-[#166fe5] transition-colors cursor-pointer">
                        <i class="fa-solid fa-thumbs-up mr-1.5"></i> Thích <span class="ml-1 font-normal">0</span>
                    </button>

                    <button class="flex items-center bg-[#1877F2] text-white text-xs font-bold px-2 py-1 rounded-[3px] hover:bg-[#166fe5] transition-colors cursor-pointer">
                        Chia sẻ
                    </button>

                    <button class="flex items-center bg-black text-white text-xs px-2 py-1 rounded-full hover:bg-gray-800 transition-colors cursor-pointer ml-1">
                        <i class="fa-brands fa-x-twitter mr-1"></i> Bài đăng
                    </button>
                </div>

                <div class="flex justify-between items-end border-b border-slate-200 pb-2 mb-4">
                    <div class="text-slate-800 font-bold text-sm">
                        0 bình luận
                    </div>

                    <div class="flex items-center text-xs text-slate-600">
                        <span class="mr-2">Sắp xếp theo</span>
                        <div class="relative group">
                            <button class="border border-slate-300 rounded-sm px-2 py-1 bg-white hover:bg-slate-50 flex items-center gap-1 font-semibold text-slate-700">
                                Cũ nhất
                                <i class="fa-solid fa-caret-down text-xs"></i>
                            </button>
                            </div>
                    </div>
                </div>

                <div class="flex gap-3 mb-4">
                    <div class="w-10 h-10 bg-slate-200 overflow-hidden flex-shrink-0">
                        <svg class="w-full h-full text-white fill-current bg-slate-300" viewBox="0 0 24 24">
                            <path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"/>
                        </svg>
                    </div>

                    <div class="flex-grow">
                        <textarea 
                            rows="3" 
                            placeholder="Bình luận..." 
                            class="w-full border border-slate-300 p-2 text-sm placeholder-slate-400 focus:outline-none focus:border-[#1877F2] focus:ring-1 focus:ring-[#1877F2] transition-all resize-y min-h-12"
                        ></textarea>
                        
                        <div class="flex justify-end mt-2">
                            <button class="bg-[#1877F2] text-white text-xs font-bold px-4 py-1.5 rounded-sm hover:bg-[#166fe5]">
                                Đăng
                            </button>
                        </div>
                    </div>
                </div>

                <div class="border-t border-slate-200 pt-2 flex items-center text-[#1877F2] text-xs font-medium cursor-pointer hover:underline decoration-[#1877F2]">
                    <a href="">
                        <i class="fa-brands fa-facebook-square text-sm mr-1.5"></i>
                        Plugin bình luận trên Facebook
                    </a>
                </div>
            </div>
        </div>

        <div class="lg:col-span-3">
            <div class="bg-white rounded-xl shadow-lg overflow-hidden border border-gray-100">
                <div class="bg-[var(--primary)] p-4 text-center">
                    <h3 class="text-white font-bold uppercase tracking-wider text-sm flex items-center justify-center gap-2">
                        <i class="fa-solid fa-paper-plane"></i> Gửi yêu cầu báo giá
                    </h3>
                </div>

                <div class="p-6">
                    <div class="text-center mb-6">
                        <div class="inline-flex items-center justify-center w-14 h-14 bg-green-50 rounded-full mb-2">
                            <i class="fa-regular fa-envelope-open text-2xl text-[var(--primary)]"></i>
                        </div>
                        <p class="text-xs text-gray-500">Điền thông tin bên dưới, chúng tôi sẽ phản hồi sớm nhất.</p>
                    </div>
                    <form action="" class="space-y-4">
                        <div>
                            <label class="block text-xs font-bold text-gray-700 uppercase mb-1">Họ và tên <span class="text-red-500">*</span></label>
                            <input type="text" required name="fullname" placeholder="Name" class="w-full px-4 py-2 border border-gray-200 rounded text-sm focus:outline-none focus:border-[var(--primary)] focus:ring-1 focus:ring-[var(--primary)]">
                        </div>

                        <div>
                            <label class="block text-xs font-bold text-gray-700 uppercase mb-1">Email <span class="text-red-500">*</span></label>
                            <input type="email" required name="email" required placeholder="email@gmail.com" class="w-full px-4 py-2 border border-gray-200 rounded text-sm focus:outline-none focus:border-[var(--primary)] focus:ring-1 focus:ring-[var(--primary)]">
                        </div>

                        <div>
                            <label class="block text-xs font-bold text-gray-700 uppercase mb-1">Số điện thoại <span class="text-red-500">*</span></label>
                            <input type="tel" name="phone" 
                            placeholder="Số điện thoại" maxlength="10"
                            pattern="[0-9]*"
                            oninput="this.value = this.value.replace(/[^0-9]/g, '')"
                            required class="w-full px-4 py-2 border border-gray-200 rounded text-sm focus:outline-none focus:border-[var(--primary)] focus:ring-1 focus:ring-[var(--primary)]">
                        </div>

                        <div>
                            <label class="block text-xs font-bold text-gray-700 uppercase mb-1">Lời nhắn</label>
                            <textarea rows="3" class="w-full px-4 py-2 border border-gray-200 rounded text-sm focus:outline-none focus:border-[var(--primary)] focus:ring-1 focus:ring-[var(--primary)] resize-none"></textarea>
                        </div>

                        <button class="w-full bg-[var(--primary)] text-white font-bold uppercase py-3 rounded hover:bg-opacity-90 transition-all shadow-md cursor-pointer hover:bg-white hover:text-[var(--primary)] border border-[var(--primary)]">
                            Gửi yêu cầu
                        </button>
                    </form>
                </div>
            </div>
            
            <div class="w-full shadow-lg">
                    <div class="w-full bg-white border border-gray-300 overflow-hidden my-4 rounded-sm">
                        <div class="p-3 flex items-start gap-3 mb-2">
                            <a href="#" class="block shrink-0 relative group">
                                <div class="border border-gray-200 bg-white p-0.5">
                                    <img src="/images/logo-fb.png" alt="Tech 5S Logo" width="50" height="50" class="object-cover">
                                </div>
                            </a>
                            <div class="flex flex-col justify-center pt-0.5">
                                <div class="mb-0 leading-tight">
                                    <a href="#" class="text-[#365899] font-bold text-[16px] hover:underline block" title="Tech 5S">Tech 5S</a>
                                </div>
                                <div class="text-[#90949c] text-[12px] font-normal mt-0.5">10.345 người theo dõi</div>
                            </div>
                        </div>
                        <div class="bg-[#f5f6f7] px-3 py-2 border-t border-[#e5e5e5] flex items-center justify-between gap-2">
                            <a href="#" class="flex items-center gap-1.5 bg-[#f6f7f9] hover:bg-[#e9ebee] border border-[#ced0d4] px-2 py-1 rounded-[3px] text-[12px] font-bold text-[#4b4f56] transition-colors">
                                <i class="fa-brands fa-square-facebook text-[#4b4f56] text-[14px]"></i><span>Theo dõi Trang</span>
                            </a>
                            <a href="#" class="flex items-center gap-1.5 bg-[#f6f7f9] hover:bg-[#e9ebee] border border-[#ced0d4] px-2 py-1 rounded-[3px] text-[12px] font-bold text-[#4b4f56] transition-colors">
                                <i class="fa-solid fa-share text-[#4b4f56] text-[12px]"></i><span>Chia sẻ</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
<?php
$content = ob_get_clean();
require 'layouts/master.php';
?>