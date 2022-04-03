<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="{{ asset('frontend/assets/img/favicon.png') }}" type="image/x-icon">
    <title>Link Up Technology</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('frontend/vendors/glightbox/css/glightbox.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/vendors/Icon/css/all.min.css') }}">
    <!-- <link rel="stylesheet" href="lightbox//minified/bootstrap-gallery.min.css"> -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/style.css') }}">
</head>
<body>
    <!-- Header -->
    @include('partials/web_header')
    <!-- End Header -->
    <main class="px-md-5">
      @yield('home_content')
    </main>
    <!-- End Main -->
    @include('partials/web_footer')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="{{ asset('frontend/vendors/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('frontend/vendors/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <!-- Template Main JS File -->
    <script src="{{ asset('frontend/assets/js/main.js') }}"></script>
  </body>
</html>