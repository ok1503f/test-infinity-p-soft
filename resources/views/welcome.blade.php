@extends('layouts.app')



@section('content')
    <section class="hero-section relative">
        <div class="fixed right-0 top-1/2 transform -translate-y-1/2 z-30 transition-all duration-300 ease-in-out hover:translate-x-0" style="width: 58px; height: 175px;">
            <div class="bg-white shadow-lg rounded-l-lg py-6 px-2 flex flex-col items-center space-y-5">
                <a href="#" class="block transform transition-transform hover:scale-110" title="Facebook">
                    <img src="{{ asset('images/actionbar/actionface.svg') }}" alt="Facebook" width="22" height="22" loading="lazy">
                </a>
                <a href="#" class="block transform transition-transform hover:scale-110" title="Line">
                    <img src="{{ asset('images/actionbar/actionline.svg') }}" alt="Line" width="22" height="22" loading="lazy">
                </a>
                <a href="#" class="block transform transition-transform hover:scale-110" title="WeChat">
                    <img src="{{ asset('images/actionbar/actionwechat.svg') }}" alt="WeChat" width="22" height="22" loading="lazy">
                </a>
                <a href="#" class="block transform transition-transform hover:scale-110" title="WhatsApp">
                    <img src="{{ asset('images/actionbar/actionwhatsapp.svg') }}" alt="WhatsApp" width="22" height="22" loading="lazy">
                </a>
            </div>
        </div>
        <div class="swiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide" style="background-image: url('{{ asset('images/welcome/background-image.svg') }}')">
                </div>
                
                <div class="swiper-slide" style="background-image: url('{{ asset('images/welcome/background-image-2.svg') }}')">
                </div>
                
                <div class="swiper-slide" style="background-image: url('{{ asset('images/welcome/background-image-3.svg') }}')">
                </div>
            </div>
            
            <div class="position-relative">
                
            </div>
        </div>
    </section>

    <section id="about" class="section bg-white">
        <div class="container mx-auto px-6 flex flex-col justify-center items-center">
            <article class="text-2xl font-semibold text-[#9C3389] mb-2">เปิดประสบการณ์อันงดงาม</article>
            <article class="text-4xl font-bold mb-4">เส้นทางท่องเที่ยว</article>
            <article class="text-base font-medium">โปรแกรมทัวร์ ที่ตอบโจทย์ความต้องการของคุณ และบริการที่ดีที่สุด เลือกประเทศที่คุณสนใจ</article>
            <div class="mt-12 gap-8 flex">
                <x-welcombutton>ทั้งหมด</x-welcombutton>
                <x-welcombutton>เอเชีย</x-welcombutton>
                <x-welcombutton>ยุโรป</x-welcombutton>
                <x-welcombutton>อเมริกาเหนือ</x-welcombutton>
                <x-welcombutton>อเมริกาใต้</x-welcombutton>
            </div>
            <div class="mt-10 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-12 w-full">
                <x-travelcard image="images/welcome/content2/photo/chiness.svg" image2="images/welcome/content2/flask/chiness.svg">จีน</x-travelcard>
                <x-travelcard image="images/welcome/content2/photo/lao.svg" image2="images/welcome/content2/flask/lao.svg">ลาว</x-travelcard>
                <x-travelcard image="images/welcome/content2/photo/myanmar.svg" image2="images/welcome/content2/flask/myanmar.svg">พม่า</x-travelcard>
                <x-travelcard image="images/welcome/content2/photo/vietnam.svg" image2="images/welcome/content2/flask/vietnam.svg">เวียดนาม</x-travelcard>
                <x-travelcard image="images/welcome/content2/photo/malaysia.svg" image2="images/welcome/content2/flask/malaysia.svg">มาเลเซีย</x-travelcard>
            </div>
            <div class="mt-10 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-12 w-full">
                <x-travelcard image="images/welcome/content2/photo/japan.svg" image2="images/welcome/content2/flask/japan.svg">ญี่ปุ่น</x-travelcard>
                <x-travelcard image="images/welcome/content2/photo/maldives.svg" image2="images/welcome/content2/flask/maldives.svg">มัลดีฟส์</x-travelcard>
                <x-travelcard image="images/welcome/content2/photo/jorjia.svg" image2="images/welcome/content2/flask/jorjia.svg">จอร์เจีย</x-travelcard>
                <x-travelcard image="images/welcome/content2/photo/taiwan.svg" image2="images/welcome/content2/flask/taiwan.svg">ไต้หวัน</x-travelcard>
                <x-travelcard image="images/welcome/content2/photo/southkorea.svg" image2="images/welcome/content2/flask/southkorea.svg">เกาหลีใต้</x-travelcard>
            </div>

        </div>
    </section>

    <section id="services" class="section bg-gray-50">
        <div class="container mx-auto px-6">
        </div>
    </section>
    <section id="contact" class="section bg-white">
        <div class="container mx-auto px-6">
        </div>
    </section>
@endsection

@push('scripts')

@endpush

