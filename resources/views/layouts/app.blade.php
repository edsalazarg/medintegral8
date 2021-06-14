<!doctype html>
<html lang="en">
<head><base href="../../">
    <meta charset="utf-8" />
    <title>Medicina Integral</title>
    <meta name="description" content="Page with empty content" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="canonical" href="https://keenthemes.com/metronic" />
    <!--begin::Fonts-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
    <!--end::Fonts-->
    <!--begin::Page Vendors Styles(used by this page)-->
    <link href={{asset("dist/assets/plugins/custom/fullcalendar/fullcalendar.bundle.css")}} rel="stylesheet" type="text/css" />
    <!--end::Page Vendors Styles-->
    <!--begin::Global Theme Styles(used by all pages)-->
    <link href={{asset("dist/assets/plugins/global/plugins.bundle.css")}} rel="stylesheet" type="text/css" />
    <link href={{asset("dist/assets/plugins/custom/prismjs/prismjs.bundle.css")}} rel="stylesheet" type="text/css" />
    <link href={{asset("dist/assets/css/style.bundle.css")}} rel="stylesheet" type="text/css" />
    <!--end::Global Theme Styles-->
    <!--begin::Layout Themes(used by all pages)-->
    <!--end::Layout Themes-->
    <link rel="shortcut icon" href={{asset("dist/assets/media/logos/favicon.ico")}} />
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Medicina Integral - @yield('title')</title>
</head>
<body id="kt_body" class="header-mobile-fixed subheader-enabled aside-enabled aside-fixed aside-secondary-enabled aside-minimize">

<!--Jairo start-->
<!--begin::Main-->
<div style="margin: auto; width: 70%" class="">
    {{--    <a href="{{route('home.index')}}">Home</a>--}}
    {{--    <a href="{{route('home.contact')}}">Contact</a>--}}
    {{--    <a href="{{route('patients.index')}}">Patients</a>--}}
    <span style="float: right">
        @guest
            <a href="{{route('auth.login')}}">Login</a>
            <a style="padding: 20px" href="{{route('auth.register')}}">Register</a>
        @endguest
        @auth
            <form style="display: inline-block" action="{{ route('auth.logout') }}" method="post">
              @csrf
                <div>
                <span class="label label-pill label-inline">Usuario: {{Auth::user()->name}}</span>
                </div>
                    <button class="btn btn-light-primary font-weight-bolder" aria-haspopup="true" aria-expanded="false">
                    <span class="svg-icon svg-icon-md">
                        <!--begin::Svg Icon | path:/metronic/theme/html/demo3/dist/assets/media/svg/icons/Design/PenAndRuller.svg-->
                        </span>Cerrar sesion
                </button>
{{--              <button>Logout</button>--}}
          </form>
        @endauth
      </span>
    <div class="container ">
        @if(session('status'))
            <div style="background-color: red">
                {{session('status')}}
            </div>
        @endif
        @yield('content')
    </div>
</div>
<!--Jairo end-->
<div class="d-flex flex-column flex-root">
    <!--begin::Page-->
    <div class="d-flex flex-row flex-column-fluid page">
        <!--begin::Aside-->
        <div class="aside aside-left d-flex aside-fixed" id="kt_aside" style="width: 150px">
            <!--begin::Primary-->
            <div class="aside-primary d-flex flex-column align-items-center flex-row-auto " style="width: 150px">
                <!--begin::Brand-->
                <div class="aside-brand d-flex flex-column align-items-center flex-column-auto py-2 py-lg-12">
                    <!--begin::Logo-->
                    <a href="/patients">
                        <img alt="Logo" src={{asset("images/logo_udg.png")}} class="max-h-70px" />
                    </a>
                    <!--end::Logo-->
                </div>
                <!--end::Brand-->
                <!--begin::Nav Wrapper-->
                <div>
                    <!--begin::Nav-->
                    <ul class="nav flex-column" role="tablist">
                        <!--begin::Item-->
                        <li class="nav-item mb-3" data-placement="right" data-container="body" data-boundary="window">
                            <div class="hover-box" onclick="location.href='/users';">
                                <a data-toggle="tab" data-target="#kt_aside_tab_1" role="tab">
                                    <span class="svg-icon svg-icon-primary svg-icon-2x">
                                        <!--begin::Svg Icon | path:/var/www/preview.keenthemes.com/metronic/releases/2021-05-14-112058/theme/html/demo3/dist/../src/media/svg/icons/Communication/Contact1.svg-->
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <rect x="0" y="0" width="24" height="24"/>
                                            <circle fill="#000000" opacity="0.3" cx="12" cy="12" r="10"/>
                                            <path d="M12,11 C10.8954305,11 10,10.1045695 10,9 C10,7.8954305 10.8954305,7 12,7 C13.1045695,7 14,7.8954305 14,9 C14,10.1045695 13.1045695,11 12,11 Z M7.00036205,16.4995035 C7.21569918,13.5165724 9.36772908,12 11.9907452,12 C14.6506758,12 16.8360465,13.4332455 16.9988413,16.5 C17.0053266,16.6221713 16.9988413,17 16.5815,17 L7.4041679,17 C7.26484009,17 6.98863236,16.6619875 7.00036205,16.4995035 Z" fill="#000000" opacity="0.3"/>
                                            </g>
                                        </svg>
                                        <!--end::Svg Icon-->
                                    </span>
                                    <span class="menu-text" style="color:black">
                                        Usuarios
                                    </span>
                                </a>
                            </div>
                        </li>
                        <br>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <li class="nav-item mb-3" data-placement="right" data-container="body" data-boundary="window">
                            <div class="hover-box" onclick="location.href='/patients';">
                                <a data-toggle="tab" data-target="#kt_aside_tab_2" role="tab">
                            <span class="svg-icon svg-icon-primary svg-icon-2x"><!--begin::Svg Icon | path:/var/www/preview.keenthemes.com/metronic/releases/2021-05-14-112058/theme/html/demo3/dist/../src/media/svg/icons/Communication/Group.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <polygon points="0 0 24 0 24 24 0 24"/>
                                    <path d="M18,14 C16.3431458,14 15,12.6568542 15,11 C15,9.34314575 16.3431458,8 18,8 C19.6568542,8 21,9.34314575 21,11 C21,12.6568542 19.6568542,14 18,14 Z M9,11 C6.790861,11 5,9.209139 5,7 C5,4.790861 6.790861,3 9,3 C11.209139,3 13,4.790861 13,7 C13,9.209139 11.209139,11 9,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"/>
                                    <path d="M17.6011961,15.0006174 C21.0077043,15.0378534 23.7891749,16.7601418 23.9984937,20.4 C24.0069246,20.5466056 23.9984937,21 23.4559499,21 L19.6,21 C19.6,18.7490654 18.8562935,16.6718327 17.6011961,15.0006174 Z M0.00065168429,20.1992055 C0.388258525,15.4265159 4.26191235,13 8.98334134,13 C13.7712164,13 17.7048837,15.2931929 17.9979143,20.2 C18.0095879,20.3954741 17.9979143,21 17.2466999,21 C13.541124,21 8.03472472,21 0.727502227,21 C0.476712155,21 -0.0204617505,20.45918 0.00065168429,20.1992055 Z" fill="#000000" fill-rule="nonzero"/>
                                </g>
                            </svg><!--end::Svg Icon--></span>
                                    <span class="menu-text" style="color:black">Pacientes</span>
                                </a>
                            </div>
                        </li>
                        <br>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <li class="nav-item mb-3" data-placement="right" data-container="body" data-boundary="window">
                            <div class="hover-box">
                                <a href="#" data-toggle="tab" data-target="#kt_aside_tab_5" role="tab">
                                <span class="svg-icon svg-icon-primary svg-icon-2x"><!--begin::Svg Icon | path:/var/www/preview.keenthemes.com/metronic/releases/2021-05-14-112058/theme/html/demo3/dist/../src/media/svg/icons/Communication/Clipboard-list.svg-->
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <rect x="0" y="0" width="24" height="24"/>
                                            <path d="M8,3 L8,3.5 C8,4.32842712 8.67157288,5 9.5,5 L14.5,5 C15.3284271,5 16,4.32842712 16,3.5 L16,3 L18,3 C19.1045695,3 20,3.8954305 20,5 L20,21 C20,22.1045695 19.1045695,23 18,23 L6,23 C4.8954305,23 4,22.1045695 4,21 L4,5 C4,3.8954305 4.8954305,3 6,3 L8,3 Z" fill="#000000" opacity="0.3"/>
                                            <path d="M11,2 C11,1.44771525 11.4477153,1 12,1 C12.5522847,1 13,1.44771525 13,2 L14.5,2 C14.7761424,2 15,2.22385763 15,2.5 L15,3.5 C15,3.77614237 14.7761424,4 14.5,4 L9.5,4 C9.22385763,4 9,3.77614237 9,3.5 L9,2.5 C9,2.22385763 9.22385763,2 9.5,2 L11,2 Z" fill="#000000"/>
                                            <rect fill="#000000" opacity="0.3" x="10" y="9" width="7" height="2" rx="1"/>
                                            <rect fill="#000000" opacity="0.3" x="7" y="9" width="2" height="2" rx="1"/>
                                            <rect fill="#000000" opacity="0.3" x="7" y="13" width="2" height="2" rx="1"/>
                                            <rect fill="#000000" opacity="0.3" x="10" y="13" width="7" height="2" rx="1"/>
                                            <rect fill="#000000" opacity="0.3" x="7" y="17" width="2" height="2" rx="1"/>
                                            <rect fill="#000000" opacity="0.3" x="10" y="17" width="7" height="2" rx="1"/>
                                        </g>
                                    </svg><!--end::Svg Icon-->
                                </span>
                                <span class="menu-text" style="color:black">Citas
                                </span>
                                </a>
                            </div>
                        </li>
                        <br>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <li class="nav-item mb-3" data-placement="right" data-container="body" data-boundary="window">
                            <div class="hover-box" onclick="location.href='/med_records';">
                                <a href="#" data-toggle="tab" data-target="#kt_aside_tab_5" role="tab">
                               <span class="svg-icon svg-icon-primary svg-icon-2x"><!--begin::Svg Icon | path:/var/www/preview.keenthemes.com/metronic/releases/2021-05-14-112058/theme/html/demo3/dist/../src/media/svg/icons/Devices/Diagnostics.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <rect x="0" y="0" width="24" height="24"/>
                                        <rect fill="#000000" opacity="0.3" x="2" y="3" width="20" height="18" rx="2"/>
                                        <path d="M9.9486833,13.3162278 C9.81256925,13.7245699 9.43043041,14 9,14 L5,14 C4.44771525,14 4,13.5522847 4,13 C4,12.4477153 4.44771525,12 5,12 L8.27924078,12 L10.0513167,6.68377223 C10.367686,5.73466443 11.7274983,5.78688777 11.9701425,6.75746437 L13.8145063,14.1349195 L14.6055728,12.5527864 C14.7749648,12.2140024 15.1212279,12 15.5,12 L19,12 C19.5522847,12 20,12.4477153 20,13 C20,13.5522847 19.5522847,14 19,14 L16.118034,14 L14.3944272,17.4472136 C13.9792313,18.2776054 12.7550291,18.143222 12.5298575,17.2425356 L10.8627389,10.5740611 L9.9486833,13.3162278 Z" fill="#000000" fill-rule="nonzero"/>
                                        <circle fill="#000000" opacity="0.3" cx="19" cy="6" r="1"/>
                                    </g>
                                </svg>
                               </span>
                                    <span class="menu-text" style="color:black">Historial clinico</span>
                                </a>
                                <div>
                        </li>
                        <!--end::Item-->
                    </ul>
                    <!--end::Nav-->
                </div>
                <!--end::Nav Wrapper-->
                <!--begin::Footer-->
                <div class="aside-footer d-flex flex-column align-items-center flex-column-auto py-4 py-lg-10">
                    <!--begin::Aside Toggle-->
                    <!--end::Aside Toggle-->
                </div>
                <!--end::Footer-->
            </div>
            <!--end::Primary-->
            <!--begin::Secondary-->
            <!--end::Secondary-->
        </div>
        <!--end::Aside-->
        <!--begin::Wrapper-->
        <div class="d-flex flex-column flex-row-fluid wrapper" id="kt_wrapper">
            <!--begin::Content-->
            <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
                <!--begin::Subheader-->
                <div class="subheader py-3 py-lg-8 subheader-transparent" id="kt_subheader">
                    <div class="container d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
                        <!--begin::Info-->
                        <div class="d-flex align-items-center mr-1">
                            <!--begin::Page Heading-->
                            <!--end::Page Heading-->
                        </div>
                        <!--end::Info-->
                        <!--begin::Toolbar-->
                        <div class="d-flex align-items-center flex-wrap">


                        </div>
                        <!--end::Toolbar-->
                    </div>
                </div>
                <!--end::Subheader-->
                <!--begin::Entry-->
                <div class="d-flex flex-column-fluid">
                    <!--begin::Container-->
                    <!--end::Container-->
                </div>
                <!--end::Entry-->
            </div>
            <!--end::Content-->
            <!--begin::Footer-->
            <!--doc: add "bg-white" class to have footer with solod background color-->
            <div class="footer py-4 d-flex flex-lg-column" id="kt_footer">
                <!--begin::Container-->
                <div class="container d-flex flex-column flex-md-row align-items-center justify-content-between">
                    <!--begin::Copyright-->
                    <div class="text-dark order-2 order-md-1">
                        <span class="text-muted font-weight-bold mr-2">2021©</span>
                        <a href="http://keenthemes.com/metronic" target="_blank" class="text-dark-75 text-hover-primary">Keenthemes</a>
                    </div>
                    <!--end::Copyright-->
                    <!--begin::Nav-->
                    <div class="nav nav-dark order-1 order-md-2">
                        <a href="http://keenthemes.com/metronic" target="_blank" class="nav-link pr-3 pl-0">About</a>
                        <a href="http://keenthemes.com/metronic" target="_blank" class="nav-link px-3">Team</a>
                        <a href="http://keenthemes.com/metronic" target="_blank" class="nav-link pl-3 pr-0">Contact</a>
                    </div>
                    <!--end::Nav-->
                </div>
                <!--end::Container-->
            </div>
            <!--end::Footer-->
        </div>
        <!--end::Wrapper-->
    </div>
    <!--end::Page-->
</div>
<!--end::Main-->
<!--end::Demo Panel-->
<script>var HOST_URL = "https://preview.keenthemes.com/metronic/theme/html/tools/preview";</script>
<!--begin::Global Config(global config for global JS scripts)-->
<script>var KTAppSettings = { "breakpoints": { "sm": 576, "md": 768, "lg": 992, "xl": 1200, "xxl": 1200 }, "colors": { "theme": { "base": { "white": "#ffffff", "primary": "#1BC5BD", "secondary": "#E5EAEE", "success": "#1BC5BD", "info": "#6993FF", "warning": "#FFA800", "danger": "#F64E60", "light": "#F3F6F9", "dark": "#212121" }, "light": { "white": "#ffffff", "primary": "#1BC5BD", "secondary": "#ECF0F3", "success": "#C9F7F5", "info": "#E1E9FF", "warning": "#FFF4DE", "danger": "#FFE2E5", "light": "#F3F6F9", "dark": "#D6D6E0" }, "inverse": { "white": "#ffffff", "primary": "#ffffff", "secondary": "#212121", "success": "#ffffff", "info": "#ffffff", "warning": "#ffffff", "danger": "#ffffff", "light": "#464E5F", "dark": "#ffffff" } }, "gray": { "gray-100": "#F3F6F9", "gray-200": "#ECF0F3", "gray-300": "#E5EAEE", "gray-400": "#D6D6E0", "gray-500": "#B5B5C3", "gray-600": "#80808F", "gray-700": "#464E5F", "gray-800": "#1B283F", "gray-900": "#212121" } }, "font-family": "Poppins" };</script>
<!--end::Global Config-->
<!--begin::Global Theme Bundle(used by all pages)-->
<script src={{asset("dist/assets/plugins/global/plugins.bundle.js")}}></script>
<script src={{asset("dist/assets/plugins/custom/prismjs/prismjs.bundle.js")}}></script>
<script src={{asset("dist/assets/js/scripts.bundle.js")}}></script>
<!--end::Global Theme Bundle-->
<!--begin::Page Vendors(used by this page)-->
<script src={{asset("dist/assets/plugins/custom/fullcalendar/fullcalendar.bundle.js")}}></script>
<script src="//maps.google.com/maps/api/js?key=AIzaSyBTGnKT7dt597vo9QgeQ7BFhvSRP4eiMSM"></script>
<script src={{asset("dist/assets/plugins/custom/gmaps/gmaps.js")}}></script>
<!--end::Page Vendors-->
<!--begin::Page Scripts(used by this page)-->
<script src={{asset("dist/assets/js/pages/widgets.js")}}></script>
@yield("scripts")
</body>
</html>
