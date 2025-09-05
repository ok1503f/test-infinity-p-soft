<nav class="w-full">
    <div class="bg-[#E23799] h-10 w-[90%] relative z-50 rounded-br-xl">
        <div class="flex w-full h-10 px-8 justify-between items-center">
            <div class="flex gap-2">
                <div class="flex items-center gap-2">
                    <img src="{{ asset('images/navbar/navcompany.svg') }}" alt="Logo" width="18px" height="18px">
                    <article class="text-white text-sm font-medium">บริษัทสแตนดาร์ดทัวร์ จำกัด บริการด้วยจิต ดูแลด้วยใจ 34 ปี ใบอนุญาตเลขที่ 21/00296</article>
                </div>
                <div class="flex items-center gap-2">
                    <img src="{{ asset('images/navbar/navposition.svg') }}" alt="Logo" width="18px" height="18px">
                    <article class="text-white text-sm font-medium">172/8 ถนนช้างคลาน เทศบาลนครเชียงใหม่ จังหวัดเชียงใหม่ 50100</article>
                </div>
                <div class="flex items-center gap-2">
                    <img src="{{ asset('images/navbar/navtime.svg') }}" alt="Logo" width="18px" height="18px">
                    <article class="text-white text-sm font-medium">จันทร์ - ศุกร์ 08.30 - 19.30</article>
                </div>
            </div>
            <div class="flex gap-2">
                <div class="flex items-center">
                    <div class="relative group ">
                        <form method="POST" class="flex items-center gap-4">
                            @csrf
                            <div class="flex items-center gap-4">
                                <img src="{{ asset('images/navbar/navcharactor.svg') }}" alt="Logo" width="18px" height="18px">
                                <img src="{{ asset('images/navbar/navthai.svg') }}" alt="Language" width="18" height="18" class="transition-transform group-hover:scale-110">
                                <select class="appearance-none bg-[#E23799] border-0 text-white text-sm focus:ring-0 focus:outline-none pr-6" name="locale">
                                    <option value="th">ไทย</option>
                                    <option value="en">English</option>
                                </select>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="relative w-full">
        <div class="absolute -top-10 right-0 bg-[#9C3389] h-32 w-80 px-8 flex flex-col gap-4">
            <div class="flex justify-between mb-4 ml-32 pt-2">
                <a href="#" class="block transform hover:scale-110 transition-transform" title="Facebook">
                    <img src="{{ asset('images/navbar/navface.svg') }}" alt="Facebook" width="18px" height="18px">
                </a>
                <a href="#" class="block transform hover:scale-110 transition-transform" title="Line">
                    <img src="{{ asset('images/navbar/navline.svg') }}" alt="Line" width="18px" height="18px">
                </a>
                <a href="#" class="block transform hover:scale-110 transition-transform" title="WeChat">
                    <img src="{{ asset('images/navbar/navwechat.svg') }}" alt="WeChat" width="18px" height="18px">
                </a>
                <a href="#" class="block transform hover:scale-110 transition-transform" title="WhatsApp">
                    <img src="{{ asset('images/navbar/navwhatsapp.svg') }}" alt="WhatsApp" width="18px" height="18px">
                </a>
            </div>
            
            <div class="text-white flex items-center">
                <img src="{{ asset('images/navbar/navphone.svg') }}" alt="" class="mr-2">
                <div>
                    <div class="text-base font-medium	">สอบถามเพิ่มเติม/จองทริป</div>
                    <div class="text-2xl font-bold">081-681-5588</div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="bg-white h-[87px] shadow-md">
        <div class="container px-10 py-3 h-full flex items-center">
            <div class="flex gap-12 items-center">
                <div class="flex-shrink-0">
                    <img src="{{ asset('images/navbar/navlogo.svg') }}" alt="Logo" width="60px" height="60px">
                </div>
                
                <div class="flex md:flex space-x-8 gap-9">
                    <a href="#" class="text-[#686868] text-lg hover:text-[#9C3389] font-medium">หน้าแรก</a>
                    <div class="relative group">
                        <select name="travel" id="travel" class="appearance-none bg-transparent border-0 text-[#686868] text-lg hover:text-[#9C3389] font-medium pr-6 cursor-pointer focus:ring-0 focus:outline-none">
                            <option value="">ท่องเที่ยวต่างประเทศ</option>
                            <option value="">ท่องเที่ยวในประเทศ</option>
                            <option value="">แพ็คเก็จทัวร์</option>
                            <option value="">จัดกรุ๊ปส่วนตัว</option>
                            <option value="">โปรโมชั่น 🔥</option>
                            <option value="">รีวิว</option>
                            <option value="">แกลลอรี่</option>
                        </select>
                        <div class="absolute right-0 top-1/2 -translate-y-1/2 pointer-events-none">
                            <svg class="w-4 h-4 text-[#686868] group-hover:text-[#9C3389]" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </div>
                    </div>
                    <a href="#" class="text-[#686868] text-lg hover:text-[#9C3389] font-medium">ท่องเที่ยวในประเทศ</a>
                    <a href="#" class="text-[#686868] text-lg hover:text-[#9C3389] font-medium">แพ็คเก็จทัวร์</a>
                    <a href="#" class="text-[#686868] text-lg hover:text-[#9C3389] font-medium">จัดกรุ๊ปส่วนตัว</a>
                    <a href="#" class="text-[#686868] text-lg hover:text-[#9C3389] font-medium">โปรโมชั่น 🔥</a>
                    <a href="#" class="text-[#686868] text-lg hover:text-[#9C3389] font-medium">รีวิว</a>
                    <a href="#" class="text-[#686868] text-lg hover:text-[#9C3389] font-medium">แกลลอรี่</a>
                </div>
            </div>
        </div>
    </div>
</nav>
