<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Ruaslab webpage</title>

  <meta name="author" content="Igor Cervenka">

  <link href="{{ URL::asset('css/bootstrap.min.css') }}" , rel="stylesheet">
  <link href="{{ URL::asset('css/justifiedGallery.min.css') }}" , rel="stylesheet">
  <link href="{{ URL::asset('css/lightgallery.min.css') }}" , rel="stylesheet">
  <link href="{{ URL::asset('css/app.css') }}" , rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.9.0/css/all.css" />
  <link rel="icon" type="image/png" href="{{ URL::asset('favicon.ico') }}" sizes="32x32"/>
</head>

<body class="px-0">
  @include('partials.navbar')
  <main>
    <div class="container-fluid px-0">
      <div class="page-header"
        style="background-image:linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)), url(@yield('page_header'));">
        <div class="centered">
          <h1 class="display-4 page-title">@yield('page_title')</h1>
          <h3>@yield('page_subtitle')</h3>
        </div>
      </div>
      <hr class="hr-divider">
    </div>
      <button class="btn" onclick="topFunction()" id="scrollTop" title="Go to top">
        <i class="fas fa-arrow-up"></i>
      </button>
      @yield('page_content')
  </main>
  @include('partials.footer')
  @include('partials.page_bottom')
</body>
<script src="{{ URL::asset('js/jquery.min.js') }}"></script>
<script src="{{ URL::asset('js/popper.min.js') }}"></script>
<script src="{{ URL::asset('js/bootstrap.min.js') }}"></script>
<script src="{{ URL::asset('js/jquery.justifiedGallery.min.js') }}"></script>
<script src="{{ URL::asset('js/lightgallery.min.js') }}"></script>
<script src="{{ URL::asset('js/lg-autoplay.min.js') }}"></script>
<script src="{{ URL::asset('js/lg-thumbnail.min.js') }}"></script>
<script src="{{ URL::asset('js/app.js') }}"></script>

</html>
