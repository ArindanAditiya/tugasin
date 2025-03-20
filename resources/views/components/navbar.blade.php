{{-- navbar --}}

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