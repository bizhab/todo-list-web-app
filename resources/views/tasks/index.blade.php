<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>To-Do List | Kolaborasi</title>
</head>
<body>
    <h2>Aplikasi To-Do List (Tugas Web II)</h2>

    @if(session('success'))
        <div style="background: #d4edda; color: #155724; padding: 10px; margin-bottom: 15px;">
            {{ session('success') }}
        </div>
    @endif

    <!-- form create task -->
    <div style="background: #f8f9fa; padding: 15px; margin-bottom: 20px;">
        <form action="{{ route('tasks.store') }}" method="POST">
            @csrf
            <!-- PERBAIKAN: Tambahkan atribut autofocus di bagian paling belakang input -->
            <input type="text" name="name" placeholder="Ketik tugas baru..." required autofocus>
            <button type="submit">Tambah Task</button>
        </form>
    </div>

    <!-- Daftar Task -->
    <hr>
    <h3>Daftar Tugas:</h3>
    <ul style="list-style-type: none; padding: 0;">
        @foreach($tasks as $task)
            <li style="padding: 10px; border-bottom: 1px solid #ddd; display: flex; justify-content: space-between;">
                <span>{{ $task->name }}</span>
                
                <!-- Tombol Hapus -->
                <form action="{{ route('tasks.destroy', $task->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" style="background: red; color: white; border: none; padding: 5px; cursor: pointer;" onclick="return confirm('Yakin ingin menghapus task ini?')">
                        Hapus
                    </button>
                </form>
            </li>
        @endforeach
    </ul>
</body>
</html>