{{-- daily task --}}
<x-layout>
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
       
        {{-- todo component --}}
        <x-todo>{!! $todos !!}</x-todo>       

      </div>

      <!-- add new -->
      <form action="{{ route("daily.task.insert") }}" method="POST">
        @csrf
        <div class="card-footer mt-3 row g-3" style="background-color: #fdfcf3">
          <h4>📝 Tambah Kerjaan baru</h4>
          {{-- kalau berhasil --}}
          @if (session()->has('success'))
              <script>
                const Toast = Swal.mixin({
                toast: true,
                position: "top-end",
                showConfirmButton: false,
                timer: 3000,
                timerProgressBar: true,
                didOpen: (toast) => {
                  toast.onmouseenter = Swal.stopTimer;
                  toast.onmouseleave = Swal.resumeTimer;
                }
            });
            Toast.fire({
              icon: "success",
              title: "{{ session('success') }}"
            });
              </script>
          @endif

          {{-- kalau error --}}
          @if ($errors->any())
              <div class="alert alert-danger border-0 rounded-3 shadow-sm p-3 mb-4">
                  <h5 class="mb-2 fw-semibold"><i class="bi bi-exclamation-triangle-fill me-2"></i>Ups! Ada yang salah:</h5>
                  <ul class="mb-0 ps-3">
                      @foreach ($errors->all() as $error)
                          <li class="small">{{ $error }}</li>
                      @endforeach
                  </ul>
              </div>
          @endif


<!-- Create Post Form -->
          <div class="col-md-3">
            <label for="inputMulai" class="form-label">⏱️Mulai</label>
            <div class="input-group mb-3">
              <input id="inputMulai" name="start" type="text" value="00:00" class="btn btn-secondary form-control w-auto" style="background-color: #ff8f70; border: none">
            </div>
          </div>
        
          <div class="col-md-3">
            <label for="inputSelesai" class="form-label">⏳Selesai</span></label>
            <div class="input-group mb-3">
              <input id="inputSelesai" name="end" type="text" value="00:00" class="btn btn-secondary form-control w-auto" style="background-color: #e07a5f; border: none">
            </div>
          </div>
        
          <div class="col-md-6">
            <label for="inputAmount" class="form-label">🎯tugas <b><span id="countAndEnd" class=""><span id="count">0</span>/20</span></b></label>
            <div class="input-group">
              <input value="{{ old('task') }}" name="task" placeholder="......" type="text" id="inputAmount" class="form-control" aria-label="Amount (to the nearest dollar)" />
              <button class="input-group-text btn text-white" style="background-color: #e07a5f; border: none">Add</button>
            </div>
          </div>
  
          <div id="indicator" style="margin-top: -10px; " class="col-md-6 text-center d-none">
            <span class="text-warning" id="startCheck">waktu selesai harus lebih lambat dari waktu mulai</span>
          </div>
        </div>
      </form>
      {{----}}

    </div>
  </main>
</x-layout>