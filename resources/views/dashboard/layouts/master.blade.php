<!DOCTYPE html>
<html lang="en">
  <head>
    @include('dashboard.layouts.partials._head')
  </head>

  <body>

    @include('dashboard.layouts.partials._nav')

    <div class="container">
      @include('dashboard.layouts.partials._messages')

      @yield('content')

      @include('dashboard.layouts.partials._footer')

    </div> <!-- end of .container -->

        @include('dashboard.layouts.partials._javascript')

        @yield('scripts')

  </body>
</html>
