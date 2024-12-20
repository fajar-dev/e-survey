
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>{{ $title }}</title>
		<meta charset="utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="viewport" content="initial-scale=1, maximum-scale=1">
		<link rel="shortcut icon" href="https://unimal.ac.id/images/apple_touch_icon_small.png" />
    @include('layouts._partials.head')
    @yield('style')

	</head>

	<body id="kt_app_body">
		<div class="d-flex flex-column flex-root" id="kt_app_root">
			<div class="d-flex flex-column flex-lg-row flex-column-fluid">

        @yield('content')

				 <div class="d-flex flex-lg-row-fluid w-lg-50 bgi-size-cover bgi-position-center order-1 order-lg-2 bg-light-primary">
					<div class="d-flex flex-column flex-center py-7 py-lg-15 px-5 px-md-15 w-100">          
							{{-- <div class="mb-0 mb-lg-12">
									<img alt="Logo" src="{{ asset('assets/img/logo-sekolah.png') }}" class="h-60px h-lg-50px"/>
							</div>                 --}}
							<img class="d-none d-lg-block mx-auto w-200px w-md-50 w-xl-400px mb-10 mb-lg-20" src="{{ asset('assets/img/logo-unimal.png') }}" alt=""/>                 
							<h1 class="d-none d-lg-block text-dark fs-2qx fw-bolder text-center mb-1"> 
									E-Survey
							</h1> 
							<div class="d-none d-lg-block text-dark fs- text-center">
								Universitas Malikussaleh
							</div>
					</div>
				</div>
			</div>
		</div>

    @include('layouts._partials.foot')
    <!--begin::Vendors Javascript(used for this page only)-->
    @yield('script')

	</body>
	<!--end::Body-->
</html>