<?php
$pageTitle = "Trang chủ - Home Design";
$useBanner = false;
$enableSidebar = true;
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
                    
                </span>
            </li>
        </ol>
    </nav>
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-10">
        <div class="lg:col-span-8">
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-8">
                <?php for($i = 0; $i < 4; $i++): ?>
                    <a href="/san-pham.php" title="Products Details">
                        <div class="group flex flex-col h-full bg-white border border-gray-100 rounded-lg overflow-hidden hover:shadow-lg transition-shadow duration-300">  
                            <div class="h-64 w-full overflow-hidden border-b border-gray-50 relative">
                                <img src="/images/tubing.jpg" 
                                        width="600" height="400"
                                        alt="HERCO CHEM HOSE 3/8" 
                                        class="w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-500">
                            </div>
    
                            <div class="p-5 flex flex-col flex-grow">
                                <span class="text-xs font-bold text-gray-400 uppercase tracking-wider mb-2">0514.072</span>
                                
                                <h3 class="text-lg font-bold text-gray-800 leading-tight group-hover:text-[var(--primary)] transition-colors line-clamp-2">
                                    HERCO CHEM HOSE 3/8 INDUSTRIAL GRADE
                                </h3>
                            </div>
                        </div>
                    </a>
                <?php endfor; ?>
            </div>
        </div>

        <div class="lg:col-span-4">
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