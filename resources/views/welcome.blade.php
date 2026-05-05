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

    <!-- Form buatanmu -->
    <div style="background: #f8f9fa; padding: 15px; margin-bottom: 20px;">
        <form action="{{ route('tasks.store') }}" method="POST">
            @csrf
            <!-- PERBAIKAN: Tambahkan atribut autofocus di bagian paling belakang input -->
            <input type="text" name="title" placeholder="Ketik tugas baru..." required autofocus>
            <button type="submit">Tambah Task</button>
        </form>
    </div>
</body>
</html>