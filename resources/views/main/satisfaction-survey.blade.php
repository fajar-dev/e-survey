@extends('layouts.main')

@section('content')
  <div class="d-flex flex-column flex-root" id="kt_app_root">
    <div class="mb-0" id="home">
      <div class="bgi-no-repeat bgi-size-contain bgi-position-x-center bgi-position-y-bottom landing-dark-bg" style="background-image: url({{ asset('assets/media/svg/illustrations/landing.svg') }})">
        <div class="d-flex flex-column flex-center w-100 min-h-200px min-h-lg-150px px-9">
          <div class="container">
            <img class=" w-150px mb-2" src="{{ asset('assets/img/Logo.png') }}" alt=""/>                 
            <h1 class="text-white lh-base fw-bold fs-2x fs-lg-2x">
              {{ $title }}
          </h1>
          </div>
        </div>
      </div>
    </div> 

    <div class="py-10 py-lg-20 mt-10">
      <div class="container" id="tentang" data-kt-scroll-offset="{default: 100, lg: 150}">
        <div class="row justify-content-center">
          <div class="col-12">
            <div class="card card-flush">  
                <div class="card-body pb-5"> 
                  
                  <form action="{{ route('satisfaction-survey.store') }}" method="post" id="form">
                    @csrf
                    
                    <!-- Nama Lengkap -->
                    <div class="mb-10">
                      <label for="name" class="required form-label">Nama Lengkap</label>
                      <input type="text" name="name" class="form-control form-control-solid @" placeholder="Nama lengkap" value="{{ old('name') }}" />
                      @error('name')
                        <div class="text-danger">{{ $message }}</div>
                      @enderror
                    </div>
                    
                    <!-- Fakultas -->
                    <div class="mb-10">
                      <label for="faculty" class="required form-label">Fakultas</label>
                      @foreach(['Teknik', 'Ekonomi', 'Pertanian', 'FISIP', 'Hukum', 'Kedokteran', 'FKIP', 'Perikanan dan Kelautan'] as $faculty)
                        <div class="form-check form-check-custom form-check-solid mb-3 ps-4">
                          <input class="form-check-input" type="radio" name="faculty" value="{{ $faculty }}" id="faculty{{ $faculty }}" {{ old('faculty') === $faculty ? 'checked' : '' }} />
                          <label class="form-check-label" for="faculty{{ $faculty }}">Fakultas {{ $faculty }}</label>
                        </div>
                      @endforeach
                      @error('faculty')
                        <div class="text-danger">{{ $message }}</div>
                      @enderror
                    </div>
                    
                    <!-- Pertanyaan 1 -->
                    <div class="mb-10">
                      <label class="required form-label">1. Seberapa puas anda dengan kemudahan akses layanan administrasi terkait pendaftaran dan pelaksanaan penelitian atau pengabdian masyarakat?</label>
                      @foreach(['Sangat Tidak Puas', 'Tidak Puas', 'Cukup Puas', 'Puas', 'Sangat Puas'] as $option)
                        <div class="form-check form-check-custom form-check-solid mb-3 ps-4">
                          <input class="form-check-input" type="radio" name="q1" value="{{ $option }}" id="q1_{{ Str::slug($option) }}" {{ old('q1') === $option ? 'checked' : '' }} />
                          <label class="form-check-label" for="q1_{{ Str::slug($option) }}">{{ $option }}</label>
                        </div>
                      @endforeach
                      @error('q1')
                        <div class="text-danger">{{ $message }}</div>
                      @enderror
                    </div>
                    
                    <!-- Pertanyaan 2 -->
                    <div class="mb-10">
                      <label class="required form-label">2. Bagaimana penilaian anda terhadap kejelasan informasi dan panduan administrasi yang disediakan untuk pelaksanaan penelitian atau pengabdian masyarakat?</label>
                      @foreach(['Sangat Tidak Jelas', 'Tidak Jelas', 'Cukup Jelas', 'Jelas', 'Sangat Jelas'] as $option)
                        <div class="form-check form-check-custom form-check-solid mb-3 ps-4">
                          <input class="form-check-input" type="radio" name="q2" value="{{ $option }}" id="q2_{{ Str::slug($option) }}" {{ old('q2') === $option ? 'checked' : '' }} />
                          <label class="form-check-label" for="q2_{{ Str::slug($option) }}">{{ $option }}</label>
                        </div>
                      @endforeach
                      @error('q2')
                        <div class="text-danger">{{ $message }}</div>
                      @enderror
                    </div>
                    
                    <!-- Pertanyaan 3 -->
                    <div class="mb-10">
                      <label class="required form-label">3. Seberapa puas anda dengan kecepatan respon dari pihak administrasi dalam menangani permintaan atau masalah yang terkait dengan penelitian dan pengabdian masyarakat?</label>
                      @foreach(['Sangat Tidak Puas', 'Tidak Puas', 'Cukup Puas', 'Puas', 'Sangat Puas'] as $option)
                        <div class="form-check form-check-custom form-check-solid mb-3 ps-4">
                          <input class="form-check-input" type="radio" name="q3" value="{{ $option }}" id="q3_{{ Str::slug($option) }}" {{ old('q3') === $option ? 'checked' : '' }} />
                          <label class="form-check-label" for="q3_{{ Str::slug($option) }}">{{ $option }}</label>
                        </div>
                      @endforeach
                      @error('q3')
                        <div class="text-danger">{{ $message }}</div>
                      @enderror
                    </div>
                  
                    <!-- Pertanyaan 4 -->
                    <div class="mb-10">
                      <label class="required form-label">4. Bagaimana anda menilai dukungan fasilitas yang disediakan (ruang kerja, akses laboratorium, perangkat lunak, dll.) untuk mendukung pelaksanaan penelitian dan pengabdian masyarakat?</label>
                      @foreach(['Sangat Tidak Memadai', 'Tidak Memadai', 'Cukup Memadai', 'Memadai', 'Sangat Memadai'] as $option)
                        <div class="form-check form-check-custom form-check-solid mb-3 ps-4">
                          <input class="form-check-input" type="radio" name="q4" value="{{ $option }}" id="q4_{{ Str::slug($option) }}" {{ old('q4') === $option ? 'checked' : '' }} />
                          <label class="form-check-label" for="q4_{{ Str::slug($option) }}">{{ $option }}</label>
                        </div>
                      @endforeach
                      @error('q4')
                        <div class="text-danger">{{ $message }}</div>
                      @enderror
                    </div>

                    <!-- Pertanyaan 5 -->
                    <div class="mb-10">
                      <label class="required form-label">5. Seberapa puas anda dengan akses dan ketersediaan alat atau bahan yang dibutuhkan dalam proses penelitian atau pengabdian masyarakat?</label>
                      @foreach(['Sangat Tidak Puas', 'Tidak Puas', 'Cukup Puas', 'Puas', 'Sangat Puas'] as $option)
                        <div class="form-check form-check-custom form-check-solid mb-3 ps-4">
                          <input class="form-check-input" type="radio" name="q5" value="{{ $option }}" id="q5_{{ Str::slug($option) }}" {{ old('q5') === $option ? 'checked' : '' }} />
                          <label class="form-check-label" for="q5_{{ Str::slug($option) }}">{{ $option }}</label>
                        </div>
                      @endforeach
                      @error('q5')
                        <div class="text-danger">{{ $message }}</div>
                      @enderror
                    </div>

                    <!-- Pertanyaan 6 -->
                    <div class="mb-10">
                      <label class="required form-label">6. Bagaimana penilaian anda terhadap proses pencairan dana atau pendanaan untuk penelitian dan pengabdian masyarakat?</label>
                      @foreach(['Sangat Tidak Puas', 'Tidak Puas', 'Cukup Puas', 'Puas', 'Sangat Puas'] as $option)
                        <div class="form-check form-check-custom form-check-solid mb-3 ps-4">
                          <input class="form-check-input" type="radio" name="q6" value="{{ $option }}" id="q6_{{ Str::slug($option) }}" {{ old('q6') === $option ? 'checked' : '' }} />
                          <label class="form-check-label" for="q6_{{ Str::slug($option) }}">{{ $option }}</label>
                        </div>
                      @endforeach
                      @error('q6')
                        <div class="text-danger">{{ $message }}</div>
                      @enderror
                    </div>

                    <!-- Pertanyaan 7 -->
                    <div class="mb-10">
                      <label class="required form-label">7. Seberapa puas Anda dengan keterbukaan dan transparansi informasi terkait mekanisme pendanaan penelitian dan pengabdian masyarakat?</label>
                      @foreach(['Sangat Tidak Puas', 'Tidak Puas', 'Cukup Puas', 'Puas', 'Sangat Puas'] as $option)
                        <div class="form-check form-check-custom form-check-solid mb-3 ps-4">
                          <input class="form-check-input" type="radio" name="q7" value="{{ $option }}" id="q7_{{ Str::slug($option) }}" {{ old('q7') === $option ? 'checked' : '' }} />
                          <label class="form-check-label" for="q7_{{ Str::slug($option) }}">{{ $option }}</label>
                        </div>
                      @endforeach
                      @error('q7')
                        <div class="text-danger">{{ $message }}</div>
                      @enderror
                    </div>

                    <!-- Pertanyaan 8 -->
                    <div class="mb-10">
                      <label class="required form-label">8. Bagaimana penilaian anda terhadap bimbingan atau arahan yang diberikan oleh supervisor/dosen pembimbing terkait pelaksanaan penelitian dan pengabdian masyarakat?</label>
                      @foreach(['Sangat Tidak Puas', 'Tidak Puas', 'Cukup Puas', 'Puas', 'Sangat Puas'] as $option)
                        <div class="form-check form-check-custom form-check-solid mb-3 ps-4">
                          <input class="form-check-input" type="radio" name="q8" value="{{ $option }}" id="q8_{{ Str::slug($option) }}" {{ old('q8') === $option ? 'checked' : '' }} />
                          <label class="form-check-label" for="q8_{{ Str::slug($option) }}">{{ $option }}</label>
                        </div>
                      @endforeach
                      @error('q8')
                        <div class="text-danger">{{ $message }}</div>
                      @enderror
                    </div>

                    <!-- Pertanyaan 9 -->
                    <div class="mb-10">
                      <label class="required form-label">9. Seberapa efektif menurut anda koordinasi antar bagian (administrasi, pembimbing, pengelola fasilitas, dll.) dalam mendukung kelancaran penelitian atau pengabdian masyarakat?</label>
                      @foreach(['Sangat Tidak Efektif', 'Tidak Efektif', 'Cukup Efektif', 'Efektif', 'Sangat Efektif'] as $option)
                        <div class="form-check form-check-custom form-check-solid mb-3 ps-4">
                          <input class="form-check-input" type="radio" name="q9" value="{{ $option }}" id="q9_{{ Str::slug($option) }}" {{ old('q9') === $option ? 'checked' : '' }} />
                          <label class="form-check-label" for="q9_{{ Str::slug($option) }}">{{ $option }}</label>
                        </div>
                      @endforeach
                      @error('q9')
                        <div class="text-danger">{{ $message }}</div>
                      @enderror
                    </div>

                    <!-- Pertanyaan 10 -->
                    <div class="mb-10">
                      <label class="required form-label">10. Bagaimana keseluruhan tingkat kepuasan Anda terhadap layanan administrasi, fasilitas, pendanaan, dan bimbingan dalam mendukung proses penelitian dan pengabdian masyarakat?</label>
                      @foreach(['Sangat Tidak Puas', 'Tidak Puas', 'Cukup Puas', 'Puas', 'Sangat Puas'] as $option)
                        <div class="form-check form-check-custom form-check-solid mb-3 ps-4">
                          <input class="form-check-input " type="radio" name="q10" value="{{ $option }}" id="q10_{{ Str::slug($option) }}" {{ old('q10') === $option ? 'checked' : '' }} />
                          <label class="form-check-label" for="q10_{{ Str::slug($option) }}">{{ $option }}</label>
                        </div>
                      @endforeach
                      @error('q10')
                        <div class="text-danger">{{ $message }}</div>
                      @enderror
                    </div>

                    <!-- Submit Button -->
                    <div class="mb-10">
                      <button type="submit" id="submit" class="btn btn-primary px-20">
                        <span class="indicator-label">Submit</span>
                        <span class="indicator-progress" style="display: none;">Loading... 
                        <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                      </button>
                    </div>
                  </form>
                  

                </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="mb-0">
      <div class="landing-light-bg">
        <div class="container">
          <div class="row py-10 py-lg-20 text-center">
            <div class="col-12">
              <div>
                <img alt="Logo" src="{{ asset('assets/img/logo-unimal.png') }}" class="h-80px" />
              </div>
              <p class="fw-bold fs-3 pt-5 pb-2 mb-0">Universitas Malikussaleh</p>
              <span>Cot Tengku Nie Reuleut, Muara Batu, Aceh Utara - Aceh</span><br>
              <span class="text-gray-500">+(62) 645.41373 | humas@unimal.ac.id</span>
              <div class="mt-5">
                <span class="mx-5 fs-6 mt-10 fw-semibold text-gray-600 pt-1">&copy; 2024 Universitas Malikussaleh.</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
      <i class="ki-outline ki-arrow-up"></i>
    </div>
  </div>

@endsection

@section('script')
<script>
  document.getElementById('form').addEventListener('submit', function() {
    var submitButton = document.getElementById('submit');
    submitButton.querySelector('.indicator-label').style.display = 'none';
    submitButton.querySelector('.indicator-progress').style.display = 'inline-block';
    submitButton.setAttribute('disabled', 'disabled');
  });
</script>
@endsection
