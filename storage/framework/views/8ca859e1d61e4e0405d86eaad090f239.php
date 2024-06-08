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
    <div class="container mt-5">
        <?php if(session('error')): ?>
        <div class="alert alert-danger">
            <?php echo e(session('error')); ?>

        </div>
        <?php endif; ?>

        <?php if($errors->any()): ?>
        <div class="alert alert-danger">
            <strong>Perhatian!</strong>
            <br>
            <ul>
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li><?php echo e($error); ?></li>    
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>    
        <?php endif; ?>

        <h1>Form Kelas</h1>
        <form action="<?php echo e(url('t_kelas', @$t_kelas->id)); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <?php if(!empty(@$t_kelas)): ?>
                <?php echo method_field('PATCH'); ?>
            <?php endif; ?>
            <div class="mb-3">
                <label for="nama_kelas" class="form-label">Nama Kelas</label>
                <input type="text" class="form-control" id="nama_kelas" name="nama_kelas" value="<?php echo e(old('nama_kelas', @$t_kelas->nama_kelas)); ?>">
            </div>
            <div class="mb-3">
                <label for="jurusan" class="form-label">Jurusan</label>
                <select class="form-select" id="jurusan" name="jurusan">
                    <option value=""></option>
                    <option value="Rekayasa Perangkat Lunak" <?php echo e(old('jurusan', @$t_kelas->jurusan) == "Rekayasa Perangkat Lunak" ? "selected" : ""); ?>>Rekayasa Perangkat Lunak</option>
                    <option value="Teknik Instalasi Tenaga Listrik" <?php echo e(old('jurusan', @$t_kelas->jurusan) == "Teknik Instalasi Tenaga Listrik" ? "selected" : ""); ?>>Teknik Instalasi Tenaga Listrik</option>
                    <option value="Teknik Audio Video"  <?php echo e(old('jurusan', @$t_kelas->jurusan) == "Teknik Audio Video" ? "selected" : ""); ?>>Teknik Audio Video</option>
                    <option value="Desain Komunikasi Visual"  <?php echo e(old('jurusan', @$t_kelas->jurusan) == "Desain Komunikasi Visual" ? "selected" : ""); ?>>Desain Komunikasi Visual</option>
                    <option value="Teknik Komputer dan Jaringan"  <?php echo e(old('jurusan', @$t_kelas->jurusan) == "Teknik Komputer dan Jaringan" ? "selected" : ""); ?>>Teknik Komputer dan Jaringan</option>
                    <option value="Teknik Otomasi Industri"  <?php echo e(old('jurusan', @$t_kelas->jurusan) == "Teknik Otomasi Industri" ? "selected" : ""); ?>>Teknik Otomasi Industri</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="lokasi_ruangan" class="form-label">Lokasi Ruangan</label>
                <input type="text" class="form-control" id="lokasi_ruangan" name="lokasi_ruangan" value="<?php echo e(old('lokasi_ruangan', @$t_kelas->lokasi_ruangan)); ?>">
            </div>
            <div class="mb-3">
                <label for="nama_wali_kelas" class="form-label">Nama Wali Kelas</label>
                <input type="text" class="form-control" id="nama_wali_kelas" name="nama_wali_kelas" value="<?php echo e(old('nama_wali_kelas', @$t_kelas->nama_wali_kelas)); ?>">
            </div>
            <button type="submit" class="btn btn-success btn-sm">Simpan</button>
        </form>
    </div>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\project\project22\resources\views/t_kelas/form.blade.php ENDPATH**/ ?>