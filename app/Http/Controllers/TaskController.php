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
            'name' => 'required|string|min:3|max:255',
        ]);

        Task::create([
            'name' => $request->name,
        ]);

        return back()->with('success', 'Task baru berhasil ditambahkan!');
    }

    public function index()
    {
        $tasks = Task::latest()->get(); // Mengambil semua task dari yang terbaru
        return view('tasks.index', compact('tasks'));
    }

    public function destroy(Task $task)
    {
        $task->delete(); // Menghapus task
        return back()->with('success', 'Task berhasil dihapus!');
    }
}