<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Kelas</title>
    <!-- Bootstrap 5.3 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
@if(session('error'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        {{ session('error') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif

@if ($errors->any())
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Perhatian!</strong>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>    
            @endforeach
        </ul>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>    
@endif

<div class="container">
    <h1>Form Siswa</h1>
    <form action="{{ url('siswa', @$siswa->id) }}" method="POST">
        @csrf

        @if (!empty(@$siswa))
            @method('PATCH')
        @endif

        <div class="mb-3">
            <label for="nis" class="form-label">NIS:</label>
            <input type="text" class="form-control" id="nis" name="nis" value="{{ old('nis', @$siswa->nis) }}">
        </div>
        <div class="mb-3">
            <label for="nama_lengkap" class="form-label">Nama Lengkap:</label>
            <input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap" value="{{ old('nama_lengkap', @$siswa->nama_lengkap) }}">
        </div>
        <div class="mb-3">
            <label for="jk" class="form-label">Jenis Kelamin:</label><br>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="jk" id="L" value="L" {{ old('jk', @$siswa->jk) == 'L' ? 'checked' : '' }}>
                <label class="form-check-label" for="L">Laki-laki</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="jk" id="P" value="P" {{ old('jk', @$siswa->jk) == 'P' ? 'checked' : '' }}>
                <label class="form-check-label" for="P">Perempuan</label>
            </div>
        </div>
        <div class="mb-3">
            <label for="golongan_darah" class="form-label">Golongan Darah:</label>
            <select class="form-select" id="golongan_darah" name="golongan_darah">
                <option value="">Pilih Golongan Darah</option>
                <option value="A" {{ old('golongan_darah', @$siswa->golongan_darah) == "A" ? "selected" : "" }}>A</option>
                <option value="B" {{ old('golongan_darah', @$siswa->golongan_darah) == "B" ? "selected" : "" }}>B</option>
                <option value="AB" {{ old('golongan_darah', @$siswa->golongan_darah) == "AB" ? "selected" : "" }}>AB</option>
                <option value="O" {{ old('golongan_darah', @$siswa->golongan_darah) == "O" ? "selected" : "" }}>O</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>
</body>
</html>
