<!DOCTYPE html>
<html lang="en">

<head>
@include('includes.head')
</head>

<body>
    <div class="container-xxl bg-white p-0">
        <!-- Spinner Start -->
        @include('includes.spinner')
        <!-- Spinner End -->

        <!-- Navbar Start -->
        @include('includes.navBar')
        <!-- Navbar End -->

        <!-- Carousel Start -->
        @include('includes.carousel')
        <!-- Carousel End -->

        <!-- Facilities Start -->
        @include('includes.facilities')
        <!-- Facilities End -->

        <!-- About Start -->
        @include('includes.about')
        <!-- About End -->

        <!-- Call To Action Start -->
        @include('includes.callToAction')
        <!-- Call To Action End -->

        <!-- Classes Start -->
        @include('includes.classes')
        <!-- Classes End -->

        <!-- Appointment Start -->
        @include('includes.appointment')
        <!-- Appointment End -->

        <!-- Team Start -->
        @include('includes.team')
        <!-- Team End -->

        <!-- Testimonial Start -->
        @include('includes.testimonial')
        <!-- Testimonial End -->


        <!-- Footer Start -->
        @include('includes.footer')
        <!-- Footer End -->

        <!-- Back to Top -->
        @include('includes.backToTop')
    </div>

   <!-- JavaScript Libraries -->
     @include('includes.footerJS')
</body>

</html>