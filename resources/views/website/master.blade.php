<!DOCTYPE html>
<html lang="zxx">

@include('website.partials.head')
@stack('css')
<body>
  
  <div id="tst-app" class="tst-app">

    <!-- top bar frame -->
    @include('website.partials.topbar')
    <!-- top bar frame -->

    @include('website.partials.dynamic-banner')

    @include('website.partials.dynamic-content')
    @yield('content')
    <!-- footer -->
    @include('website.partials.footer')
    <!-- footer end -->

    <!-- popup -->
    @include('website.modules.reservation')
    <!-- popup end -->
  </div>

  <!-- jquery js -->
  @include('website.partials.footer-js')
  
  @stack('js')
</body>

</html>
