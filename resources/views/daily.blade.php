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
       
        {{-- todo accordion --}}
        <x-todo>{!! $todos !!}</x-todo>

        {{-- @foreach ( $data as $eek)
          <p>1</p>
        @endforeach --}}

      </div>

      <!-- add new -->
      <div class="card-footer mt-3" style="background-color: #fdfcf3">
        <div class="mt-3 mb-3 d-flex gap-2">
          <span>Waktu :</span>
          <input type="time" class="form-control w-auto" />
          <span><i class="bi bi-dash-lg"></i></span>
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
</x-layout>