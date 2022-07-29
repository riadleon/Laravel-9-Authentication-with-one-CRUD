<!DOCTYPE html>
<html lang="en">

<!--head start-->
@include('backend.layouts.partials.head')
<!--head end-->

<body>
    <!--preloader start-->

    @include('backend.layouts.partials.preloader')

    <!--preloader end-->

    <!-- Main wrapper start-->
    <div id="main-wrapper">

        <!--navbar start-->
        @include('backend.layouts.partials.nav')
        <!--navbar end-->

        <!--chatbox start-->
        @include('backend.layouts.partials.chatbox')
        <!--chatbox end-->

        <!--Header start-->
        @include('backend.layouts.partials.header')
        <!--Header end-->

        <!--sidebar start-->
        @include('backend.layouts.partials.aside')
        <!--sidebar end-->

        <!--content start-->
        @yield('content')
        @yield('product_content')
        @yield('category_content')
        <!--sidebar end-->

        <!--footer start-->
        <br><br>
        @include('backend.layouts.partials.footer')

        <!--footer end-->

        <!--support ticket button start-->

        <!--support ticket button end-->


    </div>
    <!--main wrapper end-->

    <!--scripts start-->
    @include('backend.layouts.partials.scripts')
    <!--scripts end-->

</body>

</html>
