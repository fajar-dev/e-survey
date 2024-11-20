@extends('layouts.app')

@section('content')
<div class="card mb-5 mb-xxl-8 bgi-no-repeat bgi-position-x-end bgi-size-cover" style="background-size: auto 100%; background-image: url('https://preview.keenthemes.com/metronic8/demo4/assets/media/misc/taieri.svg')">
  <div class="card-body pt-6 pb-3">
    <div class="d-flex align-items-center">
      <div class="me-7 mb-4">
        <div class="symbol symbol-100px symbol-lg-80px symbol-fixed position-relative">
          <img src="{{Auth::user()->photo_path ? Storage::url(Auth::user()->photo_path) : 'https://ui-avatars.com/api/?background=F8F5FF&color=7239EA&bold=true&name='.Auth::user()->name}}" alt="image" />
          <div class="position-absolute mb-0 pb-0 translate-middle bottom-0 start-100 bg-success rounded-circle border border-4 border-body h-20px w-20px"></div>
        </div>
      </div>
      <div class="flex-grow-1">
        <div class="d-flex justify-content-between align-items-start flex-wrap mb-2">
          <div class="d-flex flex-column">
            <div class="d-flex align-items-center mb-2">
              <div class="text-gray-900 fs-2 fw-bold me-1">{{Auth::user()->name}}</div>
            </div>
            <div class="d-flex flex-wrap fw-semibold fs-6 mb-4 pe-2">
              <span class="d-flex align-items-center text-gray-500 mb-2">
              {{Auth::user()->email}}</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection
@section('script')

@endsection
