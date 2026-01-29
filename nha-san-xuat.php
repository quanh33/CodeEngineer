<?php
$pageTitle = "Trang chủ - Home Design";
$useBanner = false;
$enableSidebar = false;
ob_start();
?>
<div class="container mx-auto px-4">
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-10">
        <div class="lg:col-span-9">
            <div class="flex items-center mb-6">
            <div class="flex items-center pr-4">
                <i class="fa-regular fa-newspaper text-slate-700 text-lg mr-2"></i>
                <span class="font-bold text-slate-700 uppercase tracking-wide text-lg">
                    News
                </span>
            </div>
            <div class="flex-grow h-[4px] bg-[#12c63c] rounded-r-sm"></div>
        </div>
        <?php for($i = 0; $i < 2; $i++): ?>
            <div class="grid grid-cols-1 md:grid-cols-12 gap-8 md:gap-12 pb-5 border-b border-slate-200 mb-5">
                <div class="md:col-span-7">    
                    <h2 class="text-lg md:text-2xl font-light text-slate-600 mb-5">
                        Nhà sản xuất thiết bị kỹ thuật hàng đầu Việt Nam
                    </h2>
                    <div class="prose text-slate-500 text-justify leading-relaxed mb-6 line-clamp-4">
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed luctus quam ex, a porta felis faucibus vitae. Proin venenatis massa at lectus elementum, non rhoncus felis eleifend. Duis tempor, dui quis gravida luctus, magna dolor ultricies lorem, non pretium ex quam cursus diam.
                        </p>
                        <p class="mt-3">
                            Suspendisse a blandit neque. Pellentesque efficitur ante nec dolor laoreet, vel pellentesque ex consequat. Suspendisse sodales quam quis mi fringilla finibus. In vitae dignissim felis. Suspendisse condimentum, eros nec feugiat faucibus, arcu est fringilla dui, in suscipit quam ligula vitae erat.
                        </p>
                    </div>
                    <a href="/bai-viet.php" class="inline-flex items-center bg-[#12c63c] text-white text-sm font-bold px-5 py-2.5 rounded hover:bg-[#0e9f30] transition-colors shadow-sm uppercase">
                        Learn More 
                        <i class="fa-solid fa-angles-right ml-2 text-xs"></i>
                    </a>
                </div>

                <div class="md:col-span-5 h-full"> <div class="relative overflow-hidden rounded-lg shadow-md border border-slate-100 group w-full h-full">
                        
                        <img src="/images/nha-san-xuat.jpg" 
                            alt="Hình ảnh nhà máy sản xuất thiết bị kỹ thuật"
                            width="600" 
                            height="400" 
                            class="w-full h-full object-cover transform transition-transform duration-500 group-hover:scale-105">
                            
                    </div>
                </div>
            </div>
        <?php endfor; ?>
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