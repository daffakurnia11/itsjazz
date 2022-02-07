<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="/vendor/bootstrap/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="/vendor/fontawesome-free/css/all.css">
  <link rel="stylesheet" href="/css/style.css?modify={{ date("Ymdhis") }}">
  <link rel="shortcut icon" href="/img/logo-only.png" type="image/x-icon">

  <title>{{ $title }} - ITS Jazz</title>
</head>

<body>

  @yield('navbar')

  @yield('content')

  @yield('footer')

  <!-- Javascript -->
  <script src="/vendor/bootstrap/dist/js/bootstrap.bundle.js"></script>
  <script src="/vendor/jquery/dist/jquery.js"></script>
  <script src="/vendor/sweetalert2/dist/sweetalert2.all.js"></script>
  <script src="/js/script.js?modify={{ date("Ymdhis") }}"></script>
  <script>
    $(window).scroll(function () {
      var scroll = $(window).scrollTop();
      var height = 150;

      if (scroll >= height) {
        $(".navbar").addClass('bg-dark');
      } else {
        $(".navbar").removeClass('bg-dark');
      }
    });
  </script>
</body>

</html>