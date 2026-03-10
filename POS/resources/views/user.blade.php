{{-- <h1>User Pofile</h1>
<p>User ID: {{ $id }}</p>
<p>User Name: {{ $name }}</p> --}}

<!DOCTYPE html>
    <body>
        <h1>Data User</h1>
        <a href="/PWL/POS/public/user/tambah">+ Tambah User</a>
        <table border="1" cellpading="2" cellspacing="0">
            <tr>
                <td>ID</td>
                <td>Username</td>
                <td>Nama</td>
                <td>ID Level Pengguna</td>
                <td>Aksi</td>
            </tr>
            @foreach ($data as $d)
            <tr>
                <td>{{ $d->user_id }}</td>
                <td>{{ $d->username }}</td>
                <td>{{ $d->nama }}</td>
                <td>{{ $d->level_id }}</td>
                <td>
                    <a href="/PWL/POS/public/user/ubah/{{ $d->user_id }}">Ubah</a> |
                    <a href="/PWL/POS/public/user/hapus/{{ $d->user_id }}">Hapus</a>
                </td>
            </tr>
            @endforeach
    </body>
</html>

{{-- <html>
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
            {{-- </tr>
            {{-- @foreach ($data as $user) --}}
            {{-- <tr>
                <td>{{ $data->user_id }}</td>
                <td>{{ $data->username }}</td>
                <td>{{ $data->nama }}</td>
                <td>{{ $data->level_id }}</td>
                {{-- <td>{{$count}}</td> --}}
            {{-- </tr> --}}
            {{-- @endforeach --}}
        {{-- </table> --}}
    {{-- </body>  --}} 