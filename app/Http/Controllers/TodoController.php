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
            "task" => "required|max:100"
        ],[
            "start.date_format" => "Format waktu harus HH:MM (contoh 12:00)",
            "end.date_format" => "Format waktu harus HH:MM (contoh 12:00)",
            "end.after" => "waktu selesai harus lebih lambat daripada waktu mulai",
            "task.max" => "hanya bisa memasukkan maksimal 100 karakter pada field tugas"
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
        return redirect()->route("daily")->with("success","berhasil menambahkan tugas baru");
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
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
