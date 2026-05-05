<?php
namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    // Kamu hanya membuat function store()
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
        ]);

        Task::create([
            'name' => $request->name,
        ]);

        return back()->with('success', 'Task baru berhasil ditambahkan!');
    }
}