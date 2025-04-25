<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>tugasin</title>

    {{-- colorpicker --}}
    <script src="{{ asset("js/jquery-1.11.0.min.js") }}"></script>
    <script src="{{ asset("js/jquery-clockpicker.min.js") }}"></script>
    <link rel="stylesheet" href="{{ asset("css/jquery-clockpicker.min.css") }}"></link>

    {{-- icon --}}    
    <link rel="icon" type="image/x-icon" href="{{ asset("img/logo.ico") }}">

    <!-- logo fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet" />

    <!-- bootstrap5 local -->
    <link href="{{ asset("bootstrap5/css/bootstrap.min.css") }}" rel="stylesheet" />
    <script src="{{ asset("bootstrap5/js/bootstrap.bundle.min.js") }}"></script>

    <!-- style mandiri -->
    <link rel="stylesheet" href={{ asset("css/style.css") }} />
    <link rel="stylesheet" href={{ asset("css/sidebarjjjj.css") }} />
    <link rel="stylesheet" href={{ asset("css/clockvalidate.css") }} />
    <link rel="stylesheet" href={{ asset("css/taskvalidate.css") }} />


    <!-- bootstrap5 icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" />

    {{-- sweetAlert 2 --}}
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  </head>
  <body>
    <div class="griding">

      {{-- sidebar --}}
      <x-sidebar></x-sidebar>

      <!-- Main Content -->
      <div class="content-2 position-relative">
        
        {{-- navbar --}}
        <x-navbar></x-navbar>

        {{-- main --}}
        <div>
          {{ $slot }}
        </div>

      </div>
    </div>

    {{-- bootstrap5 --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    {{-- script mandiri --}}
    <script src={{ asset("js/ui.js") }}?v={{ time() }}></script>
    <script src={{ asset("js/sidebar.js") }}?v={{ time() }}></script>
    <script src={{ asset("js/tooltip.js") }}?v={{ time() }}></script>
    <script src={{ asset("js/clockpicker.js") }}?v={{ time() }}></script>
    <script src={{ asset("js/clockformater.js") }}?v={{ time() }}></script>
    <script src={{ asset("js/taskhandler.js") }}?v={{ time() }}></script>
    <script src={{ asset("js/deleteconfirm.js") }}?v={{ time() }}></script>
    <script src={{ asset("js/errormessegehandler.js") }}?v={{ time() }}></script>
  </body>
</html>


