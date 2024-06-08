<table border="1">
    <tr>
        <td>No</td>
        <td>Nama Kelas</td>
        <td>Jurusan</td>
        <td>Lokasi Ruangan</td>
        <td>Nama Wali Kelas</td>
    </tr>
    <?php $__currentLoopData = $tkelas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
        <td><?php echo e(isset($i) ? ++$i : $i = 1); ?></td>
        <td><?php echo e($row->nama_kelas); ?></td>
        <td><?php echo e($row->jurusan); ?></td>
        <td><?php echo e($row->lokasi_ruangan); ?></td>
        <td><?php echo e($row->nama_wali_kelas); ?></td>
    </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</table>
<?php /**PATH C:\xampp\htdocs\project\project22\resources\views/studikasus2.blade.php ENDPATH**/ ?>