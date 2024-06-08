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
        <?php if(session('succses')): ?>
        <div class="alert alert-success">
            <?php echo e(session('succses')); ?>

        </div>
        <?php endif; ?>

        <?php if(session('error')): ?>
        <div class="alert alert-danger">
            <?php echo e(session('error')); ?>

        </div>
        <?php endif; ?>

        <a href="<?php echo e(url('/t_kelas/create')); ?>" class="btn btn-secondary mb-3">Tambah Data</a>

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
                <?php $__currentLoopData = $tkelas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td class="text-center"><?php echo e($loop->iteration); ?></td>
                    <td><?php echo e($row->nama_kelas); ?></td>
                    <td><?php echo e($row->jurusan); ?></td>
                    <td><?php echo e($row->lokasi_ruangan); ?></td>
                    <td><?php echo e($row->nama_wali_kelas); ?></td>
                    <td class="text-center"><a href="<?php echo e(url('/t_kelas/edit/' . $row->id )); ?>" class="btn btn-success btn-sm">Edit</a></td>
                    <td class="text-center">
                        <form action="<?php echo e(url('/t_kelas', $row->id )); ?>" method="POST">
                            <?php echo method_field('DELETE'); ?>
                            <?php echo csrf_field(); ?>
                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                        </form>
                    </td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\project\project22\resources\views/t_kelas.blade.php ENDPATH**/ ?>