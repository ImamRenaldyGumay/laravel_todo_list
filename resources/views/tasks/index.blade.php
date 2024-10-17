<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To-Do List</title>
</head>
<body>
    <h1>To-Do List</h1>

    <!-- Form untuk menambah tugas baru -->
    <form action="/tasks" method="POST">
        @csrf
        <input type="text" name="name" placeholder="Tambah Tugas">
        <button type="submit">Tambah</button>
    </form>

    <!-- Daftar tugas -->
    <ul>
        @foreach ($tasks as $task)
            <li>{{ $task->name }}</li>
        @endforeach
    </ul>
</body>
</html>
