<div id="kt_app_sidebar" class="app-sidebar flex-column" data-kt-drawer="true" data-kt-drawer-name="app-sidebar" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="250px" data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_app_sidebar_mobile_toggle">
  <div class="app-sidebar-logo flex-shrink-0 d-none d-md-flex align-items-center px-8 " id="kt_app_sidebar_logo">
    <a href="#" class="text-center">
      <img alt="Logo" src="{{ asset('assets/img/Logo.png') }}" class="h-65px d-none d-sm-inline app-sidebar-logo-default theme-light-show" />
      <img alt="Logo" src="{{ asset('assets/img/Logo.png') }}" class="h-65px theme-dark-show" />
    </a>
    <div class="d-flex align-items-center d-lg-none ms-n3 me-1" title="Show aside menu">
      <div class="btn btn-icon btn-active-color-primary w-30px h-30px" id="kt_aside_mobile_toggle">
        <i class="ki-outline ki-abstract-14 fs-1"></i>
      </div>
    </div>
  </div>
  <div class="app-sidebar-menu overflow-hidden flex-column-fluid">
    <div id="kt_app_sidebar_menu_wrapper" class="app-sidebar-wrapper hover-scroll-overlay-y my-5 mx-3" data-kt-scroll="true" data-kt-scroll-activate="true" data-kt-scroll-height="auto" data-kt-scroll-dependencies="#kt_app_sidebar_logo, #kt_app_sidebar_footer" data-kt-scroll-wrappers="#kt_app_sidebar_menu" data-kt-scroll-offset="5px">
      <div class="menu menu-column menu-rounded menu-sub-indention fw-semibold px-1" id="#kt_app_sidebar_menu" data-kt-menu="true" data-kt-menu-expand="false">
        <div class="menu-item mb-5">
          <a class="btn btn-primary w-100" href="{{ route('home') }}">
            <span class="menu-title">Back to Home</span>
          </a>
        </div>
        <div class="menu-item">
          <a class="menu-link  @if($title == 'Dashboard') active @endif" href="{{ route('dashboard') }}">
            <span class="menu-icon">
              <i class="ki-outline ki-element-11 fs-2"></i>
            </span>
            <span class="menu-title">Dashboard</span>
          </a>
        </div>

        <div class="menu-item pt-5">
          <div class="menu-content">
            <span class="menu-heading fw-bold text-uppercase fs-7">
              Respondent
            </span>
          </div>
        </div>

        <div class="menu-item">
          <a class="menu-link @if($subTitle == 'Survei Pemahaman Panduan') active @endif" href="{{ route('comprehension-survey.read') }}">
            <span class="menu-icon">
              <i class="ki-outline ki-questionnaire-tablet fs-2"></i>
            </span>
            <span class="menu-title">Survei Pemahaman Panduan</span>
          </a>
        </div>
        
        <div class="menu-item">
          <a class="menu-link @if($subTitle == 'Survei Kepuasan Layanan') active @endif" href="{{ route('satisfaction-survey.read') }}">
            <span class="menu-icon">
              <i class="ki-outline ki-questionnaire-tablet fs-2"></i>
            </span>
            <span class="menu-title">Survei Kepuasan Layanan</span>
          </a>
        </div>
        
        <div class="menu-item pt-5">
          <div class="menu-content">
            <span class="menu-heading fw-bold text-uppercase fs-7">
              Setting
            </span>
          </div>
        </div>

          <div class="menu-item">
            <a class="menu-link @if($title == 'User') active @endif" href="{{ route('user') }}">
              <span class="menu-icon">
                <i class="ki-outline ki-user fs-2"></i>
              </span>
              <span class="menu-title">User Management</span>
            </a>
          </div>
      </div>
    </div>
  </div>
  <div class="app-sidebar-footer d-flex align-items-center px-8 pb-10" id="kt_app_sidebar_footer">
    <div class="">
      <div class="d-flex align-items-center" data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-overflow="true" data-kt-menu-placement="top-start">
        <div class="d-flex flex-center cursor-pointer symbol symbol-circle symbol-40px">
          <img src="{{ Auth::user()->photo_path ? Storage::url(Auth::user()->photo_path) : 'https://ui-avatars.com/api/?background=F8F5FF&color=7239EA&bold=true&name='.Auth::user()->name}}" alt="image" />
        </div>
        <div class="d-flex flex-column align-items-start justify-content-center ms-3">
          <span class="text-gray-500 fs-8 fw-semibold">Hello</span>
          <a href="#" class="text-gray-800 fs-7 fw-bold text-hover-primary">{{ Auth::user()->name }}</a>
        </div>
      </div>
      <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-color fw-semibold py-4 fs-6 w-275px" data-kt-menu="true">
        <div class="menu-item px-3">
          <div class="menu-content d-flex align-items-center px-3">
            <div class="symbol symbol-50px me-5">
              <img alt="Logo" src="{{ Auth::user()->photo_path ? Storage::url(Auth::user()->photo_path) : 'https://ui-avatars.com/api/?background=F8F5FF&color=7239EA&bold=true&name='.Auth::user()->name}}" />
            </div>
            <div class="d-flex flex-column">
              <div class="fw-bold d-flex align-items-center fs-5">{{ Auth::user()->name }}</div>
              <span class="fw-semibold text-muted text-hover-primary fs-7">
                @if (Auth::user()->role == 'user')
                    {{ Auth::user()->class }} - {{ Auth::user()->major}} 
                @else
                  {{ Auth::user()->email }}</span>
                @endif
            </div>
          </div>
        </div>
        <div class="separator my-2"></div>
        <div class="menu-item px-5">
          <a href="{{ route('profile') }}" class="menu-link px-5">My Profile</a>
        </div>
        <div class="menu-item px-5">
          <a href="{{ route('logout') }}" class="menu-link px-5">Sign Out</a>
        </div>
      </div>
    </div>
  </div>
</div>