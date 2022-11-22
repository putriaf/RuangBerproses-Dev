@extends('layout.layout')

@push('styles')
<link href="{{ asset('css/testimonial-carousel.css') }}" rel="stylesheet">
<link href="{{ asset('css/slick-carousel.css') }}" rel="stylesheet">
@endpush

@section('content')
@if(session()->has('success'))
<!-- Main modal -->
<div id="defaultModal" tabindex="-1" aria-hidden="true" data-modal-show="true"
    class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 p-4 w-full md:inset-0 h-modal md:h-full font-poppins">
    <div class="relative w-50 max-w-2xl h-auto">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow">
            <!-- Modal body -->
            <div class="text-center pt-10 px-10">
                <i class="text-green-400 w-24 h-24 inline-block mb-6" data-feather="user-check"></i>
                <p class="border-t border-b py-2 text-sm border-green-100">Yeay, Anda berhasil login. Selamat Berproses!
                </p>
            </div>
            <!-- Modal footer -->
            <div class="flex items-center p-6 space-x-2 rounded-b border-gray-200 dark:border-gray-600">
                <button data-modal-toggle="defaultModal" type="button"
                    class="mx-auto text-white bg-red-500 hover:bg-red-600 focus:ring-4 focus:outline-none rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 focus:z-10">OK</button>
            </div>
        </div>
    </div>
</div>
@endif

<!--  Hero -->
@section('content')
<section class="font-quicksand">
    <div
        class="pt-[40vh] px-8 sm:px-12 h-screen bg-jumbotron-home bg-no-repeat bg-cover bg-center bg-fixed mx-auto text-center text-slate-100 xl:px-64">
        <h1 class="font-bold xs:px-10 xs:text-2xl sm:text-4xl md:text-4xl mb-3 sm:mb-4" style="line-height: 1.4">Solusi
            Terbaik
            Kembalikan Senyum Bahagiamu</h1>
        <h2 class="font-light text-sm sm:text-md sm:px-6 mb-6 sm:mb-10 md:px-28 lg:px-24 leading-relaxed">Butuh
            ruang
            aman
            dan
            nyaman untuk bercerita? Tenaga profesional siap mendampingimu berproses menuju versi terbaik!</h2>
        <a href="/layanan/professional-counseling"
            class="block bg-gradient-to-r from-[#FB8D66] xs:mx-20 md:mx-52 sm:mx-28 xs:py-3 sm:py-4 lg:mx-64 rounded-3xl font-semibold mt-8 lg:mt-8 hover:scale-90 transition-all ease-out duration-100 delay-150 hover:bg-gradient-to-r hover:from-[#EB6536]">Daftar
            Sekarang</a>
    </div>
    <div class=" bg-[#FAFAF2] py-20">
        <div class="mx-auto text-center">
            <h3 class="text-xl lg:text-2xl md:text-xl font-semibold lg:mb-2 sm:mb-2 mb-2">Gabung Bersama Sahabat
                Berproses
                Lainnya
            </h3>
            <p class="lg:text-md mx-4 sm:mx-6 sm:text-sm text-sm">Bicarakan apa yang menjadi beban, lepas semua penat,
                dan
                urai
                pikiran kusutmu
            </p>
        </div>
        <div class="container grid grid-cols-3 gap-3 text-center mx-auto lg:px-40 lg:pt-10 sm:px-10 sm:pt-8 pt-8">
            <div class="items-center">
                <img src="{{ asset('img/illustrations/usp-1.png') }}" alt="" srcset=""
                    class="mx-auto lg:w-24 lg:mb-4 sm:w-20 sm:mb-4 mb-4 w-24">
                <h4
                    class="lg:text-2xl font-bold hover:lg:text-3xl transition-all ease-in-out duration-1000 delay-200 hover:text-[#e64322]">
                    7000+</h4>
                <p class="lg:px-16 sm:px-5 px-5 lg:mt-2 text-sm">pengikut di sosial media</p>
            </div>
            <div class="items-center">
                <img src="{{ asset('img/illustrations/usp-2.png') }}" alt="" srcset=""
                    class="mx-auto lg:w-24 lg:mb-4 sm:w-20 sm:mb-4 mb-4 w-24">
                <h4
                    class="lg:text-2xl font-bold hover:lg:text-3xl transition-all ease-in-out duration-1000 delay-200 hover:text-[#e64322]">
                    200+</h4>
                <p class="lg:px-16 lg:mt-2 text-sm">total sesi konseling terlaksana</p>
            </div>
            <div class="items-center">
                <img src="{{ asset('img/illustrations/usp-3.png') }}" alt="" srcset=""
                    class="mx-auto lg:w-24 lg:mb-4 sm:w-20 sm:mb-4 mb-4 w-24">
                <h4
                    class="lg:text-2xl font-bold hover:lg:text-3xl transition-all ease-in-out duration-1000 delay-200 hover:text-[#e64322]">
                    80+</h4>
                <p class="xs:px-5 lg:px-16 lg:mt-2 text-sm">total sesi edukasi psikologi terlaksana</p>
            </div>
        </div>
    </div>
    <div class="py-16 px-12 sm:px-12 lg:px-16">
        <h3 class="lg:text-4xl lg:mb-2 font-semibold">Ruang Berproses berkomitmen</h3>
        <h3 class="lg:text-4xl font-semibold">untuk....</h3>
        <div class="container grid xs:grid-cols-1 sm:grid-cols-2 sm:gap-20 place-items-center">
            <img src="{{ asset('img/illustrations/rb-promises.jpg') }}" alt="Empathy woman illustrations"
                class="xs:w-2/3 xs:mb-4">
            <ul
                class="text-sm sm:text-2xl lg:text-2xl lg:pl-11 font-medium list-disc inline-block align-bottom space-y-2">
                <li>Mengurai pikiran kusutmu</li>
                <li>Menjadi ruang aman</li>
                <li>Memberikan motivasi untuk hidup yang lebih bahagia</li>
                <li>Mendengarkanmu seutuhnya</li>
                <li>Menjaga privasimu</li>
                <li>Mendampingimu hingga merasa lebih baik</li>
            </ul>
        </div>
    </div>
    <div class="bg-[#FAFAF2] py-20">
        <div class="mx-auto text-center">
            <h3 class="text-xl lg:text-2xl font-semibold lg:mb-2 sm:mb-2 mb-2">Layanan Kami</h3>
            <p class="lg:text-md sm:text-sm text-sm">Berbagai macam layanan tersedia untuk setiap kebutuhanmu</p>
            <div class="hidden lg:block sm:mt-8 lg:mt-8">
                <a href=""
                    class="bg-pale-orange text-white font-semibold uppercase px-3 py-2 rounded-2xl lg:mr-7">Virtual
                    Support Group</a>
                <a href=""
                    class="bg-white text-slate-700 focus:bg-pale-orange focus:text-white font-semibold uppercase px-3 py-2 rounded-2xl lg:mr-7">Professional
                    Counseling</a>
                <a href=""
                    class="bg-white text-slate-700 focus:bg-pale-orange focus:text-white font-semibold uppercase px-3 py-2 rounded-2xl">Peer
                    Counseling</a>
            </div>
        </div>

        <div id="default-carousel" class="relative" data-carousel="static">
            <!-- Carousel wrapper -->
            <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
                <!-- Item 1 -->
                <div class="duration-700 ease-in-out absolute inset-0 transition-all transform translate-x-0 z-20"
                    data-carousel-item="">
                    <div class="container absolute block -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2">
                        <div class="grid grid-cols-3 gap-10 place-items-center lg:mx-28 sm:mx-10 xs:mx-12">
                            <img src="{{ asset('img/illustrations/virtual-support-group.jpg') }}"
                                class="rounded-full w-2/3 justify-self-end aspect-square" alt="Virtual Support Group">
                            <div class="col-span-2">
                                <h4 class="font-semibold text-base sm:text-base lg:text-lg sm:mb-3 mb-2">Virtual Support
                                    Group
                                </h4>
                                <p class="xs:text-xs text-sm sm:text-sm lg:text-md xs:mb-16 lg:mb-6 sm:mb-6 mb-4">Kamu
                                    gak
                                    sendiri! Banyak
                                    orang
                                    yang
                                    sedang atau
                                    pernah ada di
                                    posisimu. Ceritakan masalahmu dengan privasi terjamin.</p>
                                <a href="/layanan/support-group"
                                    class="lg:px-8 lg:py-2 rounded-xl bg-white font-medium px-4 sm:px-8 py-2 sm:py-2 text-sm sm:text-sm lg:text-base">Lihat
                                    Selengkapnya</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Item 2 -->
                <div class="duration-700 ease-in-out absolute inset-0 transition-all transform translate-x-full z-10 active:z-20"
                    data-carousel-item="">
                    <div class="container absolute block -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2">
                        <div class="grid grid-cols-3 gap-10 place-items-center lg:mx-28 sm:mx-10 xs:mx-12">
                            <img src="{{ asset('img/illustrations/pro-counseling.jpg') }}"
                                class="rounded-full w-2/3 justify-self-end aspect-square object-cover"
                                alt="Professional Counseling">
                            <div class="col-span-2">
                                <h4 class="font-semibold sm:text-base lg:text-lg sm:mb-3 mb-2">Professional Counseling
                                </h4>
                                <p class="text-sm sm:text-sm lg:text-md lg:mb-6 sm:mb-6 mb-4">Layanan konseling online
                                    dengan
                                    psikolog professional untuk
                                    memahami permasalahan yang sedang dialami serta memberikanmu penanganan terbaik.</p>
                                <a href="/layanan/professional-counseling"
                                    class="lg:px-8 lg:py-2 rounded-xl bg-white font-medium px-4 sm:px-8 py-2 sm:py-2 text-sm sm:text-sm lg:text-base">Lihat
                                    Selengkapnya</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Item 3 -->
                <div class="duration-700 ease-in-out absolute inset-0 transition-all transform -translate-x-full z-10"
                    data-carousel-item="">
                    <div class="container absolute block -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2">
                        <div class="grid grid-cols-3 gap-10 place-items-center lg:mx-28 sm:mx-10 xs:mx-12">
                            <img src="{{ asset('img/illustrations/peer-counseling.jpg') }}"
                                class="rounded-full w-2/3 justify-self-end aspect-square object-cover"
                                alt="Peer Counseling">
                            <div class="col-span-2">
                                <h4 class="font-semibold sm:text-base lg:text-lg sm:mb-3 mb-2">Peer Counseling</h4>
                                <p class="text-sm sm:text-sm lg:text-md lg:mb-6 sm:mb-6 mb-4">Layanan konseling dengan
                                    konselor
                                    sebaya terlatih untuk
                                    menangani kasus kondisi kesehatan mental non klinis. Tenang aja, layanan ini free!
                                </p>
                                <a href="/layanan/peer-counseling"
                                    class="lg:px-8 lg:py-2 rounded-xl bg-white font-medium px-4 sm:px-8 py-2 sm:py-2 text-sm sm:text-sm lg:text-base">Lihat
                                    Selengkapnya</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Slider indicators -->
            <div class="absolute z-30 space-x-3 -translate-x-1/2 bottom-5 left-1/2 hidden lg:flex">
                <button type="button" class="w-3 h-3 rounded-full bg-white dark:bg-gray-800" aria-current="true"
                    aria-label="Slide 1" data-carousel-slide-to="0"></button>
                <button type="button"
                    class="w-3 h-3 rounded-full bg-white/50 dark:bg-gray-800/50 hover:bg-white dark:hover:bg-gray-800"
                    aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
                <button type="button"
                    class="w-3 h-3 rounded-full bg-white/50 dark:bg-gray-800/50 hover:bg-white dark:hover:bg-gray-800"
                    aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2"></button>
            </div>
            <!-- Slider controls -->
            <button type="button"
                class="absolute top-0 left-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                data-carousel-prev="">
                <span
                    class="inline-flex items-center justify-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                    <svg aria-hidden="true" class="w-5 h-5 text-[#2b2b2b] sm:w-6 sm:h-6 dark:text-gray-800" fill="none"
                        stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7">
                        </path>
                    </svg>
                    <span class="sr-only">Previous</span>
                </span>
            </button>
            <button type="button"
                class="absolute top-0 right-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                data-carousel-next="">
                <span
                    class="inline-flex items-center justify-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                    <svg aria-hidden="true" class="w-5 h-5 text-[#2b2b2b] sm:w-6 sm:h-6 dark:text-gray-800" fill="none"
                        stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                    </svg>
                    <span class="sr-only">Next</span>
                </span>
            </button>
        </div>
    </div>
    <div class="py-20">
        <div class="mx-auto text-center">
            <h3 class="text-xl lg:text-2xl font-semibold lg:mb-2">Kata Mereka</h3>
        </div>
        <section class="testimonials">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div id="customers-testimonials" class="owl-carousel">
                            <!--TESTIMONIAL 1 -->
                            <div class="item px-12 pt-7 mb-5">
                                <div class="shadow-effect rounded-md py-10 px-6">
                                    <p class="text-base lg:mb-7 font-poppins">Pembicaranya asik dan moderatornya juga
                                        keren. Disetiap
                                        pembicara selesai
                                        menjawab pertanyaan peserta, moderator selalu menyimpulkan jawaban pembicara
                                    </p>
                                    <div class="flex xs:mt-6 sm:mt-4 md:mt-4 lg:mt-4">
                                        <div class="basis-1/5 mr-3"><img class="rounded-full owl-img"
                                                src="{{ asset('img/user/avatar.png') }}" alt=""></div>
                                        <div class="basis-4/5 self-center text-left mb-5">
                                            <p class="text-sm font-semibold">R.A.B, 21 tahun</p>
                                            <p>Mahasiswa Psikologi</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="testimonial-name bg-primary-dark-blue">PSYTALK</div>
                            </div>
                            <!--END OF TESTIMONIAL 1 -->
                            <!--TESTIMONIAL 2 -->
                            <div class="item px-12 pt-7 mb-8">
                                <div class="shadow-effect rounded-md py-10 px-6">
                                    <p class="text-base lg:mb-7 font-poppins">Kesan webinar sangat baik. Saya mendapat
                                        wawasan lebih luas dan mendalam mengenai journaling serta manfaatnya secara
                                        spesifik terhadap kesehatan mental, karena saya belum pernah mendalami mengenai
                                        journaling
                                    </p>
                                    <div class="flex xs:mt-6 sm:mt-4 md:mt-4 lg:mt-4">
                                        <div class="basis-1/5 mr-3"><img class="rounded-full owl-img"
                                                src="{{ asset('img/user/avatar.png') }}" alt=""></div>
                                        <div class="basis-4/5 self-center text-left mb-5">
                                            <p class="text-sm font-semibold">S.E.A 42 tahun</p>
                                            <p>Konselor Sekolah</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="testimonial-name bg-primary-dark-blue">Kelas Berproses</div>
                            </div>
                            <!--END OF TESTIMONIAL 2 -->
                            <!--TESTIMONIAL 3 -->
                            <div class="item px-12 pt-7 mb-8">
                                <div class="shadow-effect rounded-md py-10 px-6">
                                    <p class="text-base lg:mb-7 font-poppins">Menurutku gak terlalu mahal dan Psikolog
                                        RB yang konseling aku waktu itu juga baik & bisa menghangatkan suasana, ngga
                                        canggung juga, yang jelas aku bisa mengatasi masalahku.
                                    </p>
                                    <div class="flex xs:mt-6 sm:mt-4 md:mt-4 lg:mt-4">
                                        <div class="basis-1/5 mr-3"><img class="rounded-full owl-img"
                                                src="{{ asset('img/user/avatar.png') }}" alt=""></div>
                                        <div class="basis-4/5 self-center text-left mb-5">
                                            <p class="text-sm font-semibold">N</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="testimonial-name bg-primary-dark-blue">Professional Counseling</div>
                            </div>
                            <!--END OF TESTIMONIAL 3 -->
                            <!--TESTIMONIAL 4 -->
                            <div class="item px-12 pt-7 mb-8">
                                <div class="shadow-effect rounded-md py-10 px-6">
                                    <p class="text-base lg:mb-7 font-poppins">Seru bangetttt menjadi pengalaman dalam
                                        hidup saya karena dengan adanya sesi ini saya dapat bercerita apa yang dialami
                                        oleh saya sehingga saya mendapatkan kesempatan untuk bercerita pada sesi ini
                                    </p>
                                    <div class="flex xs:mt-6 sm:mt-4 md:mt-4 lg:mt-4">
                                        <div class="basis-1/5 mr-3"><img class="rounded-full owl-img"
                                                src="{{ asset('img/user/avatar.png') }}" alt=""></div>
                                        <div class="basis-4/5 self-center text-left mb-5">
                                            <p class="text-sm font-semibold">M</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="testimonial-name bg-primary-dark-blue">Support Group</div>
                            </div>
                            <!--END OF TESTIMONIAL 4 -->
                            <!--TESTIMONIAL 5 -->
                            <div class="item px-12 pt-7 mb-8">
                                <div class="shadow-effect rounded-md py-10 px-6">
                                    <p class="text-base lg:mb-7 font-poppins">Awalnya saya merasa takut dan ragu untuk
                                        bercerita pada orang lain. Namun setelah saya melakukan sesi konseling saya
                                        merasa lega, nyaman, dan seperti menemukan hal yang saya cari selama ini. Bukan
                                        sekedar omongan motivasi melainkan ilmu dan solusi.
                                    </p>
                                    <div class="flex xs:mt-6 sm:mt-4 md:mt-4 lg:mt-4">
                                        <div class="basis-1/5 mr-3"><img class="rounded-full owl-img"
                                                src="{{ asset('img/user/avatar.png') }}" alt=""></div>
                                        <div class="basis-4/5 self-center text-left mb-5">
                                            <p class="text-sm font-semibold">S</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="testimonial-name bg-primary-dark-blue">Peer Counseling</div>
                            </div>
                            <!--END OF TESTIMONIAL 5 -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    @if($artikels != NULL)
    <div class="pt-20">
        <div class="mx-auto text-center mb-7 sm:mb-14">
            <h3 class="text-xl lg:text-2xl font-semibold">Artikel Berproses</h3>
        </div>
        <div class="grid sm:grid-cols-2 lg:mx-20 sm:mx-10 mx-8 gap-4 mb-7">
            @foreach($artikels as $artikel)
            <div class="grid grid-cols-3 gap-2 sm:gap-3 lg:gap-4 lg:mb-10 mb-6">
                <div class="lg:mr-3">
                    <img src="{{ asset('img/illustrations/compressed/jumbotron-home.png' ) }}" alt=""
                        class="rounded-lg lg:h-full lg:w-full object-cover aspect-video">
                </div>
                <div class="col-span-2">
                    <div class="col-span-2 self-end font-semibold lg:text-lg xs:line-clamp-1 sm:text-base">
                        {{ $artikel->judul }}
                    </div>
                    <div class="row-span-2 col-span-2 text-base sm:text-sm xs:line-clamp-2 sm:line-clamp-3">
                        {{ $artikel->isi }}
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <div class="text-center">
            <a href=""
                class="bg-white text-black border-black border-[1px] lg:px-4 sm:px-4 px-4 lg:py-2 sm:py-2 py-2 rounded-lg sm:text-sm text-sm">Lihat
                Selengkapnya</a>
        </div>
    </div>
    @endif
    <div class="py-20">
        <div class="mx-auto text-center">
            <h3 class="text-xl lg:text-2xl font-semibold lg:mb-2 text-black">Klien Kami</h3>
            <div class="cover-wrapper">
                <div id="client-logos" class="owl-carousel text-center">
                    <div class="item">
                        <div class="client-inners">
                            <img src="{{ asset('img/clients/saint-john.png') }}" alt="Saint John" srcset="">
                            <p class="mt-2">St. John's Catholic School</p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="client-inners">
                            <img src="{{ asset('img/clients/basuki-grup.jpg') }}" alt="Basuki Pratama Engineering"
                                srcset="">
                            <p class="mt-2">Basuki Pratama Engineering</p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="client-inners">
                            <img src="{{ asset('img/clients/kelas-harmoni.jpg') }}" alt="Kelas Main Harmoni" srcset="">
                            <p class="mt-2">Kelas Main Harmoni</p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="client-inners">
                            <img src="{{ asset('img/clients/defasindo.jpeg') }}" alt="PT Defasindo Kreasi Prima"
                                srcset="">
                            <p class="mt-2">PT Defasindo Kreasi Prima</p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="client-inners">
                            <img src="{{ asset('img/clients/stockbit.jpg') }}" alt="Stockbit" srcset="">
                            <p class="mt-2">Stockbit</p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="client-inners">
                            <img src="{{ asset('img/clients/rodeo-kerta-kencana.jpg') }}" alt="PT Rodeo Kerta Kencana"
                                srcset="">
                            <p class="mt-2">PT Rodeo Kerta Kencana</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection