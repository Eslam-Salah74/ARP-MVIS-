<!DOCTYPE html>
<html lang="{{ LaravelLocalization::getCurrentLocale() }}" data-x-toggle="html-overflow-hidden" dir="{{ LaravelLocalization::getCurrentLocale() == 'ar' ? 'rtl' : 'ltr' }}">

<!--!--------------- Header Start -->
@include('layouts.header')
<!--!--------------- Header End -->
<!-- <div id="pills-home_1" class="tab-content d-block container-xxl px-lg-5 w-100"></div> -->

<body>

    <!-- Spinner Start -->

    <!-- Spinner End -->

    <!--!--------------- Navbar Start -->
    
        @include('layouts.navbar')
    <!--!--------------- Navbar End -->





    @yield('content')



    <!--//-------------- Footer Start -->
    @include('layouts.footer')
    <!--//-------------- Footer End -->
    <!--//-------------- Footer Start -->

   <!--//-------------- Scripts Start -->
    @include('layouts.scripts')
   <!--//-------------- Scripts End -->


</body>

</html>
