@extends('layout.layout')

@push('styles')
  <style>
    nav ul li {
      align-self: flex-end;
    }

    footer {
      display: none;
    }

    nav ul li a {
      color: black !important;
    }

    nav {
      background-color: white !important;
      border-radius: 0;
      transition: all 0.4s ease-in-out;
      box-shadow: rgba(0, 0, 0, 0.16) 0px 1px 4px;
    }

    nav svg {
      color: #eb6536 !important;
    }
  </style>

  <link href="{{ asset('css/multistep-form.css') }}" rel="stylesheet">
  <link href="{{ asset('scss/submit-btn.scss') }}" rel="stylesheet">
@endpush

<!--  Hero -->
@section('content')
  <section class="font-quicksand pt-16">
    @if ($screening == null)
      <div class="block lg:mx-44 lg:p-14 bg-pale-yellow lg:mt-20 text-center rounded-xl text-[#2b2b2b]">
        <h1 class="font-bold text-3xl lg:mb-5">Screening dulu yuk!</h1>
        <p class="lg:mb-10">Kamu perlu melakukan screening terlebih dahulu, sehingga psikolog kami bisa memahamimu lebih
          baik.<span class="italic">A single information matters!
            :)</span></p>
        <a href="/screening"
          class="button block mx-auto bg-[#eb6536] rounded-full w-1/3 lg:px-4 lg:py-3 text-white font-semibold uppercase motion-safe:animate-bounce-slow text-sm">Mulai
          Screening</a>
      </div>
    @elseif(
        $profilUser->nama != null &&
            $profilUser->username != null &&
            $profilUser->email != null &&
            $profilUser->no_telp != null &&
            $profilUser->tgl_lahir != null &&
            $profilUser->domisili != null &&
            $profilUser->pendidikan != null &&
            $profilUser->agama != null &&
            $profilUser->pekerjaan != null &&
            $profilUser->status != null)
      <div class="mx-auto container font-quicksand">
        <!-- Progress Form -->
        <form id="progress-form" class="p-4 progress-form" action="/layanan/peer-counseling/daftar" method="POST"
          lang="en" novalidate enctype="multipart/form-data">
          @csrf
          <!-- Step Navigation -->
          <div class="d-flex align-items-start mb-3 sm:mb-5 progress-form__tabs" role="tablist">
            <button id="progress-form__tab-1" class="flex-1 px-0 pt-2 progress-form__tabs-item" type="button"
              role="tab" aria-controls="progress-form__panel-1" aria-selected="true">
              <span class="d-block step" aria-hidden="true">Step 1 <span class="sm:d-none">of 3</span></span>
              Informasi Diri
            </button>
            <button id="progress-form__tab-2" class="flex-1 px-0 pt-2 progress-form__tabs-item" type="button"
              role="tab" aria-controls="progress-form__panel-2" aria-selected="false" tabindex="-1"
              aria-disabled="true">
              <span class="d-block step" aria-hidden="true">Step 2 <span class="sm:d-none">of 3</span></span>
              Kondisi Diri
            </button>
            <button id="progress-form__tab-3" class="flex-1 px-0 pt-2 progress-form__tabs-item" type="button"
              role="tab" aria-controls="progress-form__panel-3" aria-selected="false" tabindex="-1"
              aria-disabled="true">
              <span class="d-block step" aria-hidden="true">Step 3 <span class="sm:d-none">of 3</span></span>
              Pembayaran
            </button>
          </div>
          <!-- End Step Navigation -->

          <!-- Step 1 -->
          <section id="progress-form__panel-1" role="tabpanel" aria-labelledby="progress-form__tab-1" tabindex="0"
            class="min-h-[50vh] lg:h-[55vh] overflow-auto box-border">
            <h3 class="text-xl font-semibold mt-6">Review Informasi Diri</h3>
            <div class="sm:grid sm:grid-cols-2 md:grid-cols-3 mt-1 mb-3 gap-4" style="margin-bottom: 40px !important">
              <div class="sm:mt-0 form__field">
                <label for="nama">
                  Nama Lengkap
                  <span data-required="true" aria-hidden="true"></span>
                </label>
                <input type="text" name="nama" id="nama" required class="rounded-md"
                  value="{{ session()->get('nama') }}" disabled>
              </div>
              <div class="sm:mt-0 form__field">
                <label for="email">
                  Email
                  <span data-required="true" aria-hidden="true"></span>
                </label>
                <input type="text" name="email" id="email" required class="rounded-md"
                  value="{{ session()->get('email') }}" disabled>
              </div>
              <div class="sm:mt-0 form__field">
                <label for="no_telp">
                  Nomor Telepon
                  <span data-required="true" aria-hidden="true"></span>
                </label>
                <input type="text" name="no_telp" id="no_telp" required class="rounded-md"
                  value="{{ session()->get('no_telp') }}" disabled>
              </div>
              <div class="sm:mt-0 form__field">
                <label for="jk">
                  Jenis Kelamin
                  <span data-required="true" aria-hidden="true"></span>
                </label>
                <input type="text" name="jk" id="jk" required class="rounded-md"
                  value="{{ session()->get('jk') }}" disabled>
              </div>
              <div class="sm:mt-0 form__field">
                <label for="tgl_lahir">
                  Tanggal Lahir
                  <span data-required="true" aria-hidden="true"></span>
                </label>
                <input type="text" name="tgl_lahir" id="tgl_lahir" required class="rounded-md"
                  value="{{ session()->get('tgl_lahir') }}" disabled>
              </div>
            </div>
            <h3 class="text-xl font-semibold xs:mt-3 mt-5">Preferensi Psikolog
            </h3>
            <div class="sm:grid sm:grid-cols-2 md:grid-cols-2 sm:my-1 gap-4">
              <input type="text" id="user_id" name="user_id" value="{{ session()->get('id') }}" class="hidden">
              <input type="text" id="screening_id" name="screening_id" value="{{ $screening->id }}"
                class="hidden">
              <input type="text" id="status_pendaftaran" name="status_pendaftaran" value="konfirmasi_admin"
                class="
                        hidden">
              <div class="mt-3 sm:mt-0 form__field">
                <label for="pref_jk_konselor">
                  Preferensi Jenis Kelamin Konselor
                  <span data-required="true" aria-hidden="true"></span>
                </label>
                <select id="pref_jk_konselor" name="pref_jk_konselor" autocomplete="" required class="rounded-md">
                  <option value="" disabled selected>Pilih psikolog</option>
                  <option value="L">Laki-laki
                  </option>
                  <option value="P">Perempuan
                  </option>
                </select>
              </div>
            </div>
            <input class="hidden" type="text" id="consent_sharing" name="consent_sharing" value="Ya">
            <input class="hidden" type="text" id="consent_screening" name="consent_screening" value="Ya">
            <div class="d-flex align-items-center justify-end sm:justify-end mt-8 sm:mt-8 lg:mt-8">
              <button type="button" data-action="next" class="text-base mt-4 right-0 text-right rounded-md"
                style="background-color: #1D1F4E; color: whitesmoke; padding: 5px 35px; width: auto">
                Lanjut
              </button>
            </div>
          </section>
          <!-- / End Step 1 -->

          <!-- Step 2 -->
          <section id="progress-form__panel-2" role="tabpanel" aria-labelledby="progress-form__tab-2" tabindex="0"
            hidden class="min-h-[50vh] lg:h-[55vh] overflow-auto box-border">
            <div class="grid grid-cols-1 gap-6 mt-6">
              <div class="mt-3 sm:mt-0 form__field">
                <label for="latar_belakang">
                  Apa hal yang mendorong Anda mendaftar pada peer counseling ini?
                  <span data-required="true" aria-hidden="true"></span>
                </label>
                <textarea id="latar_belakang" name="latar_belakang" rows="3"
                  class="rounded-lg xs:w-full sm:w-2/3 md:w-2/3 lg:w-2/3" required></textarea>
              </div>
              <div class="mt-3 sm:mt-0 form__field">
                <label for="tujuan">
                  Apa tujuan Anda mendaftar pada peer counseling ini?
                  <span data-required="true" aria-hidden="true"></span>
                </label>
                <textarea id="tujuan" name="tujuan" rows="3" class="rounded-lg xs:w-full sm:w-2/3 md:w-2/3 lg:w-2/3"
                  required></textarea>
              </div>
              <div class="mt-3 sm:mt-0 form__field">
                <label for="keluhan">
                  Jelaskan keluhan Anda
                  <span data-required="true" aria-hidden="true"></span>
                </label>
                <textarea id="keluhan" name="keluhan" rows="3" class="rounded-lg xs:w-full sm:w-2/3 md:w-2/3 lg:w-2/3"
                  required></textarea>
              </div>
            </div>
            <div class="d-flex flex-column-reverse sm:flex-row align-items-center justify-between sm:justify-end mt-6">
              <button type="button" class="button--simple text-base font-semibold" data-action="prev"
                style="color: #1D1F4E; padding-right: 15px; width: auto">
                Kembali
              </button>
              <button type="button" data-action="next" class="text-base rounded-md"
                style="background-color: #1D1F4E; color: whitesmoke; padding: 5px 35px; width: auto">
                Lanjut
              </button>
            </div>
          </section>
          <!-- / End Step 2 -->

          <!-- Step 3 -->
          <section id="progress-form__panel-3" role="tabpanel" aria-labelledby="progress-form__tab-3" tabindex="0"
            hidden class="min-h-[50vh] lg:h-[55vh] overflow-auto box-border"">
            <h3 class=" text-xl font-semibold mt-6">Upload Bukti Pembayaran</h3>
            <div class="my-4 rounded-md text-base font-normal" style="border: 1px solid #1D1F4E; padding: 5px">
              <p class="font-semibold">Metode Pembayaran:</p>
              <p>BCA: 6241059607 a.n. Yohana Sondang</p>
              <p>OVO: 085156065094 a.n. Yohana Sondang</p>
            </div>
            <div class="form__field" style="margin-top:20px;">
              <label for="bukti_transfer" class="text-base">
                Bukti Transfer
                <span data-required="true" aria-hidden="true"></span>
              </label>
              <input class="form-control text-base" type="file" id="bukti_transfer" name="bukti_transfer"
                onChange="checkIfFileSubmitted();" required>
            </div>
            <div class="d-flex flex-column-reverse sm:flex-row align-items-center justify-between sm:justify-end mt-6">
              <button type="button" class="sm:mt-0 button--simple text-base font-semibold" data-action="prev"
                style="color: #1D1F4E; padding: 5px 35px; width: auto">
                Kembali
              </button>
              <button type="submit"
                class="c-btn__continue text-base disabled:bg-gray-300 disabled:text-[#323232] enabled:bg-[#1D1F4E] enabled:text-white"
                id="continue-btn" disabled style="padding: 5px 35px; width: auto"
                class="mt-4 right-0 text-right rounded-md"><span>Submit</span>
                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                  x="0px" y="0px" viewBox="0 0 37 37" xml:space="preserve" class="u-loading"
                  id="loading">
                  <path class="circ path"
                    style="fill:none;stroke:#fff;stroke-width:3;stroke-linejoin:round;stroke-miterlimit:10;"
                    d="
	M30.5,6.5L30.5,6.5c6.6,6.6,6.6,17.4,0,24l0,0c-6.6,6.6-17.4,6.6-24,0l0,0c-6.6-6.6-6.6-17.4,0-24l0,0C13.1-0.2,23.9-0.2,30.5,6.5z" />
                </svg>
                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                  x="0px" y="0px" viewBox="0 0 37 37" xml:space="preserve" class="u-success">
                  <polyline class="tick path"
                    style="fill:none;stroke:#fff;stroke-width:3;stroke-linejoin:round;stroke-miterlimit:10;"
                    points="
	11.6,20 15.9,24.2 26.4,13.8 " />
                </svg>
              </button>
            </div>
          </section>
          <!-- / End Step 3 -->

        </form>
        <!-- / End Progress Form -->
      @else
        <div class="block lg:mx-44 lg:p-14 bg-pale-yellow lg:mt-20 text-center rounded-xl text-[#2b2b2b] mb-10">
          <h1 class="font-bold text-3xl lg:mb-5">Lengkapi Profilmu!</h1>
          <p class="lg:mb-10">Untuk mendaftarkan diri ke layanan konseling, kamu perlu melengkapi informasi dirimu
            nih!
            Ini
            ditujukan agar
            psikolog kami bisa memahami lebih jauh tentang dirimu. <span class="italic">A single information
              matters!
              :)</span></p>
          <a href="/profile"
            class="button block mx-auto bg-[#eb6536] rounded-full w-1/3 lg:px-4 lg:py-3 text-white font-semibold uppercase motion-safe:animate-bounce-slow text-sm">Edit
            Profil</a>
        </div>
    @endif
    </div>
  </section>
@endsection

@push('scripts')
  <!-- MULTI STEP FORM -->
  <script src="https://unpkg.com/flowbite@1.5.3/dist/flowbite.js"></script>
  <!-- jQuery -->
  <script src="http://thecodeplayer.com/uploads/js/jquery-1.9.1.min.js" type="text/javascript"></script>
  <!-- jQuery easing plugin -->
  <script src="http://thecodeplayer.com/uploads/js/jquery.easing.min.js" type="text/javascript"></script>
  <script src="{{ asset('js/submit-btn.js') }}"></script>
  <script src="{{ asset('js/multistep-form.js') }}"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/flatpickr/4.6.9/flatpickr.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flatpickr/4.6.9/themes/airbnb.min.css">
  <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.js" defer></script>
  <script>
    function checkIfFileSubmitted() {
      if (document.getElementById("bukti_transfer").value === "") {
        document.getElementById('continue-btn').disabled = true;
      } else {
        document.getElementById('continue-btn').disabled = false;
      }
    }
  </script>
@endpush
