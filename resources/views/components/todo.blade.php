@php
    $todos = json_decode($slot, true); // Decode JSON ke array
@endphp<!-- 1 EDIT -->
    
{{--UNTUK YANG GAGAL SAMA BERHASILNYA NANTI AJA DULU DIKERJAKANNYA  --}}
 
{{--__ lagi dikerjakan __--}}

{{-- error messege kalau nggk lewat validasi update --}}
 @if ($errors->get('taskEdit') || $errors->get('startEdit') || $errors->get('endEdit'))  
 <script>
  document.addEventListener("DOMContentLoaded", function () {
    var myModal = new bootstrap.Modal(document.getElementById("editModal{{ old('oldId') }}"));
    myModal.show();
  });
</script>
@endif

@foreach ( $todos as $todo )
<span class="badge bg-light text-dark d-flex align-items-center border p-2 gap-2 shadow-sm ">

    <mark>{{ $todo["start"] }} - {{ $todo["end"] }}</mark>
    {{ $todo["task"] }}

    <!-- 1. Edit -->
    <div class="modal fade" id="editModal{{ $todo['daily_todo_id'] }}" tabindex="-1" aria-labelledby="editLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content" style="background-color: #fdfcf3">
          <form action={{ route("daily.task.edit", ["id"=>$todo["daily_todo_id"]]) }} method="post">
            @csrf
            @method("put")
            <div class="modal-header">`
              <h1 class="modal-title fs-5" id="editLabel">Edit Task</h1>
              <button onclick="deleteEditFlashMessege()" type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

              {{-- error messege --}}
              @if ($errors->get('taskEdit') || $errors->get('startEdit') || $errors->get('endEdit'))  
              <div class="alert alert-danger border-0 rounded-3 shadow-sm p-3 mb-4 text-start || flashMessege">
                <h5 class="mb-2 fw-semibold"><i class="bi bi-exclamation-triangle-fill me-2"></i>Ups! Ada yang salah:</h5>
                <ul class="mb-0 fw-normal">
                    @foreach ($errors->all() as $error)
                        <li class="small fw-normal mt-1">{{ $error }}</li>
                    @endforeach
                </ul>
              </div>
              @endif
                <div class="d-flex justify-content-around" style="margin-bottom: -10px">
                  <label class="d-block" for="inputMulaiEdit" class="form-label">⏱️Mulai</label>
                  <label class="d-block" for="inputMulaiEdit" class="form-label">⏳Selesai</label>
                </div>
                <div class="mt-3 mb-3 d-flex gap-2">
                  <input name="oldId" type="hidden" value="{{ $todo['daily_todo_id'] }}">
                  <input name="startEdit" id="inputMulaiEdit"  type="text" value="{{ $todo["start"] }}" class="btn btn-secondary form-control shadow-sm border-0" style="background-color: #ff8f70; border: none">              
                  <input name="endEdit" id="inputSelesaiEdit"  type="text" value="{{ $todo["end"] }}" class="btn btn-secondary form-control shadow-sm border-0 ms-auto" style="background-color: #ff8f70; border: none">
                </div>
                  <label for="taskEdit{{ $loop->index }}" class="form-label d-flex">🎯tugas&nbsp;<b>
                    <span class="d-block taskEditLeble"><span class="taskEditLebleCount">0</span>/20</span></b>
                  </label>
                <input id="taskEdit{{ $loop->index }}" autocomplete="off" name="taskEdit" type="text" class="form-control shadow-sm border-0 taskEditInput" value="{{ $todo["task"] }}" />
            </div>
            <div class="modal-footer">
              <button type="submit" class="btn text-white shadow-sm border-0" style="background-color: #e07a5f">Save changes</button>
            </div>
            </form>
          </div>
      </div>
    </div>
    <button type="button" class="btn-ghoib" data-bs-toggle="modal" data-bs-target="#editModal{{ $todo['daily_todo_id'] }}" data-bs-placement="top" title="Edit">
      <i class="bi bi-pen"></i>
      {{-- 🖋️ --}}
    </button>
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
<span class="badge d-flex align-items-center border p-2 gap-2 position-relative shadow-sm" style="color: rgb(2, 97, 2); background-color: rgb(233, 247, 233)">
  <span class="position-absolute top-0 translate-middle" style="font-size: large">
   ✔️
  <span class="visually-hidden">unread messages</span>
  </span>
  <mark>10:10 - 11:10</mark> Bangun pagi
</span>
  
  {{-- gagal dikerjakan --}}
<span class="badge d-flex align-items-center border p-2 gap-2 position-relative shadow-sm" style="color: rgb(158, 2, 2); background-color: rgb(246, 213, 213)">
  <span class="position-absolute top-0 translate-middle" style="font-size: large">
      ❌
      <span class="visually-hidden">unread messages</span>
  </span>
  <mark><del>10:10 - 11:10</del></mark><del>Bangun pagi</del>
</span>