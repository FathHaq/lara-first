<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <form action="{{ route('tambah-user.store') }}" method="post">
    @csrf
        <div style="display: flex; flex-direction: column; width: 50%; gap: 10px;">
            <label for="name">Name</label>
            <input type="text" id="name" name="name">
            @error('name')
                <p style="color: red;">{{ $message }}</p>
            @enderror

            <label for="email">Email</label>
            <input type="text" id="email" name="email">
            @error('email')
                <p style="color: red;">{{ $message }}</p>
            @enderror

            <label for="password">Password</label>
            <input type="text" id="password" name="password">
            @error('password')
                <p style="color: red;">{{ $message }}</p>
            @enderror

            <label for="role">Role</label>
            <select name="role" id="role">
                <option value="1">Admin</option>
                <option value="2">Mahasiswa</option>
                <option value="3">Mentor</option>
            </select>
            <button type="submit">Simpan</button>
        </div>
    </form>
</body>

</html>