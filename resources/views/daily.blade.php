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
      <div class="card-footer mt-3 row g-3" style="background-color: #fdfcf3">
        <p>📝 Tambah Kerjaan baru :</p>
        <p><span class="text-danger" id="startCheck">harus lebih besar</span></p>
        <div class="col-md-3">
          <label for="inputMulai" class="form-label">⏱️Mulai</label>
          <div class="input-group mb-3">
            <input id="inputMulai" name="time" type="button" value="00:00" class="btn btn-secondary form-control w-auto" style="background-color: #ff8f70; border: none">
            
          </div>
        </div>
      
        <div class="col-md-3">
          <label for="inputSelesai" class="form-label">⏳Selesai</span></label>
          <div class="input-group mb-3">
            <input id="inputSelesai" name="time" type="button" value="00:00" class="btn btn-secondary form-control w-auto" style="background-color: #e07a5f; border: none">
          </div>
        </div>
      
        <div class="col-md-6">
          <label for="inputAmount" class="form-label">🎯Kerjaan</label>
          <div class="input-group">
            <input placeholder="......" type="text" id="inputAmount" class="form-control" aria-label="Amount (to the nearest dollar)" />
            <button class="input-group-text btn text-white" style="background-color: #e07a5f; border: none">Add</button>
          </div>
        </div>

        <div id="indicator" style="margin-top: -10px; " class="col-md-6 text-center d-none">
          <span class="text-warning" id="startCheck">waktu selesai harus lebih lambat dari waktu mulai</span>
        </div>
      </div>
      {{----}}

    </div>
  </main>
</x-layout>