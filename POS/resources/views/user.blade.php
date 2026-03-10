{{-- <h1>User Pofile</h1>
<p>User ID: {{ $id }}</p>
<p>User Name: {{ $name }}</p> --}}

<!DOCTYPE html>
<html>
    <head>
        <title>Data User</title>
    </head>
    <body>
        <h1>Data User</h1>
        <table border="1" cellpadding="2" cellspacing="0">
            <tr>
                <th>ID</th>
                <th>Username</th>
                <th>Nama</th>
                <th>ID Level Pengguna</th>
                {{-- <th>Jumlah Pengguna</th> --}}
            </tr>
            {{-- @foreach ($data as $user) --}}
            <tr>
                <td>{{ $data->user_id }}</td>
                <td>{{ $data->username }}</td>
                <td>{{ $data->nama }}</td>
                <td>{{ $data->level_id }}</td>
                {{-- <td>{{$count}}</td> --}}
            </tr>
            {{-- @endforeach --}}
        </table>
    </body>
</html>