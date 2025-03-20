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
      <!-- Sidebar -->
      <nav id="sidebar" class="col-md-3 col-lg-2 d-md-block sidebar py-5 shadow|| content-1 sidebar-close">
        <h4 class="text-center">Daily</h4>
        <span class="text-start actived-day"> Monday</span>
        <span class="text-start disabled-day"># Tuesday</span>
        <span class="text-start disabled-day"># Wednesday</span>
        <span class="text-start disabled-day"># Thursday</span>
        <span class="text-start disabled-day"># Friday</span>
        <span class="text-start disabled-day"># Saturday</span>
        <span class="text-start disabled-day"># Sunday</span>
      </nav>

      <!-- Main Content -->
      <div class="content-2 position-relative">
        <nav class="navbar ps-5" style="background-color: #f4f1de">
          <div class="container">
            <button class="toggle" onclick="toggleSidebar()"><i class="bi bi-list"></i></button>
            <a href="#" class="navbar-brand">
              <img src="{{ asset("img/logo.ico") }}" alt="" class="logo" />
              <span class="poppins-besar">tugasin</span>
              <span class="poppins-kecil">.com</span>
            </a>
            <div class="d-flex" role="search">
              <button class="btn btn-light mx-2 text-white" style="background-color: #ff8f70; border: none"><i class="bi bi-box-arrow-in-right"></i> SignIn</button>
              <button class="btn mx-2 text-white" style="background-color: #e07a5f; border: none"><i class="bi bi-person-plus"></i> SignUp</button>
              <!-- <div class="dropdown ms-auto">
                      <a class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" href="#" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="example.jpg" alt="Profile" class="rounded-circle" width="40" height="40" />
                      </a>
                      <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownUser1">
                        <li><a class="dropdown-item" href="#">New project...</a></li>
                        <li><a class="dropdown-item" href="#">Settings</a></li>
                        <li><a class="dropdown-item" href="#">Profile</a></li>
                        <li><hr class="dropdown-divider" /></li>
                        <li><a class="dropdown-item" href="#">Sign out</a></li>
                      </ul>
                    </div> -->
            </div>
          </div>
        </nav>
        <main class="col-md-9 col-lg-9 p-4 mx-auto">
          <h2 class="mb-3">To-Do List</h2>
          <p class="text-secondary">Monday | 16 January 2005</p>

          <div class="todo-card card">
            <ul class="nav nav-tabs">
              <li class="nav-item">
                <a class="nav-link text-secondary active" aria-current="page" href="#">To-do</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-secondary" aria-current="page" href="#">History</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-secondary" aria-current="page" href="#">progress</a>
              </li>
            </ul>
            <p class="mt-3"><b>3/10</b> To-do Sloved Today</p>
            <div class="d-flex flex-wrap gap-2">
              <!-- lagi dikerjakan -->
              <span class="badge bg-light text-dark d-flex align-items-center border p-2 gap-2">
                <mark>10:10 - 11:10</mark> Bangun pagi

                <!-- 1 EDIT -->
                <button type="button" class="btn-ghoib" data-bs-toggle="modal" data-bs-target="#edit" data-bs-placement="top" title="Edit">
                  <i class="bi bi-pen"></i>
                </button>
                <!-- modalEdit -->
                <div class="modal fade" id="edit" tabindex="-1" aria-labelledby="editLabel" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content" style="background-color: #fdfcf3">
                      <div class="modal-header">
                        <h1 class="modal-title fs-5" id="editLabel">Edit Task</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                        <div class="mt-3 mb-3 d-flex gap-2">
                          <input type="time" class="form-control w-auto" />
                          <span style="font-size: large"><b>-</b></span>
                          <input type="time" class="form-control w-auto" />
                        </div>
                        <input type="text" class="form-control" value="edit" />
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn text-white" style="background-color: #e07a5f">Save changes</button>
                      </div>
                    </div>
                  </div>
                </div>

                <!-- 2. HAPUS -->
                <form action="" method="post" class="d-inline">
                  <button class="btn-ghoib" data-bs-toggle="tooltip" data-bs-placement="top" title="Hapus">
                    <i class="bi bi-x-lg"></i>
                  </button>
                </form>

                <!-- 3. SELESAI -->
                <form action="" method="post" class="d-inline">
                  <button class="btn-ghoib" data-bs-toggle="tooltip" data-bs-placement="top" title="Selesai">
                    <i class="bi bi-check-lg"></i>
                  </button>
                </form>
              </span>

              <!-- berhasil -->
              <span class="badge d-flex align-items-center border p-2 gap-2 position-relative" style="color: rgb(2, 97, 2); background-color: rgb(233, 247, 233)">
                <span class="position-absolute top-0 translate-middle" style="font-size: large">
                  ✔️
                  <span class="visually-hidden">unread messages</span>
                </span>
                <mark>10:10 - 11:10</mark> Bangun pagi
              </span>

              <!-- gagal -->
              <span class="badge d-flex align-items-center border p-2 gap-2 position-relative" style="color: rgb(158, 2, 2); background-color: rgb(246, 213, 213)">
                <span class="position-absolute top-0 translate-middle" style="font-size: large">
                  ❌
                  <span class="visually-hidden">unread messages</span>
                </span>
                <mark><del>10:10 - 11:10</del></mark
                ><del> 10:10 - 11:10</del>
              </span>
            </div>

            <!-- add new -->
            <div class="card-footer mt-3" style="background-color: #fdfcf3">
              <div class="mt-3 mb-3 d-flex gap-2">
                <span>Dari</span>
                <input type="time" class="form-control w-auto" />
                <span>Sampai dengan</span>
                <input type="time" class="form-control w-auto" />
              </div>
              <div class="input-group mb-3 mx-auto">
                <label for="task">Tugas :&nbsp;</label>
                <span class="input-group-text">🎯</span>
                <input id="task" type="text" class="form-control" aria-label="Amount (to the nearest dollar)" />
                <button class="input-group-text btn text-white" style="background-color: #e07a5f; border: none">add</button>
              </div>
            </div>
          </div>
        </main>
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
