@extends('layouts.main')

@section('content')
  <div class="d-flex flex-column flex-root" id="kt_app_root">
    <div class="mb-0" id="home">
      <div class="bgi-no-repeat bgi-position-x-center bgi-position-y-bottom bg-light-success">
        <div class="d-flex flex-column flex-center w-100 min-h-350px min-h-lg-500px px-9">
          <div class="text-center mb-5 mb-lg-10 py-10 py-lg-20">
            <img class=" w-275px w-md-50 w-xl-200px mb-10 mb-lg-20" src="{{ asset('assets/img/logo-unimal.png') }}" alt=""/>                 
            <h1 class="text-dark lh-base fw-bold fs-2x mb-15">Minat Bakat Siswa
            <br />
            <span style="background: linear-gradient(to right, #12CE5D 0%, #FFD80C 100%);-webkit-background-clip: text;-webkit-text-fill-color: transparent;">
              <span id="kt_landing_hero_text">SMA Negeri 1 Lhokseumawe</span>
            </span></h1>
          </div>
        </div>
      </div>
    </div>

    <div class="py-10 py-lg-20 mt-10">
      <div class="container" id="tentang" data-kt-scroll-offset="{default: 100, lg: 150}">
        <div class="row">
          <div class="col-sm-6 col-xxl-3">
            <div class="card card-flush h-xl-100">  
                <div class="card-body text-center pb-5"> 
                    <a class="d-block overlay" data-fslightbox="lightbox-hot-sales" href="/metronic8/demo1/assets/media/stock/600x600/img-39.jpg">      
                        <div class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded mb-7" style="height: 266px;background-image:url('/metronic8/demo1/assets/media/stock/600x600/img-39.jpg">                     
                        </div>
                        <div class="overlay-layer card-rounded bg-dark bg-opacity-25">
                            <i class="ki-duotone ki-eye fs-3x text-white"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>            
                        </div>  
                    </a>  
                    <div class="d-flex align-items-end flex-stack mb-1">             
                        <div class="text-start">                         
                            <span class="fw-bold text-gray-800 cursor-pointer text-hover-primary fs-4 d-block">Wavy Curved Art</span>           
                            <span class="text-gray-500 mt-1 fw-bold fs-6">Last Bid: 1.07 ETH</span>              
                        </div>          
                        <span class="text-gray-600 text-end fw-bold fs-6">$2,630</span>           
                    </div> 
                </div>
                <div class="card-footer d-flex flex-stack pt-0">  
                    <a class="btn btn-sm btn-primary flex-shrink-0 me-2" data-bs-target="#kt_modal_bidding" data-bs-toggle="modal">
                        Place a Bid        
                    </a>
                    <a class="btn btn-sm btn-light flex-shrink-0" href="/metronic8/demo1/apps/ecommerce/sales/listing.html">
                        View Item       
                    </a>
                </div>
            </div>
         </div>
        </div>
      </div>
    </div>

    <div class="py-10 py-lg-20 mt-1">
      <div class="container" id="tipe-kepribadian" data-kt-scroll-offset="{default: 100, lg: 150}">
        <div class="text-center mb-17">
          <h3 class="fs-2hx text-gray-900 mb-2">
            Tipe Kepribadian
          </h3>
          <div class="fs-5 text-muted fw-bold">Temukan tipe kepribadian yang kamu miliki</div>
        </div>
        <div class="row">
          <div class="col-md-4 my-3 ">
            <div class="alert alert-dismissible bg-light-primary d-flex flex-row p-5 mb-1 h-100">
              <img alt="Logo" src="{{ asset('assets/img/icon/realistic.png') }}" class="logo-default h-50px pe-5" />
              <div class="d-flex flex-column pe-0 pe-sm-10">
                <h4 class="fw-semibold">Realistik</h4>
                <span>Mudah mempelajari dan senang bekerja
                  dengan alat-alat atau mesin dan juga suka dengan hewan</span>
              </div>
            </div>
          </div>
          <div class="col-md-4 my-3">
            <div class="alert alert-dismissible bg-light-info d-flex flex-row p-5 mb-1 h-100">
              <img alt="Logo" src="{{ asset('assets/img/icon/investigatif.png') }}" class="logo-default h-50px pe-5" />
              <div class="d-flex flex-column pe-0 pe-sm-10">
                <h4 class="fw-semibold">Investigatif</h4>
                <span>Senang belajar dan memecahkan soal-soal matematika
                  dan ilmu pengetahuan alam (science)</span>
              </div>
            </div>
          </div>
          <div class="col-md-4 my-3">
            <div class="alert alert-dismissible bg-light-warning d-flex flex-row p-5 mb-1 h-100">
              <img alt="Logo" src="{{ asset('assets/img/icon/artistik.png') }}" class="logo-default h-50px pe-5" />
              <div class="d-flex flex-column pe-0 pe-sm-10">
                <h4 class="fw-semibold">Artistik</h4>
                <span>Senang melakukan aktivitas kreatif seperti melukis, drama,
                  kerajinan, tari, musik maupun menulis kreatif</span>
              </div>
            </div>
          </div>
          <div class="col-md-4 my-3">
            <div class="alert alert-dismissible bg-light-danger d-flex flex-row p-5 mb-1 h-100">
              <img alt="Logo" src="{{ asset('assets/img/icon/sosial.png') }}" class="logo-default h-50px pe-5" />
              <div class="d-flex flex-column pe-0 pe-sm-10">
                <h4 class="fw-semibold">Sosial</h4>
                <span>Senang melakukan hal-hal yang membantu orang lain misalnya,
                  mengajar, merawat, menyampaikan informasi</span>
              </div>
            </div>
          </div>
          <div class="col-md-4 my-3">
            <div class="alert alert-dismissible bg-light-success d-flex flex-row p-5 mb-1 h-100">
              <img alt="Logo" src="{{ asset('assets/img/icon/giat.png') }}" class="logo-default h-50px pe-5" />
              <div class="d-flex flex-column pe-0 pe-sm-10">
                <h4 class="fw-semibold">Giat</h4>
                <span>Senang memimpin dan meyakinkan/memengaruhi orang lain,
                  juga menjual sesuatu barang maupun ide</span>
              </div>
            </div>
          </div>
          <div class="col-md-4 my-3">
            <div class="alert alert-dismissible bg-light-secondary d-flex flex-row p-5 mb-1 h-100">
              <img alt="Logo" src="{{ asset('assets/img/icon/konvensional.png') }}" class="logo-default h-50px pe-5" />
              <div class="d-flex flex-column pe-0 pe-sm-10">
                <h4 class="fw-semibold">Konvensional</h4>
                <span>Senang mengutak-atik angka, catatan arsip, atau
                  peralatan, sistematis dan terukur</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="py-10 py-lg-20 mt-1">
      <div class="container" id="tipe-kecerdasan" data-kt-scroll-offset="{default: 100, lg: 150}">
        <div class="text-center mb-17">
          <h3 class="fs-2hx text-gray-900 mb-2">
            Tipe Kecerdasan
          </h3>
          <div class="fs-5 text-muted fw-bold">Temukan tipe kecerdasan yang kamu miliki</div>
        </div>
        <div class="row">
          <div class="col-md-4 my-3 ">
            <div class="alert alert-dismissible bg-light-primary d-flex flex-row p-5 mb-1 h-100">
              <img alt="Logo" src="{{ asset('assets/img/icon/kinestetik.png') }}" class="logo-default h-50px pe-5" />
              <div class="d-flex flex-column pe-0 pe-sm-10">
                <h4 class="fw-semibold">Kinestetik</h4>
                <span>Olah gerak, seni rupa, seni musik</span>
              </div>
            </div>
          </div>
          <div class="col-md-4 my-3">
            <div class="alert alert-dismissible bg-light-info d-flex flex-row p-5 mb-1 h-100">
              <img alt="Logo" src="{{ asset('assets/img/icon/logis.png') }}" class="logo-default h-50px pe-5" />
              <div class="d-flex flex-column pe-0 pe-sm-10">
                <h4 class="fw-semibold">Logis-Matematis</h4>
                <span>Merancang program komputer sederhana, bermain dengan angka, problem-solving project</span>
              </div>
            </div>
          </div>
          <div class="col-md-4 my-3">
            <div class="alert alert-dismissible bg-light-warning d-flex flex-row p-5 mb-1 h-100">
              <img alt="Logo" src="{{ asset('assets/img/icon/verbal.png') }}" class="logo-default h-50px pe-5" />
              <div class="d-flex flex-column pe-0 pe-sm-10">
                <h4 class="fw-semibold">Verbal/Linguistik</h4>
                <span>Membaca, menulis dan review buku – bermain dengan kata-kata</span>
              </div>
            </div>
          </div>
          <div class="col-md-4 my-3">
            <div class="alert alert-dismissible bg-light-danger d-flex flex-row p-5 mb-1 h-100">
              <img alt="Logo" src="{{ asset('assets/img/icon/interpersonal.png') }}" class="logo-default h-50px pe-5" />
              <div class="d-flex flex-column pe-0 pe-sm-10">
                <h4 class="fw-semibold">Interpersonal</h4>
                <span>Diskusi kelompok, olahraga kelompok, organisasi</span>
              </div>
            </div>
          </div>
          <div class="col-md-4 my-3">
            <div class="alert alert-dismissible bg-light-success d-flex flex-row p-5 mb-1 h-100">
              <img alt="Logo" src="{{ asset('assets/img/icon/intrapersonal.png') }}" class="logo-default h-50px pe-5" />
              <div class="d-flex flex-column pe-0 pe-sm-10">
                <h4 class="fw-semibold">Intra Personal</h4>
                <span>Membuat proyek menulis dan eksplorasi topik-topik spesifik</span>
              </div>
            </div>
          </div>
          <div class="col-md-4 my-3">
            <div class="alert alert-dismissible bg-light-secondary d-flex flex-row p-5 mb-1 h-100">
              <img alt="Logo" src="{{ asset('assets/img/icon/naturalistik.png') }}" class="logo-default h-50px pe-5" />
              <div class="d-flex flex-column pe-0 pe-sm-10">
                <h4 class="fw-semibold">Naturalistik</h4>
                <span>Kegiatan luar ruangan, berhubungan dengan alam</span>
              </div>
            </div>
          </div>
          <div class="col-md-4 my-3">
            <div class="alert alert-dismissible bg-light-warning d-flex flex-row p-5 mb-1 h-100">
              <img alt="Logo" src="{{ asset('assets/img/icon/eksistensial.png') }}" class="logo-default h-50px pe-5" />
              <div class="d-flex flex-column pe-0 pe-sm-10">
                <h4 class="fw-semibold">Eksistensial</h4>
                <span>Merawat hewan, diskusi buku, belajar Bahasa asing, berinteraksi dengan alam</span>
              </div>
            </div>
          </div>
          <div class="col-md-4 my-3">
            <div class="alert alert-dismissible bg-light-danger d-flex flex-row p-5 mb-1 h-100">
              <img alt="Logo" src="{{ asset('assets/img/icon/musikal.png') }}" class="logo-default h-50px pe-5" />
              <div class="d-flex flex-column pe-0 pe-sm-10">
                <h4 class="fw-semibold">Musikal</h4>
                <span>Musik dan Menyanyi</span>
              </div>
            </div>
          </div>
          <div class="col-md-4 my-3">
            <div class="alert alert-dismissible bg-light-info d-flex flex-row p-5 mb-1 h-100">
              <img alt="Logo" src="{{ asset('assets/img/icon/spasial.png') }}" class="logo-default h-50px pe-5" />
              <div class="d-flex flex-column pe-0 pe-sm-10">
                <h4 class="fw-semibold">Spasial Visual</h4>
                <span>Kegiatan yang berhubungan dengan ruang dan struktur 3D</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <div class="py-10 py-lg-20 mt-1">
      <div class="container"  id="team" data-kt-scroll-offset="{default: 100, lg: 150}"">
        <div class="text-center mb-12">
          <h3 class="fs-2hx text-gray-900 mb-2">Tim Pengabdian</h3>
          <div class="fs-5 text-muted fw-bold">TIm pengabdian Universitas Malikussaleh</div>
        </div>
        <div class="tns tns-default" style="direction: ltr">
          <div data-tns="true" data-tns-loop="true" data-tns-swipe-angle="false" data-tns-speed="2000" data-tns-autoplay="true" data-tns-autoplay-timeout="18000" data-tns-controls="true" data-tns-nav="false" data-tns-items="1" data-tns-center="false" data-tns-dots="false" data-tns-prev-button="#kt_team_slider_prev" data-tns-next-button="#kt_team_slider_next" data-tns-responsive="{1200: {items: 3}, 992: {items: 2}}">
            <div class="text-center">
              <div class="octagon mx-auto mb-5 d-flex w-200px h-200px bgi-no-repeat bgi-size-contain bgi-position-center" style="background-image:url('{{ asset('assets/img/team/nanda.jpg') }}')"></div>
              <div class="mb-0">
                <a href="#" class="text-gray-900 fw-bold text-hover-primary fs-3">Nanda Savira Ersa, ST., MT</a>
                <div class="text-muted fs-6 fw-semibold mt-1">Ketua Tim</div>
              </div>
            </div>
            <div class="text-center">
              <div class="octagon mx-auto mb-5 d-flex w-200px h-200px bgi-no-repeat bgi-size-contain bgi-position-center" style="background-image:url('{{ asset('assets/img/team/nura.jpg') }}')"></div>
              <div class="mb-0">
                <a href="#" class="text-gray-900 fw-bold text-hover-primary fs-3">Nura Usrina, ST., MT</a>
                <div class="text-muted fs-6 fw-semibold mt-1">Anggota Tim</div>
              </div>
            </div>
            <div class="text-center">
              <div class="octagon mx-auto mb-5 d-flex w-200px h-200px bgi-no-repeat bgi-size-contain bgi-position-center" style="background-image:url('{{ asset('assets/img/team/zara.jpg') }}')"></div>
              <div class="mb-0">
                <a href="#" class="text-gray-900 fw-bold text-hover-primary fs-3">Zara Yunizar, S.Kom., M.Kom</a>
                <div class="text-muted fs-6 fw-semibold mt-1">Anggota Tim</div>
              </div>
            </div>
            <div class="text-center">
              <div class="octagon mx-auto mb-5 d-flex w-200px h-200px bgi-no-repeat bgi-size-contain bgi-position-center" style="background-image:url('{{ asset('assets/img/team/fauzan.jpg') }}')"></div>
              <div class="mb-0">
                <a href="#" class="text-gray-900 fw-bold text-hover-primary fs-3">M. Fauzan, ST., MT</a>
                <div class="text-muted fs-6 fw-semibold mt-1">Anggota Tim</div>
              </div>
            </div>
            <div class="text-center">
              <div class="octagon mx-auto mb-5 d-flex w-200px h-200px bgi-no-repeat bgi-size-contain bgi-position-center" style="background-image:url('{{ asset('assets/img/team/lukman.jpg') }}')"></div>
              <div class="mb-0">
                <a href="#" class="text-gray-900 fw-bold text-hover-primary fs-3">Isna Rezkia Lukman, S.Pd., M.Pd</a>
                <div class="text-muted fs-6 fw-semibold mt-1">Anggota Tim</div>
              </div>
            </div>
            <div class="text-center">
              <div class="octagon mx-auto mb-5 d-flex w-200px h-200px bgi-no-repeat bgi-size-contain bgi-position-center" style="background-image:url('{{ asset('assets/img/team/misbah.jpg') }}')"></div>
              <div class="mb-0">
                <a href="#" class="text-gray-900 fw-bold text-hover-primary fs-3">Misbahul Jannah, ST., MT</a>
                <div class="text-muted fs-6 fw-semibold mt-1">Anggota Tim</div>
              </div>
            </div>
            <div class="text-center">
              <div class="octagon mx-auto mb-5 d-flex w-200px h-200px bgi-no-repeat bgi-size-contain bgi-position-center" style="background-image:url('{{ asset('assets/img/team/majid.jpg') }}')"></div>
              <div class="mb-0">
                <a href="#" class="text-gray-900 fw-bold text-hover-primary fs-3">O.K. Muhammad Majid Maulana</a>
                <div class="text-muted fs-6 fw-semibold mt-1">Anggota Tim</div>
              </div>
            </div>
            <div class="text-center">
              <div class="octagon mx-auto mb-5 d-flex w-200px h-200px bgi-no-repeat bgi-size-contain bgi-position-center" style="background-image:url('{{ asset('assets/img/team/ditya.jpg') }}')"></div>
              <div class="mb-0">
                <a href="#" class="text-gray-900 fw-bold text-hover-primary fs-3">Ditya Larasati Putri</a>
                <div class="text-muted fs-6 fw-semibold mt-1">Anggota Tim</div>
              </div>
            </div>
          </div>
          <button class="btn btn-icon btn-active-color-primary" id="kt_team_slider_prev">
            <i class="ki-outline ki-left fs-2x"></i>
          </button>
          <button class="btn btn-icon btn-active-color-primary" id="kt_team_slider_next">
            <i class="ki-outline ki-right fs-2x"></i>
          </button>
        </div>
      </div>
    </div>

    <div class="mb-0">
      <div class="landing-light-bg">
        <div class="container">
          <div class="row py-10 py-lg-20 text-center">
            <div class="col-12">
              <div>
                <img alt="Logo" src="{{ asset('assets/img/logo-sekolah.png') }}" class="h-50px" />
              </div>
              <p class="fw-bold fs-3 pt-10 pb-2 mb-0">SMA Negeri 1 Lhokseumawe</p>
              <span>Jl. Darussalam Kp. Jawa Lama Kecamatan Banda Sakti Kota Lhokseumawe, Aceh</span><br>
              <span class="text-gray-500">sman1lhokseumawe1957@gmail.com | sman1lsw@yahoo.co.id | +62 822 7780 0022</span>
              <div class="mt-5">
                <span class="mx-5 fs-6 mt-10 fw-semibold text-gray-600 pt-1">&copy; 2024 Tim Pengabdian Universitas Malikussaleh.</span>
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
<script src="{{ asset('assets/plugins/custom/datatables/datatables.bundle.js') }}"></script>
<script>
  $("#table").DataTable();
</script>
@endsection
