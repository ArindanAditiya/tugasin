<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>tugasin</title>

    {{-- icon --}}    
    <link rel="icon" type="image/x-icon" href="{{ asset("img/logo.ico") }}">

    <!-- logo fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet" />

    <!-- cdn bootsrtap5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <!-- bootstrap5 local -->
    <link href="{{ asset("bootstrap5/css/bootstrap.min.css") }}" rel="stylesheet" />
    <script src="{{ asset("bootstrap5/js/bootstrap.bundle.min.js") }}"></script>

    <!-- local css -->
    <link rel="stylesheet" href={{ asset("css/style.css") }} />

    <!-- bootstrap5 icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" />
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
    <script src={{ asset("js/ui.js") }}></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
      // Inisialisasi tooltip
      document.addEventListener("DOMContentLoaded", function () {
        var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
        var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
          return new bootstrap.Tooltip(tooltipTriggerEl);
        });
      });
    </script>
  </body>
</html>
