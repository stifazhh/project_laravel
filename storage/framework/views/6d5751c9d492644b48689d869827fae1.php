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
<?php if(session('error')): ?>
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <?php echo e(session('error')); ?>

        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
<?php endif; ?>

<?php if($errors->any()): ?>
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Perhatian!</strong>
        <ul>
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><?php echo e($error); ?></li>    
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>    
<?php endif; ?>

<div class="container">
    <h1>Form Siswa</h1>
    <form action="<?php echo e(url('siswa', @$siswa->id)); ?>" method="POST">
        <?php echo csrf_field(); ?>

        <?php if(!empty(@$siswa)): ?>
            <?php echo method_field('PATCH'); ?>
        <?php endif; ?>

        <div class="mb-3">
            <label for="nis" class="form-label">NIS:</label>
            <input type="text" class="form-control" id="nis" name="nis" value="<?php echo e(old('nis', @$siswa->nis)); ?>">
        </div>
        <div class="mb-3">
            <label for="nama_lengkap" class="form-label">Nama Lengkap:</label>
            <input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap" value="<?php echo e(old('nama_lengkap', @$siswa->nama_lengkap)); ?>">
        </div>
        <div class="mb-3">
            <label for="jk" class="form-label">Jenis Kelamin:</label><br>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="jk" id="L" value="L" <?php echo e(old('jk', @$siswa->jk) == 'L' ? 'checked' : ''); ?>>
                <label class="form-check-label" for="L">Laki-laki</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="jk" id="P" value="P" <?php echo e(old('jk', @$siswa->jk) == 'P' ? 'checked' : ''); ?>>
                <label class="form-check-label" for="P">Perempuan</label>
            </div>
        </div>
        <div class="mb-3">
            <label for="golongan_darah" class="form-label">Golongan Darah:</label>
            <select class="form-select" id="golongan_darah" name="golongan_darah">
                <option value="">Pilih Golongan Darah</option>
                <option value="A" <?php echo e(old('golongan_darah', @$siswa->golongan_darah) == "A" ? "selected" : ""); ?>>A</option>
                <option value="B" <?php echo e(old('golongan_darah', @$siswa->golongan_darah) == "B" ? "selected" : ""); ?>>B</option>
                <option value="AB" <?php echo e(old('golongan_darah', @$siswa->golongan_darah) == "AB" ? "selected" : ""); ?>>AB</option>
                <option value="O" <?php echo e(old('golongan_darah', @$siswa->golongan_darah) == "O" ? "selected" : ""); ?>>O</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\project\project22\resources\views/siswa/form.blade.php ENDPATH**/ ?>