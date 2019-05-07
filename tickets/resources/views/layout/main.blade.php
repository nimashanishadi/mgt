
<!doctype html>
<html lang="en">
  @include('partials.head')
  <body>
  @include('partials.nav')

<div class="container-fluid">
  <div class="row">
    
  @include('partials.sidebar')
  
  @yield('content')

  </div>
</div>
@include('partials.script')
</body>
</html>
