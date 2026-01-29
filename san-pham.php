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
                <a href="/danh-muc.php" class="text-slate-500 hover:text-[#12c63c] font-medium">
                    Danh mục
                </a>
            </li>
            <li>
                <i class="fa-solid fa-chevron-right text-slate-300 text-xs"></i>
            </li>
            <li aria-current="page">
                <span class="text-[#12c63c] font-bold">
                    Pro3.1.1
                </span>
            </li>
        </ol>
    </nav>
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-10">
        <div class="lg:col-span-9">

            <div class="bg-white rounded-xl shadow-sm border border-slate-100 p-6 md:p-10 mb-10">
                <div class="grid grid-cols-1 md:grid-cols-12 gap-10">    
                    <div class="md:col-span-5">
                        <div class="aspect-square bg-white border border-slate-200 rounded-lg flex items-center justify-center relative overflow-hidden group">
                            <img src="/images/tubing.jpg" alt="Pro 3.1.1" class="object-contain transition-transform duration-500 group-hover:scale-105">
                        </div>
                        
                        <div class="flex gap-3 mt-4 overflow-x-auto pb-2">
                            <div class="w-20 h-20 border-2 border-[#12c63c] rounded-md cursor-pointer p-1">
                                <img src="/images/tubing.jpg" class="w-full h-full object-cover">
                            </div>
                            <div class="w-20 h-20 border border-slate-200 rounded-md cursor-pointer hover:border-[#12c63c] p-1 opacity-70 hover:opacity-100 transition">
                                <img src="/images/tubing.jpg" class="w-full h-full object-cover">
                            </div>
                        </div>
                    </div>

                    <div class="md:col-span-7 flex flex-col justify-between">
                        <div>
                            <div class="text-xs lg:text-sm font-semibold text-slate-400 mb-1 uppercase tracking-wide">
                                Mã SP: 0001.013
                            </div>

                            <h1 class="text-lg lg:text-3xl md:text-4xl font-extrabold text-slate-800 mb-4 leading-tight">
                                Pro 3.1.1 Surveying Instrument
                            </h1>

                            <div class="prose prose-slate text-slate-600 mb-8">
                                <p class="mb-2 text-sm lg:text-base"><strong class="text-slate-800">Mô tả nhanh:</strong></p>
                                <p class="text-sm lg:text-base">Thiết bị đo đạc chuyên dụng Pro 3.1.1 mang lại độ chính xác cao trong mọi điều kiện môi trường. Phù hợp cho các công trình xây dựng, trắc địa và khảo sát địa hình phức tạp.</p>
                                <div class="text-sm lg:text-base pl-5 mt-2 space-y-1">
                                    <p>Độ bền vượt trội tiêu chuẩn IP66</p>
                                    <p>Màn hình hiển thị kép rõ nét</p>
                                    <p>Pin dung lượng cao hoạt động liên tục</p>
                                </div>
                            </div>
                        </div>

                        <div class="w-full flex justify-center">
                            <a href="tel:0987654321" 
                            class="group relative flex items-center justify-between w-full max-w-[450px] px-6 py-3 
                                    bg-[#0ca830] text-white rounded-full shadow-lg shadow-green-500/30 
                                    transition-all duration-300 hover:bg-[#0ea732] hover:-translate-y-1 hover:shadow-green-500/50">   
                                <div class="w-10 h-10 rounded-full bg-white/20 flex items-center justify-center text-lg mr-4 backdrop-blur-sm">
                                    <i class="fa-solid fa-phone-volume animate-pulse"></i>
                                    </div>
                                    <div class="flex flex-col items-start flex-grow">
                                        <span class="text-xs font-bold opacity-90 tracking-wider hidden lg:block">
                                            Yêu cầu báo giá hoặc gọi ngay
                                        </span>
                                        <span class="text-sm lg:text-xl font-extrabold leading-none mt-0.5">
                                            0987 654 321
                                        </span>
                                    </div>
                                    <div class="ml-4 transition-transform duration-300 group-hover:translate-x-1">
                                        <i class="fa-solid fa-arrow-right text-lg"></i>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="bg-white rounded-xl shadow-sm border border-slate-100 overflow-hidden">
                
                <div class="bg-slate-800 px-6 py-4 border-b-4 border-[#12c63c]">
                    <h2 class="text-lg font-bold text-white uppercase tracking-wider flex items-center">
                        <i class="fa-solid fa-sliders mr-3 text-[#12c63c]"></i> 
                        Thông số kỹ thuật
                    </h2>
                </div>

                <div class="p-6 md:p-8">
                    <div class="overflow-x-auto rounded-lg border border-slate-200">
                        <table class="w-full text-left border-collapse">
                            <tbody class="text-sm md:text-base">
                                
                                <tr class="border-b border-slate-100 hover:bg-slate-50 transition-colors">
                                    <th class="py-4 px-6 font-semibold text-slate-700 w-1/3 bg-slate-50">
                                        Product Group
                                    </th>
                                    <td class="py-4 px-6 text-slate-600">
                                        Food & Beverage
                                    </td>
                                </tr>

                                <tr class="bg-[#12c63c]/5 border-b border-slate-100 hover:bg-[#12c63c]/10 transition-colors">
                                    <th class="py-4 px-6 font-semibold text-slate-700 w-1/3 border-r border-slate-200/50">
                                        Manufacturer
                                    </th>
                                    <td class="py-4 px-6 text-slate-600 font-medium">
                                        Saint Gobain Performance Plastics
                                    </td>
                                </tr>

                                <tr class="border-b border-slate-100 hover:bg-slate-50 transition-colors">
                                    <th class="py-4 px-6 font-semibold text-slate-700 bg-slate-50">
                                        Manufacturer's Part Number
                                    </th>
                                    <td class="py-4 px-6 text-slate-600">
                                        AAB00002
                                    </td>
                                </tr>

                                <tr class="bg-[#12c63c]/5 border-b border-slate-100 hover:bg-[#12c63c]/10 transition-colors">
                                    <th class="py-4 px-6 font-semibold text-slate-700 border-r border-slate-200/50">
                                        Brand
                                    </th>
                                    <td class="py-4 px-6 text-slate-600 font-medium">
                                        Tygon B-44-3
                                    </td>
                                </tr>

                                <tr class="border-b border-slate-100 hover:bg-slate-50 transition-colors">
                                    <th class="py-4 px-6 font-semibold text-slate-700 bg-slate-50">
                                        Type
                                    </th>
                                    <td class="py-4 px-6 text-slate-600">
                                        Unreinforced
                                    </td>
                                </tr>

                                <tr class="bg-[#12c63c]/5 border-b border-slate-100 hover:bg-[#12c63c]/10 transition-colors">
                                    <th class="py-4 px-6 font-semibold text-slate-700 border-r border-slate-200/50">
                                        Material
                                    </th>
                                    <td class="py-4 px-6 text-slate-600 font-medium">
                                        PVC
                                    </td>
                                </tr>

                                <tr class="hover:bg-slate-50 transition-colors">
                                    <th class="py-4 px-6 font-semibold text-slate-700 bg-slate-50">
                                        Color
                                    </th>
                                    <td class="py-4 px-6 text-slate-600">
                                        Clear (Trong suốt)
                                    </td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
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