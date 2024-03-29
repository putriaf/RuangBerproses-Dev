@extends('layout.admin-dashboard')

@section('content')
<main class="p-6 sm:p-10 space-y-6 max-h-screen overflow-y-auto" id="myTabContent">
    <!-- SCREENING -->
    <div class="" id="screening" role="tabpanel" aria-labelledby="screening-tab">
        <div class="flex flex-col space-y-6 md:space-y-0 md:flex-row justify-between">
            <div class="mr-6">
                <h1 class="text-4xl font-semibold mb-2">Screening</h1>
                <h2 class="text-gray-600 ml-0.5">Data Screening Pre-pendaftaran Konseling</h2>
            </div>
            <div class="flex flex-wrap items-start justify-end -mb-3 text-sm">
                <button class="inline-flex px-5 py-3 text-white bg-blue-600 hover:bg-purple-700 focus:bg-blue-700 rounded-md ml-6 mb-3">
                    <svg aria-hidden="true" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="flex-shrink-0 h-4 w-4 text-white -ml-1 mr-2 self-center">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                    </svg>
                    Tambah Data
                </button>
            </div>
        </div>
        <section class="grid md:grid-cols-1">
            <div class="flex justify-end items-center py-4 dark:bg-gray-800">
                <label for="table-search" class="sr-only">Search</label>
                <div class="relative">
                    <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                        <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path>
                        </svg>
                    </div>
                    <input type="text" id="table-search-users" class="block p-2 pl-10 w-80 text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search">
                </div>
            </div>
            <div class="overflow-x-auto relative shadow-md sm:rounded-lg">
                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="py-3 px-6">
                                ID
                            </th>
                            @foreach($screening_variable as $sv)
                            <th scope="col" class="py-3 px-6">
                                {{ $sv }}
                            </th>
                            @endforeach
                        </tr>
                    </thead>
                    <tbody>
                        @if($screenings == NULL)
                        @else
                        @foreach($screenings as $screening)
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                            <th scope="row" class="flex items-center py-4 px-6 text-gray-900 whitespace-nowrap dark:text-white">
                                <div class="text-base font-semibold">{{ $screening->id}}</div>
                            </th>
                            @foreach($screening_variable as $sv)
                            <td class="py-4 px-6">
                                {{ $screening->$sv }}
                            </td>
                            @endforeach
                        </tr>
                        @endforeach
                        @endif
                    </tbody>
                </table>
            </div>
        </section>
    </div>
    <!-- PROFFESSIONAL COUNSELING -->
    <div class="" id="proCounseling" role="tabpanel" aria-labelledby="proCounseling-tab">
        <div class="mb-4 border-b border-gray-200 dark:border-gray-700">
            <ul class="flex flex-wrap -mb-px text-sm font-medium text-center" id="pcSubTab" data-tabs-toggle="#pcSubTabContent" role="tablist">
                <li class="mr-2" role="presentation">
                    <button class="inline-block p-4 rounded-t-lg border-b-2 text-blue-600 hover:text-blue-600 dark:text-blue-500 dark:hover:text-blue-500 border-blue-600 dark:border-blue-500" id="pcList-tab" data-tabs-target="#pcList" type="button" role="tab" aria-controls="pcList" aria-selected="true">Daftar Konseling Tersedia</button>
                </li>
                <li class="mr-2" role="presentation">
                    <button class="inline-block p-4 rounded-t-lg border-b-2 border-transparent hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300 dark:border-transparent text-gray-500 dark:text-gray-400 border-gray-100 dark:border-gray-700" id="pcReg-tab" data-tabs-target="#pcReg" type="button" role="tab" aria-controls="pcReg" aria-selected="false">Data Pendaftaran</button>
                </li>
            </ul>
        </div>
        <div id="pcSubTabContent">
            <div class="p-4 rounded-lg dark:bg-gray-800 mb-[100px]" id="pcList" role="tabpanel" aria-labelledby="pcList-tab">
                <div class="flex flex-col space-y-6 md:space-y-0 md:flex-row justify-between">
                    <div class="mr-6">
                        <h1 class="text-4xl font-semibold mb-2">Professional Counseling</h1>
                        <h2 class="text-gray-600 ml-0.5">Konseling dengan psikolog professional</h2>
                    </div>
                    <div class="flex flex-wrap items-start justify-end -mb-3 text-sm">
                        <a href="/admin/layanan/procounseling-list/tambah">
                            <button data-modal-toggle="" class="inline-flex px-5 py-3 text-white bg-blue-600 hover:bg-purple-700 focus:bg-blue-700 rounded-md ml-6 mb-3">
                                <svg aria-hidden="true" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="flex-shrink-0 h-4 w-4 text-white -ml-1 mr-2 self-center">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                                </svg>
                                Tambah Data
                            </button>
                            <!-- <button data-modal-toggle="createpcListModal"
                                class="inline-flex px-5 py-3 text-white bg-blue-600 hover:bg-purple-700 focus:bg-blue-700 rounded-md ml-6 mb-3">
                                <svg aria-hidden="true" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                    class="flex-shrink-0 h-4 w-4 text-white -ml-1 mr-2 self-center">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                                </svg>
                                Tambah Data
                            </button> -->
                        </a>
                    </div>
                </div>
                <section class="grid md:grid-cols-1">
                    <div class="flex justify-end items-center py-4 dark:bg-gray-800">
                        <label for="table-search" class="sr-only">Search</label>
                        <div class="relative">
                            <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                                <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path>
                                </svg>
                            </div>
                            <input type="text" id="table-search-users" class="block p-2 pl-10 w-80 text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search">
                        </div>
                    </div>
                    <div class="overflow-x-auto relative shadow-md sm:rounded-lg max-h-[40vh] overflow-y-auto">
                        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400 overflow-auto">
                            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                <tr>
                                    <th scope="col" class="py-3 px-6">
                                        ID
                                    </th>
                                    @foreach($counseling_fields as $csf)
                                    <th scope="col" class="py-3 px-6">
                                        {{ $csf }}
                                    </th>
                                    @endforeach
                                    <th scope="col" class="py-3 px-6">
                                        Aksi
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($professionalcounselings as $proc)
                                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                    <th scope="row" class="flex items-center py-4 px-6 text-gray-900 whitespace-nowrap dark:text-white">
                                        <div class="text-base font-semibold">{{ $proc->id}}</div>
                                    </th>
                                    @foreach($counseling_fields as $csf)
                                    <td class="py-4 px-6">
                                        {{ $proc->$csf}}
                                    </td>
                                    @endforeach
                                    <td class="py-4 px-6">
                                        <!-- Modal toggle -->
                                        <a href="/admin/layanan/procounseling-list/{{ $proc->id }}/edit" type="button" data-modal-toggle="" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit
                                        </a>
                                        <!-- <a href="" type="button"
                                            data-modal-toggle="editpcListModal{{ $proc->id }}"
                                            class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit
                                        </a> -->
                                        <form action="/admin/layanan/procounseling-list/{{ $proc->id }}" method="POST">
                                            @method('delete')
                                            @csrf
                                            <button onclick="return confirm('Apakah Anda yakin ingin menghapus data ini? Data yang sudah dihapus tidak bisa dikembalikan lagi');" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Delete</button>
                                        </form>
                                        <!-- <a href="#" type="button" data-modal-toggle="deletepcListModal{{ $proc->id }}"
                                            class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Delete
                                        </a> -->
                                    </td>
                                    <!-- Edit Pro Counseling List modal -->
                                    <div id="editpcListModal{{ $proc->id }}" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center p-4 w-full md:inset-0 h-modal md:h-full">
                                        <div class="bg-white relative w-full max-w-2xl h-full md:h-auto rounded-md">
                                            <!-- Modal content -->
                                            <form action="/admin/layanan/procounseling-list/{{ $proc->id }}" method="POST" id="editpcList" enctype="multipart/form-data" class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                                @method('put')
                                                @csrf
                                                <!-- Modal header -->
                                                <div class="flex justify-between items-start p-4 rounded-t border-b dark:border-gray-600">
                                                    <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                                                        Edit Data Konseling Tersedia
                                                    </h3>
                                                    <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="editpcListModal{{ $proc->id}}">
                                                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                            <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                                        </svg>
                                                    </button>
                                                </div>
                                                <!-- Modal body -->
                                                <div class="p-6 space-y-6">
                                                    <div class="grid grid-cols-6 gap-6">
                                                        @foreach($counseling_fields as $csf)
                                                        <div class="col-span-6 sm:col-span-3">
                                                            <label for="{{ $csf }}" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">{{ $csf }}</label>
                                                            <input type="text" name="{{ $csf }}" id="{{ $csf }}" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{ old( $csf, $proc->$csf) }}" required="">
                                                        </div>
                                                        @endforeach
                                                    </div>
                                                </div>
                                                <!-- Modal footer -->
                                                <div class="flex items-center p-6 space-x-2 rounded-b border-t border-gray-200 dark:border-gray-600">
                                                    <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Update</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <!-- Delete Pro Counseling List modal -->
                                    <div id="deletepcListModal{{ $proc->id }}" tabindex="-1" aria-hidden="true" class="w-full hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center p-4 md:inset-0 h-modal md:h-full">
                                        <div class="relative w-full max-w-2xl h-full md:h-auto bg-white rounded-md">
                                            <form action="/admin/layanan/procounseling-list/{{ $proc->id }}" method="post" enctype="multipart/form-data" class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                                @method('delete')
                                                @csrf
                                                <!-- Modal header -->
                                                <div class="flex justify-between items-start p-4 rounded-t border-b dark:border-gray-600">
                                                    <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                                                        Hapus Data Konseling
                                                    </h3>
                                                    <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="deletepcListModal{{ $proc->id }}">
                                                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                            <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                                        </svg>
                                                    </button>
                                                </div>
                                                <!-- Modal body -->
                                                <div class="p-6 space-y-6">
                                                    <p>Data yang sudah dihapus tidak bisa dikembalikan lagi</p>
                                                </div>
                                                <!-- Modal footer -->
                                                <div class="flex items-center p-6 space-x-2 rounded-b border-t border-gray-200 dark:border-gray-600">
                                                    <button type="submit" class="text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none font-medium rounded-lg text-sm px-5 py-2.5 text-center" style="background-color: red;">Hapus</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    @endforeach
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <!-- Create Pro Counseling List modal -->
                    <div id="createpcListModal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center p-4 w-full md:inset-0 h-modal md:h-full">
                        <div class="relative w-full max-w-2xl h-full md:h-auto">
                            <!-- Modal content -->
                            <form action="/admin/layanan/procounseling-list/tambah" method="POST" id="createpcList" enctype="multipart/form-data" class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                @csrf
                                <!-- Modal header -->
                                <div class="flex justify-between items-start p-4 rounded-t border-b dark:border-gray-600">
                                    <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                                        Tambah Data Konseling
                                    </h3>
                                    <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="createpcListModal">
                                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                        </svg>
                                    </button>
                                </div>
                                <!-- Modal body -->
                                <div class="p-6 space-y-6">
                                    <div class="grid grid-cols-6 gap-6">
                                        @foreach($counseling_fields as $csf)
                                        @if($csf == "counselor_id")
                                        <div class="col-span-6 sm:col-span-3">
                                            <label for="counselor_id" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Counselor_id</label>
                                            <select id="counselor_id" name="counselor_id" autocomplete="" required class="rounded-md">
                                                <option value="" disabled selected>Pilih konselor</option>
                                                @if($counselors != NULL)
                                                @foreach($counselors as $cs)
                                                <option value="{{ $cs->id }}">{{ $cs->nama }}
                                                </option>
                                                @endforeach
                                                @endif
                                            </select>
                                        </div>
                                        @else
                                        <div class="col-span-6 sm:col-span-3">
                                            <label for="{{ $csf }}" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">{{ $csf }}</label>
                                            <input type="text" name="{{ $csf }}" id="{{ $csf }}" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{ old( $csf ) }}" required="">
                                        </div>
                                        @endif
                                        @endforeach
                                    </div>
                                </div>
                                <!-- Modal footer -->
                                <div class="flex items-center p-6 space-x-2 rounded-b border-t border-gray-200 dark:border-gray-600">
                                    <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Update</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </section>
            </div>
            <!-- PROFESSIONAL COUNSELING REGISTRATION -->
            <div class="hidden p-4 bg-gray-50 rounded-lg dark:bg-gray-800 mb-[100px]" id="pcReg" role="tabpanel" aria-labelledby="pcReg-tab" style="margin-bottom: 100px;">
                <div class="flex flex-col space-y-6 md:space-y-0 md:flex-row justify-between">
                    <div class="mr-6">
                        <h1 class="text-4xl font-semibold mb-2">Data Pendaftaran</h1>
                        <h2 class="text-gray-600 ml-0.5">Konseling dengan psikolog professional</h2>
                    </div>
                </div>
                <section class="grid md:grid-cols-1">
                    <div class="flex justify-end items-center py-4 dark:bg-gray-800">
                        <label for="table-search" class="sr-only">Search</label>
                        <div class="relative">
                            <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                                <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path>
                                </svg>
                            </div>
                            <input type="text" id="table-search-users" class="block p-2 pl-10 w-80 text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search">
                        </div>
                    </div>
                    <div class="overflow-x-auto relative shadow-md sm:rounded-lg">
                        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                <tr>
                                    <th scope="col" class="py-3 px-6">
                                        ID
                                    </th>
                                    @foreach($regprocounseling_fields as $rprof)
                                    <th scope="col" class="py-3 px-6">
                                        {{ $rprof }}
                                    </th>
                                    @endforeach
                                    <th scope="col" class="py-3 px-6">
                                        Aksi
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($regprofessionalcounselings as $regproc)
                                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                    <th scope="row" class="flex items-center py-4 px-6 text-gray-900 whitespace-nowrap dark:text-white">
                                        <div class="text-base font-semibold">{{ $regproc->id}}</div>
                                    </th>
                                    @foreach($regprocounseling_fields as $rprof)
                                    <td class="py-4 px-6">
                                        {{ $regproc->$rprof }}
                                    </td>
                                    @endforeach
                                    <td class="py-4 px-6">
                                        <!-- Modal toggle -->
                                        <a href="/admin/layanan/professional-counseling/{{ $regproc->id }}/edit" type="button" data-modal-toggle="" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit
                                        </a>
                                        <!-- <a href="#" type="button" data-modal-toggle="editpcRegModal{{ $regproc->id }}"
                                            class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit
                                        </a> -->
                                        <form action="/admin/layanan/professional-counseling/{{ $regproc->id }}" method="POST">
                                            @method('delete')
                                            @csrf
                                            <button class="font-medium text-blue-600 dark:text-blue-500 hover:underline" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini? Data yang sudah dihapus tidak bisa dikembalikan lagi');">Delete</button>
                                        </form>
                                        <!-- <a href="#" type="button" data-modal-toggle="deletepcRegModal{{$regproc->id }}"
                                            class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Delete
                                        </a> -->
                                    </td>

                                    <!-- Edit professional counseling registration modal -->
                                    <div id="editpcRegModal{{ $regproc->id }}" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center p-4 w-full md:inset-0 h-modal md:h-full">
                                        <div class="relative w-full max-w-2xl h-full md:h-auto rounded overflow-y-auto bg-white">
                                            <!-- Modal content -->
                                            <form action="/admin/layanan/professional-counseling/{{ $regproc->id }}" method="POST" enctype="multipart/form-data" id="editpcReg{{ $regproc->id }}" class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                                <!-- Modal header -->
                                                @method('put')
                                                @csrf
                                                <div class="flex justify-between items-start p-4 rounded-t border-b dark:border-gray-600">
                                                    <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                                                        Konfirmasi Pembayaran
                                                    </h3>
                                                    <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="editpcRegModal{{ $regproc->id }}">
                                                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                            <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                                        </svg>
                                                    </button>
                                                </div>
                                                <!-- Modal body -->
                                                <div class="p-6 space-y-6">
                                                    <div class="grid grid-cols-6 gap-6">
                                                        <div class="col-span-6 sm:col-span-3">
                                                            <img src="{{ asset('https://ruangberproses-dev.site/storage/' . $regproc->bukti_transfer) }}" alt="Bukti Pembayaran">
                                                        </div>
                                                    </div>
                                                    <label for="status_pendaftaran" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Status
                                                        Pendaftaran</label>
                                                    <select id="status_pendaftaran" name="status_pendaftaran" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                                        <option selected="">Edit Status Pendaftaran</option>
                                                        <option value="berhasil">Berhasil</option>
                                                        <option value="gagal">Ditolak</option>
                                                    </select>
                                                    <div x-data x-init="flatpickr($refs.datetimewidget, {wrap: true, enableTime: true, dateFormat: 'M j, Y h:i K'});" x-ref="datetimewidget" class="flatpickr container mx-auto mt-3 sm:mt-0 form__field">
                                                        <label for="waktu_fix" class="form__field flex-grow block font-medium text-sm text-gray-700 mb-1">Waktu
                                                            Fix<span data-required="true" aria-hidden="true"></span></label>
                                                        <div class="flex align-middle align-content-center">
                                                            <input x-ref="datetime" type="text" id="waktu_fix" data-input required placeholder="Pilih waktu" name="waktu_fix" class="block w-full px-2 border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-l-md shadow-sm">

                                                            <a class="h-11 w-10 input-button cursor-pointer rounded-r-md bg-transparent border-gray-300 border-t border-b border-r" title="clear" data-clear>
                                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 mt-2 ml-1" viewBox="0 0 20 20" fill="#c53030">
                                                                    <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd" />
                                                                </svg>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Modal footer -->
                                                <div class="flex items-center p-6 space-x-2 rounded-b border-t border-gray-200 dark:border-gray-600">
                                                    <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Update
                                                    </button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <!-- Delete Pro Counseling List modal -->
                                    <div id="deletepcRegModal{{ $regproc->id }}" tabindex="-1" aria-hidden="true" class="w-full hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center p-4 md:inset-0 h-modal md:h-full">
                                        <div class="relative w-full max-w-2xl h-full md:h-auto bg-white rounded-md">
                                            <form action="/admin/layanan/professional-counseling/{{ $regproc->id }}" method="post" enctype="multipart/form-data" class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                                @method('delete')
                                                @csrf
                                                <!-- Modal header -->
                                                <div class="flex justify-between items-start p-4 rounded-t border-b dark:border-gray-600">
                                                    <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                                                        Hapus Data Konseling
                                                    </h3>
                                                    <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="deletepcRegModal{{ $regproc->id }}">
                                                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                            <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                                        </svg>
                                                    </button>
                                                </div>
                                                <!-- Modal body -->
                                                <div class="p-6 space-y-6">
                                                    <p>Data yang sudah dihapus tidak bisa dikembalikan lagi</p>
                                                </div>
                                                <!-- Modal footer -->
                                                <div class="flex items-center p-6 space-x-2 rounded-b border-t border-gray-200 dark:border-gray-600">
                                                    <button type="submit" class="text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Hapus</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </section>
            </div>
        </div>
    </div>
    <!-- PEER COUNSELING -->
    <div class="" id="peerCounseling" role="tabpanel" aria-labelledby="peerCounseling-tab">
        <div class="mb-4 border-b border-gray-200 dark:border-gray-700">
            <ul class="flex flex-wrap -mb-px text-sm font-medium text-center" id="pecSubTab" data-tabs-toggle="#pecSubTabContent" role="tablist">
                <!-- <li class="mr-2" role="presentation">
                    <button class="inline-block p-4 rounded-t-lg border-b-2 text-blue-600 hover:text-blue-600 dark:text-blue-500 dark:hover:text-blue-500 border-blue-600 dark:border-blue-500" id="pecList-tab" data-tabs-target="#pecList" type="button" role="tab" aria-controls="pecList" aria-selected="true">Daftar Konseling Tersedia</button>
                </li> -->
                <li class="mr-2" role="presentation">
                    <button class="inline-block p-4 rounded-t-lg border-b-2 border-transparent hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300 dark:border-transparent text-gray-500 dark:text-gray-400 border-gray-100 dark:border-gray-700" id="pecReg-tab" data-tabs-target="#pecReg" type="button" role="tab" aria-controls="pecReg" aria-selected="false">Data Pendaftaran</button>
                </li>
            </ul>
        </div>
        <div id="pecSubTabContent">

            <div class="hidden p-4 bg-gray-50 rounded-lg dark:bg-gray-800" id="pecReg" role="tabpanel" aria-labelledby="pecReg-tab">
                <div class="flex flex-col space-y-6 md:space-y-0 md:flex-row justify-between">
                    <div class="mr-6">
                        <h1 class="text-4xl font-semibold mb-2">Data Pendaftaran</h1>
                        <h2 class="text-gray-600 ml-0.5">Konseling dengan konselor sebaya</h2>
                    </div>
                    <div class="flex flex-wrap items-start justify-end -mb-3 text-sm">
                        <button class="inline-flex px-5 py-3 text-white bg-blue-600 hover:bg-purple-700 focus:bg-blue-700 rounded-md ml-6 mb-3">
                            <svg aria-hidden="true" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="flex-shrink-0 h-4 w-4 text-white -ml-1 mr-2 self-center">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                            </svg>
                            Tambah Data
                        </button>
                    </div>
                </div>
                <section class="grid md:grid-cols-1">
                    <div class="flex justify-end items-center py-4 dark:bg-gray-800">
                        <label for="table-search" class="sr-only">Search</label>
                        <div class="relative">
                            <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                                <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path>
                                </svg>
                            </div>
                            <input type="text" id="table-search-users" class="block p-2 pl-10 w-80 text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search">
                        </div>
                    </div>
                    <div class="overflow-x-auto relative shadow-md sm:rounded-lg">
                        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                <tr>
                                    <th scope="col" class="py-3 px-6">
                                        ID
                                    </th>
                                    @foreach($regpeercounseling_fields as $rpecf)
                                    <th scope="col" class="py-3 px-6">
                                        {{ $rpecf }}
                                    </th>
                                    @endforeach
                                    <th scope="col" class="py-3 px-6">
                                        Aksi
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @if($regpeercounselings != NULL)
                                @foreach($regpeercounselings as $regpec)
                                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                    <th scope="row" class="flex items-center py-4 px-6 text-gray-900 whitespace-nowrap dark:text-white">
                                        <div class="text-base font-semibold">{{ $regproc->id}}</div>
                                    </th>
                                    @foreach($regpeercounseling_fields as $rpecf)
                                    <td class="py-4 px-6">
                                        {{ $regpec->$rpecf }}
                                    </td>
                                    @endforeach
                                    <td class="py-4 px-6">
                                        <!-- Modal toggle -->
                                        <a href="#" type="button" data-modal-toggle="editpecRegModal{{ $regpec->id }}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit
                                        </a>
                                    </td>
                                </tr>
                                @endforeach
                                @endif
                            </tbody>
                        </table>
                        <!-- Edit user modal -->
                        <div id="editpecRegModal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center p-4 w-full md:inset-0 h-modal md:h-full">
                            <div class="relative w-full max-w-2xl h-full md:h-auto">
                                <!-- Modal content -->
                                <form action="#" class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                    <!-- Modal header -->
                                    <div class="flex justify-between items-start p-4 rounded-t border-b dark:border-gray-600">
                                        <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                                            Edit user
                                        </h3>
                                        <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="editpecRegModal">
                                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                            </svg>
                                        </button>
                                    </div>
                                    <!-- Modal body -->
                                    <div class="p-6 space-y-6">
                                        <div class="grid grid-cols-6 gap-6">
                                            <div class="col-span-6 sm:col-span-3">
                                                <label for="first-name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">First
                                                    Name</label>
                                                <input type="text" name="first-name" id="first-name" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Bonnie" required="">
                                            </div>
                                            <div class="col-span-6 sm:col-span-3">
                                                <label for="last-name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Last
                                                    Name</label>
                                                <input type="text" name="last-name" id="last-name" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Green" required="">
                                            </div>
                                            <div class="col-span-6 sm:col-span-3">
                                                <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
                                                <input type="email" name="email" id="email" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="example@company.com" required="">
                                            </div>
                                            <div class="col-span-6 sm:col-span-3">
                                                <label for="phone-number" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Phone
                                                    Number</label>
                                                <input type="number" name="phone-number" id="phone-number" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="e.g. +(12)3456 789" required="">
                                            </div>
                                            <div class="col-span-6 sm:col-span-3">
                                                <label for="department" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Department</label>
                                                <input type="text" name="department" id="department" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Development" required="">
                                            </div>
                                            <div class="col-span-6 sm:col-span-3">
                                                <label for="company" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Company</label>
                                                <input type="number" name="company" id="company" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="123456" required="">
                                            </div>
                                            <div class="col-span-6 sm:col-span-3">
                                                <label for="current-password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Current
                                                    Password</label>
                                                <input type="password" name="current-password" id="current-password" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="••••••••" required="">
                                            </div>
                                            <div class="col-span-6 sm:col-span-3">
                                                <label for="new-password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">New
                                                    Password</label>
                                                <input type="password" name="new-password" id="new-password" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="••••••••" required="">
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Modal footer -->
                                    <div class="flex items-center p-6 space-x-2 rounded-b border-t border-gray-200 dark:border-gray-600">
                                        <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Save
                                            all</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
    <!-- SUPPORT GROUP -->
    <div class="" id="supportGroup" role="tabpanel" aria-labelledby="supportGroup-tab">
        <div class="mb-4 border-b border-gray-200 dark:border-gray-700">
            <ul class="flex flex-wrap -mb-px text-sm font-medium text-center" id="sgSubTab" data-tabs-toggle="#sgSubTabContent" role="tablist">
                <li class="mr-2" role="presentation">
                    <button class="inline-block p-4 rounded-t-lg border-b-2 border-transparent hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300 dark:border-transparent text-gray-500 dark:text-gray-400 border-gray-100 dark:border-gray-700" id="sgReg-tab" data-tabs-target="#sgReg" type="button" role="tab" aria-controls="sgReg" aria-selected="false">Data Pendaftaran</button>
                </li>
            </ul>
        </div>
        <div id="sgSubTabContent">
            <div class="hidden p-4 bg-gray-50 rounded-lg dark:bg-gray-800" id="sgReg" role="tabpanel" aria-labelledby="sgReg-tab">
                <div class="flex flex-col space-y-6 md:space-y-0 md:flex-row justify-between">
                    <div class="mr-6">
                        <h1 class="text-4xl font-semibold mb-2">Data Pendaftaran</h1>
                        <h2 class="text-gray-600 ml-0.5">Kelompok dukungan</h2>
                    </div>
                    <div class="flex flex-wrap items-start justify-end -mb-3 text-sm">
                        <button class="inline-flex px-5 py-3 text-white bg-blue-600 hover:bg-purple-700 focus:bg-blue-700 rounded-md ml-6 mb-3">
                            <svg aria-hidden="true" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="flex-shrink-0 h-4 w-4 text-white -ml-1 mr-2 self-center">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                            </svg>
                            Tambah Data
                        </button>
                    </div>
                </div>
                <section class="grid md:grid-cols-1">
                    <div class="flex justify-end items-center py-4 dark:bg-gray-800">
                        <label for="table-search" class="sr-only">Search</label>
                        <div class="relative">
                            <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                                <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path>
                                </svg>
                            </div>
                            <input type="text" id="table-search-users" class="block p-2 pl-10 w-80 text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search">
                        </div>
                    </div>
                    <div class="overflow-x-auto relative shadow-md sm:rounded-lg">
                        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                <tr>
                                    <th scope="col" class="py-3 px-6">
                                        ID
                                    </th>
                                    @foreach($regsg_fields as $rsgf)
                                    <th scope="col" class="py-3 px-6">
                                        {{ $rsgf }}
                                    </th>
                                    @endforeach
                                    <th scope="col" class="py-3 px-6">
                                        Aksi
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @if($regsupportgroups != NULL)
                                @foreach($regsupportgroups as $regsg)
                                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                    <th scope="row" class="flex items-center py-4 px-6 text-gray-900 whitespace-nowrap dark:text-white">
                                        <div class="text-base font-semibold">{{ $regsg->id}}</div>
                                    </th>
                                    @foreach($regsg_fields as $rsgf)
                                    <td class="py-4 px-6">
                                        {{ $regsg->$rsgf }}
                                    </td>
                                    @endforeach
                                    <td class="py-4 px-6">
                                        <!-- Modal toggle -->
                                        <a href="#" type="button" data-modal-toggle=" " class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit
                                        </a>
                                    </td>
                                </tr>
                                @endforeach
                                @endif
                            </tbody>
                        </table>
                        <!-- Edit user modal -->
                        <div id="editsgRegModal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center p-4 w-full md:inset-0 h-modal md:h-full">
                            <div class="relative w-full max-w-2xl h-full md:h-auto">
                                <!-- Modal content -->
                                <form action="#" class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                    <!-- Modal header -->
                                    <div class="flex justify-between items-start p-4 rounded-t border-b dark:border-gray-600">
                                        <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                                            Edit user
                                        </h3>
                                        <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle=" ">
                                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                            </svg>
                                        </button>
                                    </div>
                                    <!-- Modal body -->
                                    <div class="p-6 space-y-6">
                                        <div class="grid grid-cols-6 gap-6">
                                            <div class="col-span-6 sm:col-span-3">
                                                <label for="first-name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">First
                                                    Name</label>
                                                <input type="text" name="first-name" id="first-name" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Bonnie" required="">
                                            </div>
                                            <div class="col-span-6 sm:col-span-3">
                                                <label for="last-name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Last
                                                    Name</label>
                                                <input type="text" name="last-name" id="last-name" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Green" required="">
                                            </div>
                                            <div class="col-span-6 sm:col-span-3">
                                                <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
                                                <input type="email" name="email" id="email" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="example@company.com" required="">
                                            </div>
                                            <div class="col-span-6 sm:col-span-3">
                                                <label for="phone-number" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Phone
                                                    Number</label>
                                                <input type="number" name="phone-number" id="phone-number" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="e.g. +(12)3456 789" required="">
                                            </div>
                                            <div class="col-span-6 sm:col-span-3">
                                                <label for="department" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Department</label>
                                                <input type="text" name="department" id="department" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Development" required="">
                                            </div>
                                            <div class="col-span-6 sm:col-span-3">
                                                <label for="company" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Company</label>
                                                <input type="number" name="company" id="company" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="123456" required="">
                                            </div>
                                            <div class="col-span-6 sm:col-span-3">
                                                <label for="current-password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Current
                                                    Password</label>
                                                <input type="password" name="current-password" id="current-password" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="••••••••" required="">
                                            </div>
                                            <div class="col-span-6 sm:col-span-3">
                                                <label for="new-password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">New
                                                    Password</label>
                                                <input type="password" name="new-password" id="new-password" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="••••••••" required="">
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Modal footer -->
                                    <div class="flex items-center p-6 space-x-2 rounded-b border-t border-gray-200 dark:border-gray-600">
                                        <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Save
                                            all</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
    <div class="" id="psytalk" role="tabpanel" aria-labelledby="psytalk-tab">
        <div class="mb-4 border-b border-gray-200 dark:border-gray-700">
            <ul class="flex flex-wrap -mb-px text-sm font-medium text-center" id="psySubTab" data-tabs-toggle="#psySubTabContent" role="tablist">
                <li class="mr-2" role="presentation">
                    <button class="inline-block p-4 rounded-t-lg border-b-2 text-blue-600 hover:text-blue-600 dark:text-blue-500 dark:hover:text-blue-500 border-blue-600 dark:border-blue-500" id="psyList-tab" data-tabs-target="#psyList" type="button" role="tab" aria-controls="pcList" aria-selected="true">Daftar Psytalk Tersedia</button>
                </li>
                <li class="mr-2" role="presentation">
                    <button class="inline-block p-4 rounded-t-lg border-b-2 border-transparent hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300 dark:border-transparent text-gray-500 dark:text-gray-400 border-gray-100 dark:border-gray-700" id="psyReg-tab" data-tabs-target="#psyReg" type="button" role="tab" aria-controls="psyReg" aria-selected="false">Data Pendaftaran</button>
                </li>
            </ul>
        </div>
        <div id="psySubTabContent">
            <div class="p-4 rounded-lg dark:bg-gray-800" id="psyList" role="tabpanel" aria-labelledby="psyList-tab">
                <div class="flex flex-col space-y-6 md:space-y-0 md:flex-row justify-between">
                    <div class="mr-6">
                        <h1 class="text-4xl font-semibold mb-2">PSYTALK</h1>
                        <h2 class="text-gray-600 ml-0.5">Daftar PSYTALK Tersedia</h2>
                    </div>
                    <div class="flex flex-wrap items-start justify-end -mb-3 text-sm">
                        <a href="/admin/program/psytalk-list/tambah">
                            <button data-modal-toggle="createpsytalkListModal" class="inline-flex px-5 py-3 text-white bg-blue-600 hover:bg-purple-700 focus:bg-blue-700 rounded-md ml-6 mb-3">
                                <svg aria-hidden="true" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="flex-shrink-0 h-4 w-4 text-white -ml-1 mr-2 self-center">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                                </svg>
                                Tambah Data
                            </button>
                        </a>
                    </div>
                </div>
                <section class="grid md:grid-cols-1">
                    <div class="flex justify-end items-center py-4 dark:bg-gray-800">
                        <label for="table-search" class="sr-only">Search</label>
                        <div class="relative">
                            <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                                <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path>
                                </svg>
                            </div>
                            <input type="text" id="table-search-users" class="block p-2 pl-10 w-80 text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search">
                        </div>
                    </div>
                    <div class="overflow-x-auto relative shadow-md sm:rounded-lg max-h-[40vh] overflow-y-auto">
                        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                <tr>
                                    <th scope="col" class="py-3 px-6">
                                        ID
                                    </th>
                                    @foreach($program_fields as $psyf)
                                    <th scope="col" class="py-3 px-6">
                                        {{ $psyf }}
                                    </th>
                                    @endforeach
                                    <th scope="col" class="py-3 px-6">
                                        Aksi
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($psytalks as $psytalk)
                                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                    <th scope="row" class="flex items-center py-4 px-6 text-gray-900 whitespace-nowrap dark:text-white">
                                        <div class="text-base font-semibold">{{ $psytalk->id}}</div>
                                    </th>
                                    @foreach($program_fields as $psyf)
                                    <td class="py-4 px-6">
                                        {{ $psytalk->$psyf }}
                                    </td>
                                    @endforeach
                                    <td class="py-4 px-6">
                                        <!-- Modal toggle -->
                                        <a href="/admin/program/psytalk-list/{{ $psytalk->id }}/edit" type="button" data-modal-toggle="editpsyListModal{{ $psytalk->id }}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit
                                        </a>
                                        <!-- <a href="#" type="button" data-modal-toggle="editpsyListModal{{ $psytalk->id }}"
                                            class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit
                                        </a> -->
                                        <form action="/admin/program/psytalk-list/{{ $psytalk->id }}" method="POST">
                                            @method('delete')
                                            @csrf
                                            <button onclick="return confirm('Apakah Anda yakin ingin menghapus data ini? Data yang sudah dihapus tidak bisa dikembalikan lagi');" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Delete</button>
                                        </form>
                                        <!-- <a href="#" type="button"
                                            data-modal-toggle="deletepsyListModal{{ $psytalk->id }}"
                                            class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Delete
                                        </a> -->
                                    </td>
                                    <!-- Edit Psytalk List modal -->
                                    <div id="editpsyListModal{{ $psytalk->id }}" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center p-4 w-full md:inset-0 h-modal md:h-full">
                                        <div class="relative w-full max-w-2xl h-full md:h-auto">
                                            <!-- Modal content -->
                                            <form action="/admin/layanan/psytalk-list/{{ $psytalk->id }}" method="POST" enctype="multipart/form-data" class="relative bg-white rounded-lg shadow dark:bg-gray-700" id="editpsyList">
                                                @method('put')
                                                @csrf
                                                <!-- Modal header -->
                                                <div class="flex justify-between items-start p-4 rounded-t border-b dark:border-gray-600">
                                                    <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                                                        Edit Data Konseling Tersedia
                                                    </h3>
                                                    <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="editpsyListModal{{ $psytalk->id }}">
                                                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                            <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                                        </svg>
                                                    </button>
                                                </div>
                                                <!-- Modal body -->
                                                <div class="p-6 space-y-6">
                                                    <div class="grid grid-cols-6 gap-6">
                                                        @foreach($program_fields as $psyf)
                                                        <div class="col-span-6 sm:col-span-3">
                                                            <label for="{{ $psyf }}" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama
                                                                Konselor</label>
                                                            <input type="text" name="{{ $psyf }}" id="{{ $psyf }}" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{ old($psyf, $psytalk->$psyf) }}" required="">
                                                        </div>
                                                        @endforeach
                                                    </div>
                                                </div>
                                                <!-- Modal footer -->
                                                <div class="flex items-center p-6 space-x-2 rounded-b border-t border-gray-200 dark:border-gray-600">
                                                    <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Update</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <!-- Delete Psytalk List modal -->
                                    <div id="deletepsyListModal{{ $psytalk->id }}" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center p-4 w-full md:inset-0 h-modal md:h-full">
                                        <div class="relative w-full max-w-2xl h-full md:h-auto">
                                            <form action="/admin/layanan/psytalk-list/{{ $psytalk->id }}" method="post" enctype="multipart/form-data" class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                                @method('delete')
                                                @csrf
                                                <!-- Modal header -->
                                                <div class="flex justify-between items-start p-4 rounded-t border-b dark:border-gray-600">
                                                    <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                                                        Hapus Data Psytalk
                                                    </h3>
                                                    <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="deletepsyListModal{{ $psytalk->id }}">
                                                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                            <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                                        </svg>
                                                    </button>
                                                </div>
                                                <!-- Modal body -->
                                                <div class="p-6 space-y-6">
                                                    <p>Data yang sudah dihapus tidak bisa dikembalikan lagi</p>
                                                </div>
                                                <!-- Modal footer -->
                                                <div class="flex items-center p-6 space-x-2 rounded-b border-t border-gray-200 dark:border-gray-600">
                                                    <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Hapus</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <!-- Create Psytalk List modal -->
                    <div id="createpsytalkListModal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center p-4 w-full md:inset-0 h-modal md:h-full">
                        <div class="relative w-full max-w-2xl h-full md:h-auto">
                            <!-- Modal content -->
                            <form action="/admin/program/psytalk-list/tambah" method="POST" id="createpsytalkList" enctype="multipart/form-data" class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                @csrf
                                <!-- Modal header -->
                                <div class="flex justify-between items-start p-4 rounded-t border-b dark:border-gray-600">
                                    <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                                        Tambah Data Psytalk
                                    </h3>
                                    <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="createpsytalkListModal">
                                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                        </svg>
                                    </button>
                                </div>
                                <!-- Modal body -->
                                <div class="p-6 space-y-6">
                                    <div class="grid grid-cols-6 gap-6">
                                        @foreach($program_fields as $prof)
                                        <div class="col-span-6 sm:col-span-3">
                                            <label for="{{ $prof }}" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">{{ $prof }}</label>
                                            <input type="text" name="{{ $prof }}" id="{{ $prof }}" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{ old( $prof ) }}" required="">
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                                <!-- Modal footer -->
                                <div class="flex items-center p-6 space-x-2 rounded-b border-t border-gray-200 dark:border-gray-600">
                                    <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Update</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </section>
            </div>
            <div class="hidden p-4 bg-gray-50 rounded-lg dark:bg-gray-800" id="psyReg" role="tabpanel" aria-labelledby="psyReg-tab">
                <div class="flex flex-col space-y-6 md:space-y-0 md:flex-row justify-between">
                    <div class="mr-6">
                        <h1 class="text-4xl font-semibold mb-2">Data Pendaftaran</h1>
                        <h2 class="text-gray-600 ml-0.5">Webinar Psikologi</h2>
                    </div>
                    <div class="flex flex-wrap items-start justify-end -mb-3 text-sm">
                        <a href="/program/psytalk">
                            <button class="inline-flex px-5 py-3 text-white bg-blue-600 hover:bg-purple-700 focus:bg-blue-700 rounded-md ml-6 mb-3">
                                <svg aria-hidden="true" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="flex-shrink-0 h-4 w-4 text-white -ml-1 mr-2 self-center">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                                </svg>
                                Tambah Data
                            </button>
                        </a>
                    </div>
                </div>
                <section class="grid md:grid-cols-1">
                    <div class="flex justify-end items-center py-4 dark:bg-gray-800">
                        <label for="table-search" class="sr-only">Search</label>
                        <div class="relative">
                            <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                                <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path>
                                </svg>
                            </div>
                            <input type="text" id="table-search-users" class="block p-2 pl-10 w-80 text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search">
                        </div>
                    </div>
                    <div class="overflow-x-auto relative shadow-md sm:rounded-lg max-h-[40vh] overflow-y-auto">
                        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                <tr>
                                    <th scope="col" class="py-3 px-6">
                                        ID
                                    </th>
                                    @foreach($regpsytalk_fields as $rpsyf)
                                    <th scope="col" class="py-3 px-6">
                                        {{ $rpsyf }}
                                    </th>
                                    @endforeach
                                    <th scope="col" class="py-3 px-6">
                                        Aksi
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="">
                                @foreach($regpsytalks as $regpsytalk)
                                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                    <th scope="row" class="flex items-center py-4 px-6 text-gray-900 whitespace-nowrap dark:text-white">
                                        <div class="text-base font-semibold">{{ $regpsytalk->id}}</div>
                                    </th>
                                    @foreach($regpsytalk_fields as $psyf)
                                    <td class="py-4 px-6">
                                        {{ $regpsytalk->$psyf }}
                                    </td>
                                    @endforeach
                                    <td class="py-4 px-6">
                                        <!-- Modal toggle -->
                                        <!-- <a href="#" type="button"
                                            data-modal-toggle="editpsyRegModal{{ $regpsytalk->id }}"
                                            class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit
                                        </a> -->
                                        <a href="/admin/program/psytalk/{{ $regpsytalk->id }}/edit" type="button" data-modal-toggle="editpsyRegModal{{ $regpsytalk->id }}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit
                                        </a>
                                        <form action="/admin/program/psytalk/{{ $regpsytalk->id }}" method="POST">
                                            @method('delete')
                                            @csrf
                                            <button class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Delete</button>
                                        </form>
                                    </td>
                                    <!-- Edit user modal -->
                                    <div id="editpsyRegModal{{ $regpsytalk->id }}" tabindex="-1" aria-hidden="true" role="dialog" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center p-4 w-full md:inset-0 h-modal md:h-full">
                                        <div class="relative w-full max-w-2xl h-full md:h-auto">
                                            <!-- Modal content -->
                                            <form action="#" class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                                <!-- Modal header -->
                                                <div class="flex justify-between items-start p-4 rounded-t border-b dark:border-gray-600">
                                                    <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                                                        Edit user
                                                    </h3>
                                                    <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="editpsyRegModal{{ $regpsytalk->id }}">
                                                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                            <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                                        </svg>
                                                    </button>
                                                </div>
                                                <!-- Modal body -->
                                                <div class="p-6 space-y-6">
                                                    <div class="grid grid-cols-6 gap-6">
                                                        <div class="col-span-6 sm:col-span-3">
                                                            <label for="first-name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">First
                                                                Name</label>
                                                            <input type="text" name="first-name" id="first-name" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Bonnie" required="">
                                                        </div>
                                                        <div class="col-span-6 sm:col-span-3">
                                                            <label for="last-name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Last
                                                                Name</label>
                                                            <input type="text" name="last-name" id="last-name" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Green" required="">
                                                        </div>
                                                        <div class="col-span-6 sm:col-span-3">
                                                            <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
                                                            <input type="email" name="email" id="email" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="example@company.com" required="">
                                                        </div>
                                                        <div class="col-span-6 sm:col-span-3">
                                                            <label for="phone-number" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Phone
                                                                Number</label>
                                                            <input type="number" name="phone-number" id="phone-number" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="e.g. +(12)3456 789" required="">
                                                        </div>
                                                        <div class="col-span-6 sm:col-span-3">
                                                            <label for="department" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Department</label>
                                                            <input type="text" name="department" id="department" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Development" required="">
                                                        </div>
                                                        <div class="col-span-6 sm:col-span-3">
                                                            <label for="company" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Company</label>
                                                            <input type="number" name="company" id="company" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="123456" required="">
                                                        </div>
                                                        <div class="col-span-6 sm:col-span-3">
                                                            <label for="current-password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Current
                                                                Password</label>
                                                            <input type="password" name="current-password" id="current-password" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="••••••••" required="">
                                                        </div>
                                                        <div class="col-span-6 sm:col-span-3">
                                                            <label for="new-password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">New
                                                                Password</label>
                                                            <input type="password" name="new-password" id="new-password" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="••••••••" required="">
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Modal footer -->
                                                <div class="flex items-center p-6 space-x-2 rounded-b border-t border-gray-200 dark:border-gray-600">
                                                    <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Save
                                                        all</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </section>
            </div>
        </div>
    </div>
    <!-- KELAS BERPROSES -->
    <div class="" id="kb" role="tabpanel" aria-labelledby="kb-tab">
        <div class="mb-4 border-b border-gray-200 dark:border-gray-700">
            <ul class="flex flex-wrap -mb-px text-sm font-medium text-center" id="kbSubTab" data-tabs-toggle="#kbSubTabContent" role="tablist">
                <li class="mr-2" role="presentation">
                    <button class="inline-block p-4 rounded-t-lg border-b-2 text-blue-600 hover:text-blue-600 dark:text-blue-500 dark:hover:text-blue-500 border-blue-600 dark:border-blue-500" id="kbList-tab" data-tabs-target="#kbList" type="button" role="tab" aria-controls="kbList" aria-selected="true">Daftar Kelas Berproses Tersedia</button>
                </li>
                <li class="mr-2" role="presentation">
                    <button class="inline-block p-4 rounded-t-lg border-b-2 border-transparent hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300 dark:border-transparent text-gray-500 dark:text-gray-400 border-gray-100 dark:border-gray-700" id="kbReg-tab" data-tabs-target="#kbReg" type="button" role="tab" aria-controls="kbReg" aria-selected="false">Data Pendaftaran</button>
                </li>
            </ul>
        </div>
        <div id="kbSubTabContent">
            <div class="p-4 rounded-lg dark:bg-gray-800" id="kbList" role="tabpanel" aria-labelledby="kbList-tab">
                <div class="flex flex-col space-y-6 md:space-y-0 md:flex-row justify-between">
                    <div class="mr-6">
                        <h1 class="text-4xl font-semibold mb-2">Kelas Berproses</h1>
                        <h2 class="text-gray-600 ml-0.5">Pelatihan psikologi</h2>
                    </div>
                    <div class="flex flex-wrap items-start justify-end -mb-3 text-sm">
                        <button class="inline-flex px-5 py-3 text-white bg-blue-600 hover:bg-purple-700 focus:bg-blue-700 rounded-md ml-6 mb-3">
                            <svg aria-hidden="true" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="flex-shrink-0 h-4 w-4 text-white -ml-1 mr-2 self-center">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                            </svg>
                            Tambah Data
                        </button>
                    </div>
                </div>
                <section class="grid md:grid-cols-1">
                    <div class="flex justify-end items-center py-4 dark:bg-gray-800">
                        <label for="table-search" class="sr-only">Search</label>
                        <div class="relative">
                            <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                                <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path>
                                </svg>
                            </div>
                            <input type="text" id="table-search-users" class="block p-2 pl-10 w-80 text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search">
                        </div>
                    </div>
                    <div class="overflow-x-auto relative shadow-md sm:rounded-lg">
                        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                <tr>
                                    <th scope="col" class="py-3 px-6">
                                        ID
                                    </th>
                                    @foreach($program_fields as $kbf)
                                    <th scope="col" class="py-3 px-6">
                                        {{ $kbf }}
                                    </th>
                                    @endforeach
                                    <th scope="col" class="py-3 px-6">
                                        Aksi
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @if($kbs == NULL)
                                @else
                                @foreach($kbs as $kb)
                                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                    <th scope="row" class="flex items-center py-4 px-6 text-gray-900 whitespace-nowrap dark:text-white">
                                        <div class="text-base font-semibold">{{ $kb->id}}</div>
                                    </th>
                                    @foreach($program_fields as $kbf)
                                    <td class="py-4 px-6">
                                        {{ $kb->$kbf }}
                                    </td>
                                    @endforeach
                                    <td class="py-4 px-6">
                                        <!-- Modal toggle -->
                                        <a href="#" type="button" data-modal-toggle="editkbListModal" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit
                                        </a>
                                        <a href="#" type="button" data-modal-toggle="deletekbListModal" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Delete
                                        </a>
                                    </td>
                                </tr>
                                @endforeach
                                @endif
                            </tbody>
                        </table>
                        <!-- Edit Pro Counseling List modal -->
                        <div id="editkbListModal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center p-4 w-full md:inset-0 h-modal md:h-full">
                            <div class="relative w-full max-w-2xl h-full md:h-auto">
                                <!-- Modal content -->
                                <form action="/admin/layanan/procounseling-list/" method="POST" enctype="multipart/form-data" class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                    @method('put')
                                    @csrf
                                    <!-- Modal header -->
                                    <div class="flex justify-between items-start p-4 rounded-t border-b dark:border-gray-600">
                                        <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                                            Edit Data Konseling Tersedia
                                        </h3>
                                        <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="editkbListModal">
                                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                            </svg>
                                        </button>
                                    </div>
                                    <!-- Modal body -->
                                    <div class="p-6 space-y-6">
                                        <div class="grid grid-cols-6 gap-6">
                                            <div class="col-span-6 sm:col-span-3">
                                                <label for="nama_konselor" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama
                                                    Konselor</label>
                                                <input type="text" name="nama_konselor" id="nama_konselor" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="" required="">
                                            </div>
                                            <div class="col-span-6 sm:col-span-3">
                                                <label for="waktu" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                                    Waktu</label>
                                                <input type="text" name="waktu" id="waktu" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="" required="">
                                            </div>
                                            <div class="col-span-6 sm:col-span-3">
                                                <label for="biaya" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
                                                <input type="text" name="biaya" id="biaya" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="" required="">
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Modal footer -->
                                    <div class="flex items-center p-6 space-x-2 rounded-b border-t border-gray-200 dark:border-gray-600">
                                        <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Update</button>
                                    </div>

                                </form>

                            </div>
                        </div>
                        <!-- Delete Kelas Berproses List modal -->
                        <div id="deletekbListModal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center p-4 w-full md:inset-0 h-modal md:h-full">
                            <div class="relative w-full max-w-2xl h-full md:h-auto">
                                <form action="/admin/layanan/procounseling-list/" method="post" enctype="multipart/form-data" class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                    @method('delete')
                                    @csrf
                                    <!-- Modal header -->
                                    <div class="flex justify-between items-start p-4 rounded-t border-b dark:border-gray-600">
                                        <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                                            Hapus Data Kelas Berproses
                                        </h3>
                                        <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="deletekbListModal">
                                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                            </svg>
                                        </button>
                                    </div>
                                    <!-- Modal body -->
                                    <div class="p-6 space-y-6">
                                        <p>Data yang sudah dihapus tidak bisa dikembalikan lagi</p>
                                    </div>
                                    <!-- Modal footer -->
                                    <div class="flex items-center p-6 space-x-2 rounded-b border-t border-gray-200 dark:border-gray-600">
                                        <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Hapus</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <div class="hidden p-4 bg-gray-50 rounded-lg dark:bg-gray-800" id="kbReg" role="tabpanel" aria-labelledby="kbReg-tab">
                <div class="flex flex-col space-y-6 md:space-y-0 md:flex-row justify-between">
                    <div class="mr-6">
                        <h1 class="text-4xl font-semibold mb-2">Data Pendaftaran</h1>
                        <h2 class="text-gray-600 ml-0.5">Kelas Berproses</h2>
                    </div>
                    <div class="flex flex-wrap items-start justify-end -mb-3 text-sm">
                        <button class="inline-flex px-5 py-3 text-white bg-blue-600 hover:bg-purple-700 focus:bg-blue-700 rounded-md ml-6 mb-3">
                            <svg aria-hidden="true" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="flex-shrink-0 h-4 w-4 text-white -ml-1 mr-2 self-center">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                            </svg>
                            Tambah Data
                        </button>
                    </div>
                </div>
                <section class="grid md:grid-cols-1">
                    <div class="flex justify-end items-center py-4 dark:bg-gray-800">
                        <label for="table-search" class="sr-only">Search</label>
                        <div class="relative">
                            <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                                <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path>
                                </svg>
                            </div>
                            <input type="text" id="table-search-users" class="block p-2 pl-10 w-80 text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search">
                        </div>
                    </div>
                    <div class="overflow-x-auto relative shadow-md sm:rounded-lg">
                        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                <tr>
                                    <th scope="col" class="py-3 px-6">
                                        ID
                                    </th>
                                    @foreach($regkb_fields as $rkbf)
                                    <th scope="col" class="py-3 px-6">
                                        {{ $rkbf }}
                                    </th>
                                    @endforeach
                                    <th scope="col" class="py-3 px-6">
                                        Aksi
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @if($regkbs != NULL)
                                @foreach($regkbs as $regkb)
                                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                    <th scope="row" class="flex items-center py-4 px-6 text-gray-900 whitespace-nowrap dark:text-white">
                                        <div class="text-base font-semibold">{{ $regkb->id}}</div>
                                    </th>
                                    @foreach($regkb_fields as $rkbf)
                                    <td class="py-4 px-6">
                                        {{ $regkb->$rkbf }}
                                    </td>
                                    @endforeach
                                    <td class="py-4 px-6">
                                        <!-- Modal toggle -->
                                        <a href="#" type="button" data-modal-toggle=" " class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit
                                        </a>
                                    </td>
                                </tr>
                                @endforeach
                                @endif
                            </tbody>
                        </table>
                        <!-- Edit user modal -->
                        <div id="editkbRegModal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center p-4 w-full md:inset-0 h-modal md:h-full">
                            <div class="relative w-full max-w-2xl h-full md:h-auto">
                                <!-- Modal content -->
                                <form action="#" class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                    <!-- Modal header -->
                                    <div class="flex justify-between items-start p-4 rounded-t border-b dark:border-gray-600">
                                        <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                                            Edit user
                                        </h3>
                                        <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle=" ">
                                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                            </svg>
                                        </button>
                                    </div>
                                    <!-- Modal body -->
                                    <div class="p-6 space-y-6">
                                        <div class="grid grid-cols-6 gap-6">
                                            <div class="col-span-6 sm:col-span-3">
                                                <label for="first-name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">First
                                                    Name</label>
                                                <input type="text" name="first-name" id="first-name" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Bonnie" required="">
                                            </div>
                                            <div class="col-span-6 sm:col-span-3">
                                                <label for="last-name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Last
                                                    Name</label>
                                                <input type="text" name="last-name" id="last-name" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Green" required="">
                                            </div>
                                            <div class="col-span-6 sm:col-span-3">
                                                <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
                                                <input type="email" name="email" id="email" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="example@company.com" required="">
                                            </div>
                                            <div class="col-span-6 sm:col-span-3">
                                                <label for="phone-number" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Phone
                                                    Number</label>
                                                <input type="number" name="phone-number" id="phone-number" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="e.g. +(12)3456 789" required="">
                                            </div>
                                            <div class="col-span-6 sm:col-span-3">
                                                <label for="department" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Department</label>
                                                <input type="text" name="department" id="department" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Development" required="">
                                            </div>
                                            <div class="col-span-6 sm:col-span-3">
                                                <label for="company" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Company</label>
                                                <input type="number" name="company" id="company" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="123456" required="">
                                            </div>
                                            <div class="col-span-6 sm:col-span-3">
                                                <label for="current-password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Current
                                                    Password</label>
                                                <input type="password" name="current-password" id="current-password" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="••••••••" required="">
                                            </div>
                                            <div class="col-span-6 sm:col-span-3">
                                                <label for="new-password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">New
                                                    Password</label>
                                                <input type="password" name="new-password" id="new-password" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="••••••••" required="">
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Modal footer -->
                                    <div class="flex items-center p-6 space-x-2 rounded-b border-t border-gray-200 dark:border-gray-600">
                                        <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Save
                                            all</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
    <div class="" id="artikel" role="tabpanel" aria-labelledby="artikel-tab">
        <div class="flex flex-col space-y-6 md:space-y-0 md:flex-row justify-between">
            <div class="mr-6">
                <h1 class="text-4xl font-semibold mb-2">Artikel</h1>
                <h2 class="text-gray-600 ml-0.5">Data Artikel</h2>
            </div>
            <div class="flex flex-wrap items-start justify-end -mb-3 text-sm">
                <a href="/admin/artikel-berproses/tambah">
                    <button data-modal-toggle="createArtikelModal" class="inline-flex px-5 py-3 text-white bg-blue-600 hover:bg-purple-700 focus:bg-blue-700 rounded-md ml-6 mb-3">
                        <svg aria-hidden="true" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="flex-shrink-0 h-4 w-4 text-white -ml-1 mr-2 self-center">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                        </svg>
                        Tambah Data
                    </button>
                </a>
            </div>
        </div>
        <!-- Create Artikel  modal -->
        <div id="createArtikelModal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center p-4 w-full md:inset-0 h-modal md:h-full">
            <div class="relative w-full max-w-2xl h-full md:h-auto">
                <!-- Modal content -->
                <form action="/admin/layanan/procounseling-list/tambah" method="POST" id="createpcList" enctype="multipart/form-data" id="createartikel" class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                    @csrf
                    <!-- Modal header -->
                    <div class="flex justify-between items-start p-4 rounded-t border-b dark:border-gray-600">
                        <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                            Tambah Data Konseling
                        </h3>
                        <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="createpcListModal">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                            </svg>
                        </button>
                    </div>
                    <!-- Modal body -->
                    <div class="p-6 space-y-6">
                        <div class="grid grid-cols-6 gap-6">
                            @foreach($counseling_fields as $csf)
                            @if($csf == "counselor_id")
                            <div class="col-span-6 sm:col-span-3">
                                <label for="counselor_id" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Counselor_id</label>
                                <select id="counselor_id" name="counselor_id" autocomplete="" required class="rounded-md">
                                    <option value="" disabled selected>Pilih konselor</option>
                                    @if($counselors != NULL)
                                    @foreach($counselors as $cs)
                                    <option value="{{ $cs->id }}">{{ $cs->nama }}
                                    </option>
                                    @endforeach
                                    @endif
                                </select>
                            </div>
                            @else
                            <div class="col-span-6 sm:col-span-3">
                                <label for="{{ $csf }}" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">{{ $csf }}</label>
                                <input type="text" name="{{ $csf }}" id="{{ $csf }}" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{ old( $csf ) }}" required="">
                            </div>
                            @endif
                            @endforeach
                        </div>
                    </div>
                    <!-- Modal footer -->
                    <div class="flex items-center p-6 space-x-2 rounded-b border-t border-gray-200 dark:border-gray-600">
                        <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Update</button>
                    </div>
                </form>
            </div>
        </div>
        <section class="grid md:grid-cols-1">
            <div class="flex justify-end items-center py-4 dark:bg-gray-800">
                <label for="table-search" class="sr-only">Search</label>
                <div class="relative">
                    <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                        <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path>
                        </svg>
                    </div>
                    <input type="text" id="table-search-users" class="block p-2 pl-10 w-80 text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search">
                </div>
            </div>
            <div class="overflow-x-auto relative shadow-md sm:rounded-lg">
                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="py-3 px-6">
                                ID
                            </th>
                            <th scope="col" class="py-3 px-6">
                                User ID
                            </th>
                            <th scope="col" class="py-3 px-6">
                                Judul
                            </th>
                            <th scope="col" class="py-3 px-6">
                                Isi
                            </th>
                            <th scope="col" class="py-3 px-6">
                                Poster
                            </th>
                            <th scope="col" class="py-3 px-6">
                                Aksi
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @if($artikels == NULL)
                        @else
                        @foreach($artikels as $artikel)
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                            <th scope="row" class="flex items-center py-4 px-6 text-gray-900 whitespace-nowrap dark:text-white">
                                <div class="text-base font-semibold">{{ $artikel->id}}</div>
                            </th>
                            <td class="py-4 px-6">
                                {{ $artikel->user_id }}
                            </td>
                            <td class="py-4 px-6">
                                {{ $artikel->judul }}
                            </td>
                            <td class="py-4 px-6">
                                {{ $artikel->isi }}
                            </td>
                            <td class="py-4 px-6">
                                {{ $artikel->poster }}
                            </td>
                            <td class="py-4 px-6">
                                <!-- Modal toggle -->
                                <a href="/admin/artikel-berproses/{{ $artikel->id }}/edit" type="button" data-modal-toggle="editartikelModal" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit
                                </a>
                                <form action="/admin/artikel-berproses/{{ $artikel->id }}" method="POST">
                                    @method('delete')
                                    @csrf
                                    <button class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Delete</button>
                                </form>
                                <!-- <a href="#" type="button" data-modal-toggle="deleteartikelModal{{ $artikel->id }}"
                                    class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Delete
                                </a> -->
                            </td>
                        </tr>
                        @endforeach
                        @endif
                    </tbody>
                </table>
                <!-- Edit Pro Counseling List modal -->
                <div id="editartikelModal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center p-4 w-full md:inset-0 h-modal md:h-full">
                    <div class="relative w-full max-w-2xl h-full md:h-auto">
                        <!-- Modal content -->
                        <form action="" method="POST" enctype="multipart/form-data" class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                            @method('put')
                            @csrf
                            <!-- Modal header -->
                            <div class="flex justify-between items-start p-4 rounded-t border-b dark:border-gray-600">
                                <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                                    Edit Data Screening
                                </h3>
                                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="editkbListModal">
                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                    </svg>
                                </button>
                            </div>
                            <!-- Modal body -->
                            <div class="p-6 space-y-6">
                                <div class="grid grid-cols-6 gap-6">
                                    <div class="col-span-6 sm:col-span-3">
                                        <label for="judul" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Judul</label>
                                        <input type="text" name="judul" id="judul" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="" required="">
                                    </div>
                                    <div class="col-span-6 sm:col-span-3">
                                        <label for="isi" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Isi</label>
                                        <input type="text" name="isi" id="isi" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="" required="">
                                    </div>
                                    <div class="col-span-6 sm:col-span-3">
                                        <label for="poster" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Poster</label>
                                        <input type="file" name="poster" id="poster" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="" required="">
                                    </div>
                                </div>
                            </div>
                            <!-- Modal footer -->
                            <div class="flex items-center p-6 space-x-2 rounded-b border-t border-gray-200 dark:border-gray-600">
                                <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Update</button>
                            </div>

                        </form>

                    </div>
                </div>
                <!-- Delete Pro Counseling List modal -->
                <div id="deleteartikelModal1" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center p-4 w-full md:inset-0 h-modal md:h-full">
                    <div class="relative w-full max-w-2xl h-full md:h-auto">
                        <form action="" method="post" enctype="multipart/form-data" class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                            @method('delete')
                            @csrf
                            <!-- Modal header -->
                            <div class="flex justify-between items-start p-4 rounded-t border-b dark:border-gray-600">
                                <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                                    Hapus Data Artikel
                                </h3>
                                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="deleteartikelListModal">
                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                    </svg>
                                </button>
                            </div>
                            <!-- Modal body -->
                            <div class="p-6 space-y-6">
                                <p>Data yang sudah dihapus tidak bisa dikembalikan lagi</p>
                            </div>
                            <!-- Modal footer -->
                            <div class="flex items-center p-6 space-x-2 rounded-b border-t border-gray-200 dark:border-gray-600">
                                <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Hapus</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>
</main>
@endsection