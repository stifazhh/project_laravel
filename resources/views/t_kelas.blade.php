<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tampilan Kelas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container mt-5">
        @if(session('succses'))
        <div class="alert alert-success">
            {{ session('succses')}}
        </div>
        @endif

        @if(session('error'))
        <div class="alert alert-danger">
            {{ session('error')}}
        </div>
        @endif

        <a href="{{ url('/t_kelas/create') }}" class="btn btn-secondary mb-3">Tambah Data</a>

        <table class="table table-striped">
            <thead class="table-warning text-center">
                <tr class="table-dark">
                    <th>No</th>
                    <th>Nama Kelas</th>
                    <th>Jurusan</th>
                    <th>Lokasi Ruangan</th>
                    <th>Nama Wali Kelas</th>
                    <th colspan="2">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($tkelas as $row)
                <tr>
                    <td class="text-center">{{ $loop->iteration }}</td>
                    <td>{{ $row->nama_kelas }}</td>
                    <td>{{ $row->jurusan }}</td>
                    <td>{{ $row->lokasi_ruangan }}</td>
                    <td>{{ $row->nama_wali_kelas }}</td>
                    <td class="text-center"><a href="{{ url('/t_kelas/edit/' . $row->id )}}" class="btn btn-success btn-sm">Edit</a></td>
                    <td class="text-center">
                        <form action="{{ url('/t_kelas', $row->id )}}" method="POST">
                            @method('DELETE')
                            @csrf
                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
