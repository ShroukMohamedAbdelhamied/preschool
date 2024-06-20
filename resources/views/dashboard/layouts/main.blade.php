<!DOCTYPE html>
<html lang="en">
  <head>
  @include('dashboard.includesdash.head')
  </head>
  <body>
    
      @include('dashboard.includesdash.sideBar')

      @include('dashboard.includesdash.navBar')

      @yield('content')

      @include('dashboard.includesdash.footer')

      @include('dashboard.includesdash.customTemplate')

      @include('dashboard.includesdash.footerJS')

  </body>
</html>
