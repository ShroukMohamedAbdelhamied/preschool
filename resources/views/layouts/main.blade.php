<!DOCTYPE html>
<html lang="en">

<head>
@include('includes.head')
</head>

<body>
<div class="container-xxl bg-white p-0">

         <!-- Navbar Start -->
            @include('includes.navBar')
        <!-- Navbar End -->

        <!-- Spinner Start -->
        @include('includes.spinner')
        <!-- Spinner End -->

        @yield('content')
        
        <!-- Footer Start -->
                @include('includes.footer')
        <!-- Footer End -->

        <!-- Back to Top -->
        @include('includes.backToTop')

   <!-- JavaScript Libraries -->
     @include('includes.footerJS')
</body>

</html>