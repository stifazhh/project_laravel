<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar Laravel</title>
    <!-- Tambahkan link ke Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <!-- Pesan Flash untuk Sukses -->
        <?php if(session('success')): ?>
        <div class="alert alert-success">
            <?php echo e(session('success')); ?>

        </div>
        <?php endif; ?>

        <!-- Pesan Flash untuk Error -->
        <?php if(session('error')): ?>
        <div class="alert alert-danger">
            <?php echo e(session('error')); ?>

        </div>
        <?php endif; ?>

        <!-- Tombol Tambah Data -->
        <a href="<?php echo e(url('/siswa/create')); ?>" class="btn btn-primary mb-2">Tambah Data</a>

        <!-- Tabel Data Siswa -->
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">NIS</th>
                    <th scope="col">Nama Lengkap</th>
                    <th scope="col">Jenis Kelamin</th>
                    <th scope="col">Golongan Darah</th>
                    <th scope="col" colspan="2">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $siswa; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e(isset($i) ? ++$i : $i = 1); ?></td>
                    <td><?php echo e($row->nis); ?></td>
                    <td><?php echo e($row->nama_lengkap); ?></td>
                    <td><?php echo e($row->jk); ?></td>
                    <td><?php echo e($row->golongan_darah); ?></td>
                    <td><a href="<?php echo e(url('/siswa/edit/' . $row->id )); ?>" class="btn btn-warning">Edit</a></td>
                    <td>
                        <form action="<?php echo e(url('/siswa', $row->id )); ?>" method="POST">
                            <?php echo method_field('DELETE'); ?>
                            <?php echo csrf_field(); ?>
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>

    <!-- Tambahkan link ke Bootstrap JS (Opsional) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\project\project22\resources\views/belajar.blade.php ENDPATH**/ ?>