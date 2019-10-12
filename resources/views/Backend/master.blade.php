<!DOCTYPE html>
<html dir="rtl" lang="fa-IR">
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>وبسایت ساز و من</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{url('backend/dist/saz-o-man/assets/vendors/base/vendors.bundle.css')}}">
    <link rel="stylesheet" href="{{url('backend/dist/saz-o-man/assets/kg_style/base/style.bundle.rtl.css')}}">
    <link rel="stylesheet" href="{{url('backend/dist/saz-o-man/assets/vendors/custom/fullcalendar/fullcalendar.bundle.rtl.css')}}">
    <link rel="stylesheet" href="{{url('backend/dist/saz-o-man/assets/vendors/custom/fullcalendar/fullcalendar.bundle.css')}}">


{{--    <link rel="stylesheet" href="{{url('admin')}}">--}}
    <link rel="stylesheet" href="{{url('backend/dist/saz-o-man/assets/kg_style/base/bootstrap-fileinput.css')}}">
    <link rel="stylesheet" href="{{url('backend/dist/saz-o-man/assets/kg_style/base/profile.min.css')}}">
    <link rel="stylesheet" href="{{url('backend/dist/saz-o-man/assets/kg_style/base/toastr.min.css')}}">

    {{--<link rel="stylesheet" href="{{url('backend/dist/saz-o-man/assets/kg_style/base/colorpicker.css')}}">--}}
    <link rel="stylesheet" href="{{url('backend/dist/saz-o-man/assets/kg_style/base/jquery.minicolors.css')}}">

    <link rel="stylesheet" href="{{url('backend/dist/saz-o-man/assets/kg_style/base/bootstrap-multiselect.css')}}">
{{--    <link rel="stylesheet" href="{{url('backend/dist/demo5/assets/demo/demo5/base/jquery.dataTables.min.css')}}">--}}
    <link rel="shortcut icon" href="{{url('backend/dist/saz-o-man/assets/kg_style/media/img/logo/favicon.ico')}}" />
    <link rel="shortcut icon" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/2.3.2/css/bootstrap-responsive.min.css" />
    <link rel="shortcut icon" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/2.3.2/css/bootstrap-responsive.css" />

    {{--{!! Toastr::render() !!}--}}
    <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js"></script>
    <script>
        WebFont.load({
            google: {"families":["Poppins:300,400,500,600,700","Roboto:300,400,500,600,700"]},
            active: function() {
                sessionStorage.fonts = true;
            }
        });
    </script>

    @yield('styles')
    <!--end::Page Vendors -->
    <!--end::Base Styles -->
</head>

<body  class="m-page--wide m-header--fixed m-header--fixed-mobile m-footer--push m-aside--offcanvas-default" >
<div class="m-grid m-grid--hor m-grid--root m-page">

    <header id="m_header" class="m-grid__item		m-header "  m-minimize="minimize" m-minimize-offset="200" m-minimize-mobile-offset="200">
        @include('Backend.section.header')
    </header>

        @yield('content')


    @include('Backend.section.sidebar')
    @include('Backend.section.footer')

</div>

</body>
</html>
