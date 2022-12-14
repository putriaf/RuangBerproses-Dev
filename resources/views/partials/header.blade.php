<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://unpkg.com/flowbite@1.5.3/dist/flowbite.min.css" />
    <link href="{{ asset('https://ruangberproses-dev.herokuapp.com/css/navbar-scroll.css') }}" rel="stylesheet">
    <link href="{{ asset('css/navbar-scroll.css') }}" rel="stylesheet">
</head>

<body>
    <!-- Start Header -->
    <header class="font-poppins">
        <nav class="border-gray-200 px-2 sm:px-4 py-2.5 fixed top-0 w-full z-50" id="navigation">
            <div class="container flex flex-wrap justify-between items-center mx-auto">
                <a href="/" class="flex items-center">
                    <img src="{{ asset('img/ruang-berproses/rb-logo-text.png') }}" class="mr-3 h-6 sm:h-9"
                        alt="Logo Ruang Berproses">
                </a>
                <div class="flex items-center md:order-2">
                    @if(!session()->has('token'))
                    <button type="button"
                        class="flex mr-3 text-sm rounded-full md:mr-0 focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600">
                        <a href="/login"
                            class="text-[#e5e5e5] rounded-2xl bg-[#eb6536] px-10 py-2 font-medium hover:bg-[#cf5225] shadow-md login-btn">Login</a>
                    </button>
                    @else
                    <button type="button"
                        class="flex mr-3 text-sm rounded-full md:mr-0 focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600"
                        id="user-menu-button" aria-expanded="false" data-dropdown-toggle="user-dropdown"
                        data-dropdown-placement="bottom">
                        <span class="sr-only">Open user menu</span>
                        @if (session()->get('foto_profil') != NULL)
                        <img src="{{ asset('https://ruangberproses-dev.site/storage/' . session()->get('foto_profil')) }}"
                            alt="User Profile" class="w-10 h-10 rounded-full object-cover aspect-square">
                        @else
                        <img class="w-10 h-10 rounded-full" src="{{ asset('img/user/avatar.png') }}"
                            alt="User Photo Placeholder">
                        @endif
                    </button>
                    @endif
                    <!-- Dropdown menu -->
                    <div class="hidden z-50 my-4 text-base list-none bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-700 dark:divide-gray-600"
                        id="user-dropdown" data-popper-reference-hidden="" data-popper-escaped=""
                        data-popper-placement="bottom"
                        style="position: absolute; inset: 0px auto auto 0px; margin: 0px; transform: translate3d(0px, 43.3333px, 0px);">
                        <div class="py-3 px-4">
                            <span
                                class="block text-sm text-gray-900 dark:text-white">{{ session()->get('nama') }}</span>
                            <span
                                class="block text-sm font-medium text-gray-500 truncate dark:text-gray-400">{{ session()->get('email') }}</span>
                        </div>
                        <ul class="py-1" aria-labelledby="user-menu-button">
                            <li>
                                <a href="/profile"
                                    class="block py-2 px-4 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Profil
                                    Saya</a>
                            </li>
                            <li>
                                <a href="/profile"
                                    class="block py-2 px-4 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Riwayat
                                    Pendaftaran</a>
                            </li>
                            @if(session()->get('role') == 1)
                            <li>
                                <a href="/admin"
                                    class="block py-2 px-4 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Administrator
                                </a>
                            </li>
                            @endif
                            <li>
                                <form action="/logout" method="POST">
                                    @csrf
                                    <button
                                        class="block py-2 px-4 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Sign
                                        out</button>
                                </form>
                            </li>
                        </ul>
                    </div>
                    <button data-collapse-toggle="mobile-menu-2" type="button"
                        class="inline-flex items-center p-2 ml-1 text-sm text-slate-100 rounded-lg md:hidden hover:bg-gray-800 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600 mobile-menu"
                        aria-controls="mobile-menu-2" aria-expanded="false">
                        <span class="sr-only">Open main menu</span>
                        <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </button>
                </div>
                <div class="hidden justify-between items-center w-full md:flex md:w-auto md:order-1" id="mobile-menu-2">
                    <ul
                        class="flex flex-col p-4 mt-4 bg-gray-50 rounded-lg border border-gray-100 md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-normal md:border-0 md:bg-transparent dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
                        <li>
                            <a href="/"
                                class="block py-2 pr-4 pl-3 rounded md:bg-transparent md:text-neutral-200  lg:text-neutral-200 md:p-0 nav-item-text md:hover:font-medium"
                                aria-current="page">Home</a>
                        </li>
                        <li>
                            <a href="#" id="dropdownLayananButton" data-dropdown-toggle="dropdownLayanan"
                                data-dropdown-placement="bottom"
                                class="block py-2 pr-4 pl-3 rounded md:bg-transparent md:text-neutral-200 lg:text-neutral-200 md:p-0 nav-item-text md:hover:font-medium">Layanan
                                <svg class="ml-2 w-4 h-4 inline" aria-hidden="true" fill="currentColor"
                                    viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </a>
                            <!-- Dropdown Layanan -->
                            <div id="dropdownLayanan"
                                class="hidden z-10 w-44 bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-700">
                                <ul class="py-1 text-sm text-gray-700 dark:text-gray-200"
                                    aria-labelledby="dropdownLayananButton">
                                    <li>
                                        <a href="/layanan/professional-counseling"
                                            class="block py-2 px-4 nav-item-text">Professional
                                            Counseling</a>
                                    </li>
                                    <li>
                                        <a href="/layanan/peer-counseling" class="block py-2 px-4 nav-item-text">Peer
                                            Counseling</a>
                                    </li>
                                    <li>
                                        <a href="/layanan/support-group" class="block py-2 px-4 nav-item-text">Virtual
                                            Support Group</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li>
                            <a href="#" id="dropdownProgramButton" data-dropdown-toggle="dropdownProgram"
                                class="block py-2 pr-4 pl-3 rounded md:bg-transparent md:text-neutral-200 lg:text-neutral-200 md:p-0 nav-item-text md:hover:font-medium">Program
                                <svg class="ml-2 w-4 h-4 inline" aria-hidden="true" fill="currentColor"
                                    viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </a>
                            <!-- Dropdown Program -->
                            <div id="dropdownProgram"
                                class="hidden z-10 w-44 bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-700">
                                <ul class="py-1 text-sm text-gray-700 dark:text-gray-200"
                                    aria-labelledby="dropdownProgramButton">
                                    <li>
                                        <a href="/program/psytalk" class="block py-2 px-4">PSYTALK</a>
                                    </li>
                                    <li>
                                        <a href="/program/kelas-berproses" class="block py-2 px-4">Kelas
                                            Berproses</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li>
                            <a href="/artikel-berproses"
                                class="block py-2 pr-4 pl-3 rounded md:bg-transparent md:text-neutral-200  lg:text-neutral-200 md:p-0 nav-item-text md:hover:font-medium">Artikel</a>
                        </li>
                        <li>
                            <a href="#" id="dropdownTentangButton" data-dropdown-toggle="dropdownTentang"
                                class="block py-2 pr-4 pl-3 rounded md:bg-transparent md:text-neutral-200  lg:text-neutral-200 md:p-0 nav-item-text md:hover:font-medium">Tentang
                                <svg class="ml-2 w-4 h-4 inline" aria-hidden="true" fill="currentColor"
                                    viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </a>
                            <!-- Dropdown Program -->
                            <div id="dropdownTentang"
                                class="hidden z-20 w-44 bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-700">
                                <ul class="py-1 text-sm text-gray-700 dark:text-gray-200"
                                    aria-labelledby="dropdownTentangButton">
                                    <li>
                                        <a href="/tentang/ruang-berproses"
                                            class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Ruang
                                            Berproses</a>
                                    </li>
                                    <li>
                                        <a href="/tentang/associate-psychologist"
                                            class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Associate
                                            Psychologist</a>
                                    </li>
                                    <!-- <li>
                                        <a href="/tentang/tim-rb"
                                            class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Tim
                                            Ruang Berproses</a>
                                    </li> -->
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <!-- End Header -->
    <script src="https://unpkg.com/flowbite@1.5.3/dist/flowbite.js"></script>
    <script src="{{ asset('https://ruangberproses-dev.herokuapp.com/js/navbar-scroll.js') }}"></script>
    <script src="{{ asset('js/navbar-scroll.js') }}"></script>
</body>

</html>