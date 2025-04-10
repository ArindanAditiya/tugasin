@php
    $todos = json_decode($slot, true); // Decode JSON ke array
@endphp
{{--UNTUK YANG GAGAL SAMA BERHASILNYA NANTI AJA DULU DIKERJAKANNYA  --}}
 
{{-- lagi dikerjakan --}}

@foreach ( $todos as $todo )
<span class="badge bg-light text-dark d-flex align-items-center border p-2 gap-2">
    <mark>{{ $todo["start"] }} - {{ $todo["end"] }}</mark>{{ $todo["task"] }}
  
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
    @if (session()->has('deleted'))
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
        icon: "info",
        title: "{{ session('deleted') }}"
      });
        </script>
    @endif
    <form action="{{ route("daily.task.delete", ["id"=>$todo["daily_todo_id"]]) }}" onsubmit="return confirmSweetAlert(event)" method="post" class="d-inline">
      @csrf
      @method("delete")
      <button  class="btn-ghoib" data-bs-toggle="tooltip" data-bs-placement="top" title="Hapus">        
        <i class="bi bi-trash"></i>
      </button>
    </form>
  
    <!-- 3. SELESAI -->
    <form action="" method="post" class="d-inline">
      <button class="btn-ghoib" data-bs-toggle="tooltip" data-bs-placement="top" title="Selesai">
        <i class="bi bi-check-lg"></i>
      </button>
    </form>
  </span> 
@endforeach

{{-- berhasil dikerjakan --}}
<span class="badge d-flex align-items-center border p-2 gap-2 position-relative" style="color: rgb(2, 97, 2); background-color: rgb(233, 247, 233)">
  <span class="position-absolute top-0 translate-middle" style="font-size: large">
   ✔️
  <span class="visually-hidden">unread messages</span>
  </span>
  <mark>10:10 - 11:10</mark> Bangun pagi
</span>
  
  {{-- gagal dikerjakan --}}
<span class="badge d-flex align-items-center border p-2 gap-2 position-relative" style="color: rgb(158, 2, 2); background-color: rgb(246, 213, 213)">
  <span class="position-absolute top-0 translate-middle" style="font-size: large">
      ❌
      <span class="visually-hidden">unread messages</span>
  </span>
  <mark><del>10:10 - 11:10</del></mark><del>Bangun pagi</del>
</span>