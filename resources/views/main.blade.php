<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<html lang="en">
  <head>
     @include('partials._head')
  </head>

  <body>
    <!-- Side Navbar -->
    @include('partials._side_nav')
    <div class="page">
      <!-- navbar-->
      @include('partials._top_nav')
      <!-- Counts Section -->
      @yield('content')
      
  
     @include('partials._footer')
    </div>
   @include('partials._javascript')
   @yield('scripts')
  </body>
</html>