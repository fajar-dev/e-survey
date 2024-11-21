@extends('layouts.main')

@section('content')
  <div class="d-flex flex-column flex-root" id="kt_app_root">
    <div class="mb-0" id="home">
      <div class="bgi-no-repeat bgi-size-contain bgi-position-x-center bgi-position-y-bottom landing-dark-bg" style="background-image: url({{ asset('assets/media/svg/illustrations/landing.svg') }})">
        <div class="d-flex flex-column flex-center w-100 min-h-350px min-h-lg-400px px-9">
          <div class="text-center">
            <img class=" w-275px w-md-50 w-xl-200px mb-10" src="{{ asset('assets/img/Logo.png') }}" alt=""/>                 
            <h1 class="text-white lh-base fw-bold fs-2x fs-lg-3x mb-15">
              <span style="background: linear-gradient(to right, #12CE5D 0%, #FFD80C 100%);-webkit-background-clip: text;-webkit-text-fill-color: transparent;">
                  <span id="kt_landing_hero_text">E-SURVEY</span>
              </span><br>
              Universitas Malikussaleh
          </h1>
          </div>
        </div>
      </div>
    </div>
    <!--begin::Curve bottom-->
    <div class="landing-curve landing-dark-color mb-10 mb-lg-20">
      <svg viewBox="15 12 1470 48" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M0 11C3.93573 11.3356 7.85984 11.6689 11.7725 12H1488.16C1492.1 11.6689 1496.04 11.3356 1500 11V12H1488.16C913.668 60.3476 586.282 60.6117 11.7725 12H0V11Z" fill="currentColor"></path>
      </svg>
    </div>
    <!--end::Curve bottom--> 

    <div class="py-10 py-lg-20 mt-10">
      <div class="container" id="tentang" data-kt-scroll-offset="{default: 100, lg: 150}">
        <div class="row justify-content-center">
          <div class="col-sm-6 col-xxl-3">
            <div class="card card-flush">  
                <div class="card-body text-center pb-5"> 
                    <div class="rounded-3">      
                        <div class="bgi-no-repeat bgi-position-center card-rounded mb-7" style="height: 150px;background-image:url('https://layanan.unimal.ac.id/assets/frontend/images/bg-bagian/img2.jpg')">                     
                        </div>
                    </div>  
                    <div class="d-flex text-start">             
                      <span class="fw-bold text-gray-800 cursor-pointer text-hover-primary fs-3 d-block">Survei kepuasan layanan, penelitian, pengabdian</span>             
                    </div> 
                </div>
                <div class="card-footer d-flex flex-stack pt-0">  
                    <a href="{{route('satisfaction-survey')}}" class="btn btn-primary flex-shrink-0 me-2 w-100" >
                        Mulai Survei     
                    </a>
                </div>
            </div>
          </div>
          <div class="col-sm-6 col-xxl-3">
            <div class="card card-flush h-xl-100">  
                <div class="card-body text-center pb-5"> 
                  <div class="d-block overlay rounded-3">      
                      <div class="bgi-no-repeat bgi-position-center card-rounded mb-7" style="height: 150px;background-image:url('https://layanan.unimal.ac.id/assets/frontend/images/bg-bagian/img3.jpg')">                     
                      </div>
                  </div>  
                    <div class="d-flex text-start">             
                      <span class="fw-bold text-gray-800 cursor-pointer text-hover-primary fs-3 d-block">Survei pemahaman panduan penelitian dan pengabdian</span>           
                    </div> 
                </div>
                <div class="card-footer d-flex flex-stack pt-0">  
                    <a href="{{route('comprehension-survey')}}" class="btn btn-primary flex-shrink-0 me-2 w-100" >
                        Mulai Survei     
                    </a>
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
