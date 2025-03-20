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
</x-layout>