<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Dashboard - SB Admin</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link rel="stylesheet" href="{{ asset('backend/css/styles.css') }}">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
            
        <!-- header  -->
        @include('partials.header')
        <!-- header end -->
        
        <div id="layoutSidenav">
            <!-- sidebar -->
            @include('partials.sidebar')
            <!-- sidebar end -->
            <div id="layoutSidenav_content">
                <main>
                    @yield('admin-content')
                </main>
                <!-- footer -->
                @include('partials.footer')
                <!-- footer end -->
               
            </div>
        </div>
        
        <script src="{{ asset('backend/js/time.js') }}"></script>
        <script src="{{ asset('widget.time.is/t.js') }}"></script>
        <script src="{{ asset('js/script.js') }}"></script>
        <script>
            time_is_widget.init({Dhaka_z412:{time_format:"12hours:minutesAMPM"}});
        </script>
        <script src="https://cdn.ckeditor.com/ckeditor5/11.0.1/classic/ckeditor.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="{{ asset('backend/js/scripts.js') }}"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="{{ asset('backend/assets/demo/chart-area-demo.js') }}"></script>
        <script src="{{ asset('backend/assets/demo/chart-bar-demo.js') }}"></script>
        <script src="{{ asset('backend/assets/demo/chart-pie-demo.js') }}"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="{{ asset('backend/js/datatables-simple-demo.js') }}"></script>
    </body>
</html>
