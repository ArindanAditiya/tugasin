<?php

namespace App\Http\Controllers;

use App\Models\DailyTodo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $todos = DailyTodo::orderBy("daily_todo_id", "asc")->get();
        return view('daily', compact("todos"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            "start" => "required|date_format:H:i",
            "end" => "required|date_format:H:i|after:start",
            "task" => "required|max:20"
        ],[
            "start.date_format" => "Format waktu harus HH:MM (contoh 12:00)",
            "end.date_format" => "Format waktu harus HH:MM (contoh 12:00)",
            "end.after" => "waktu selesai harus lebih lambat daripada waktu mulai",
            "task.max" => "hanya bisa memasukkan maksimal 20 karakter pada field tugas"
        ]);

        $data = [
            "start" => $request->input("start"),
            "end" => $request->input("end"),
            "task" => $request->input("task")
        ];

        $start = $request->old('start');
        $end = $request->old('end');
        $task = $request->old('task');

        DailyTodo::create($data);
        return redirect()->route("daily")->with("success","berhasil menambahkan tugas");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // dd($request);

        $request->validate([
            "startEdit" => "required|date_format:H:i",
            "endEdit" => "required|date_format:H:i|after:startEdit",
            "taskEdit" => "required|max:20"
        ],[
            "startEdit.required" => "Field jam harus diisi/tidal boleh kosong",
            "startEdit.date_format" => "Format waktu harus HH:MM (contoh 12:00)",
            "endEdit.required" => "Field jam harus diisi/tidal boleh kosong",
            "endEdit.date_format" => "Format waktu harus HH:MM (contoh 12:00)",
            "endEdit.after" => "waktu selesai harus lebih lambat daripada waktu mulai",
            "taskEdit.required" => "Field kerjaan harus diisi/tidal boleh kosong",
            "taskEdit.max" => "hanya bisa memasukkan maksimal 20 karakter pada field tugas"
        ]);

        // Tambahkan ID yang dicek dari session atau validasi biar yang muncul cuma modal milik data yang error aja.
        // return back()->withErrors($validator)->with('edit_modal_id', $request->input('id'));
        $data = [
            "start" => $request->input("startEdit"),
            "end" => $request->input("endEdit"),
            "task" => $request->input("taskEdit")
        ];
    
        DailyTodo::where("daily_todo_id", $id)->update($data);
        return redirect()->route("daily")->with("success","berhasil edit tugas");
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        DailyTodo::find($id)->delete();
        return redirect()->route("daily")->with("deleted", "berhasil menghapus tugas");
    }

}









// 🔍 Mencari satu baris data berdasarkan primary key (daily_todo_id) dan langsung menghapusnya
        // Ini akan berhasil kalau model DailyTodo udah diset $primaryKey = 'daily_todo_id'
        // DailyTodo::find($id)->delete();
    
        // 🧨 Ini cara alternatif kalau belum set primary key di model (langsung spesifikin kolomnya)
        // Tapi hati-hati ya, ini akan tetap jalan walau data udah kehapus di baris atas
        // DailyTodo::where("daily_todo_id", $id)->delete();