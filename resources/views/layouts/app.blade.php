<!DOCTYPE html>
<html lang="en">
<head>
    <title>EventHUB</title>
    <link rel="stylesheet" href="/css/app.css">
</head>
<body>
    @include('inc.navbar')
  <div class="container">
    @if(Request::is('/'))
      @include('inc.showcase')
    @endif
    @yield('content')
  </div>
  <footer id="footer" class="text-center">
    <p>Copyright 2019 &copy; EventHUB</p>
  </footer>  
</body>
</html>