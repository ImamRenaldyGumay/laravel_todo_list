<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class TaskController extends Controller
{
    // Menampilkan semua tugas
    public function index()
    {
        $tasks = Task::all();
        return view('tasks.index', compact('tasks'));
    }

    // Menambahkan tugas baru
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required'
        ]);

        Task::create([
            'name' => $request->name
        ]);

        return redirect()->back();
    }
}
