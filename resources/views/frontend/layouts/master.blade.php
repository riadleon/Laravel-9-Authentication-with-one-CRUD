

<!doctype html>
<html class="no-js" lang="zxx">

<!--head start-->
@include('frontend.layouts.partials.head')
<!--head end-->


<body>
    <!--[if lte IE 9]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
    <![endif]-->

    <!-- Add your site or application content here -->

<!-- Body main wrapper start -->
<div class="body-wrapper">

    <!-- HEADER AREA START (header-5) -->

    @include('frontend.layouts.partials.nav')

    <!-- HEADER AREA END -->

    <!-- Utilize Cart Menu Start -->
        @yield('cartmenu')
    <!-- Utilize Cart Menu End -->

    <!-- Utilize Mobile Menu Start -->
        @yield('mobilecart')
    <!-- Utilize Mobile Menu End -->

        @yield('content')

    <!-- FOOTER AREA START -->
    @include('frontend.layouts.partials.footer')
    <!-- FOOTER AREA END -->

    <!-- MODAL AREA START (Quick View Modal) -->
    @include('frontend.layouts.partials.modal')
    <!-- MODAL AREA END -->

</div>
<!-- Body main wrapper end -->

    <!-- preloader area start -->
    @include('frontend.layouts.partials.perloader')
    <!-- preloader area end -->

    <!-- All JS Plugins -->
    <script src="{{ asset('frontend')}}/js/plugins.js"></script>
    <!-- Main JS -->
    <script src="{{ asset('frontend')}}/js/main.js"></script>
  
</body>
</html>

