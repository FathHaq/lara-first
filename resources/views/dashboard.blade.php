<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div>
        <a href="{{ route('tambah-user') }}">Tambah</a>
    </div>
    <table>
        <thead>
            <tr>
                <th>No.</th>
                <th>Nama</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($user as $item)
            <tr>
                <td> {{ $loop->iteration }} </td>
                <td> {{ $item->name }} </td>
                <td> {{ $item->email }} </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    
</body>
</html>