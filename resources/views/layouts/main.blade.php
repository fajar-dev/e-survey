
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>E-SURVEY | Universitas Malikussaleh</title>
		<meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="viewport" content="initial-scale=1, maximum-scale=1">
		<link rel="shortcut icon" href="https://unimal.ac.id/images/apple_touch_icon_small.png" />
    @include('layouts._partials.head')

	</head>
	<body id="kt_body" data-bs-spy="scroll" data-bs-target="#kt_landing_menu" class="bg-light position-relative app-blank">

    @yield('content')

    @include('layouts._partials.alert')
    @include('layouts._partials.foot')
    <!--begin::Vendors Javascript(used for this page only)-->
    @yield('script')
	</body>
</html>