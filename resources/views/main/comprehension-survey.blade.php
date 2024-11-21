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
                  
                  <form action="{{ route('comprehension-survey.store') }}" method="post" id="form">
                    @csrf
                    
                    <!-- Nama Lengkap -->
                    <div class="mb-10">
                      <label for="name" class="required form-label">Nama Lengkap</label>
                      <input type="text" class="form-control form-control-solid @error('name') is-invalid @enderror" name="name" placeholder="Nama lengkap" value="{{ old('name') }}"/>
                      @error('name')
                        <div class="text-danger">{{ $message }}</div>
                      @enderror
                    </div>
                    
                    <!-- Fakultas -->
                    <div class="mb-10">
                      <label for="faculty" class="required form-label">Fakultas</label>
                      @foreach(['Teknik', 'Ekonomi', 'Pertanian', 'FISIP', 'Hukum', 'Kedokteran', 'FKIP'] as $faculty)
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
                      <label class="required form-label">1. Apakah Anda memahami langkah-langkah yang harus diikuti untuk mengajukan proposal penelitian di universitas ini?</label>
                      @foreach(['Sangat Paham', 'Paham', 'Kurang Paham', 'Tidak Paham'] as $option)
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
                      <label class="required form-label">2. Sejauh mana Anda mengetahui panduan etika penelitian yang berlaku di universitas ini?</label>
                      @foreach(['Sangat Paham', 'Paham', 'Kurang Paham', 'Tidak Paham'] as $option)
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
                      <label class="required form-label">3. Bagaimana tingkat pemahaman Anda mengenai prosedur penggunaan dana penelitian yang telah disetujui?</label>
                      @foreach(['Sangat Paham', 'Paham', 'Kurang Paham', 'Tidak Paham'] as $option)
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
                      <label class="required form-label">4. Apakah Anda familiar dengan tahapan pelaporan kemajuan penelitian yang harus dilakukan selama proyek berlangsung?</label>
                      @foreach(['Sangat Paham', 'Paham', 'Kurang Paham', 'Tidak Paham'] as $option)
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
                      <label class="required form-label">5. Seberapa baik Anda memahami prosedur pengajuan perubahan atau revisi dalam pelaksanaan penelitian?</label>
                      @foreach(['Sangat Paham', 'Paham', 'Kurang Paham', 'Tidak Paham'] as $option)
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
                      <label class="required form-label">6. Apakah Anda mengetahui kebijakan dan panduan terkait hak kekayaan intelektual dalam hasil penelitian yang dilakukan di universitas ini?</label>
                      @foreach(['Sangat Paham', 'Paham', 'Kurang Paham', 'Tidak Paham'] as $option)
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
                      <label class="required form-label">7. Bagaimana tingkat pemahaman Anda terhadap prosedur pengabdian masyarakat yang berlaku di universitas ini?</label>
                      @foreach(['Sangat Paham', 'Paham', 'Kurang Paham', 'Tidak Paham'] as $option)
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
                      <label class="required form-label">8. Sejauh mana Anda memahami kriteria evaluasi dan penilaian hasil penelitian yang diterapkan oleh universitas?</label>
                      @foreach(['Sangat Paham', 'Paham', 'Kurang Paham', 'Tidak Paham'] as $option)
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
                      <label class="required form-label">9. Apakah Anda mengetahui mekanisme pertanggungjawaban keuangan yang harus dilaporkan dalam proyek pengabdian masyarakat?</label>
                      @foreach(['Sangat Paham', 'Paham', 'Kurang Paham', 'Tidak Paham'] as $option)
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
                      <label class="required form-label">10. Bagaimana tingkat pemahaman Anda terhadap prosedur penyelesaian laporan akhir penelitian atau pengabdian masyarakat?</label>
                      @foreach(['Sangat Paham', 'Paham', 'Kurang Paham', 'Tidak Paham'] as $option)
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