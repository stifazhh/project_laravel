<h1>Form Kelas</h1>
<form action="<?php echo e(url('kelas')); ?>" method="POST">
    <?php echo csrf_field(); ?>

    Nama Kelas : <input type="text" name="nama_kelas"><br>
    Jurusan :
    <select name="jurusan">
        <option value=""></option>
        <option value="Rekayasa Perangkat Lunak">Rekayasa Perangkat Lunak</option>
        <option value="Teknik Instalasi Tenaga Listrik">Teknik Instalasi Tenaga Listrik</option>
        <option value="Teknik Audio Video">Teknik Audio Video</option>
        <option value="Desain Komunikasi Visual">Desain Komunikasi Visual</option>
        <option value="Teknik Komputer dan Jaringan">Teknik Komputer dan Jaringan </option>
        <option value="Teknik Otomasi Industri">Teknik Otomasi Industri</option>
    </select><br>
    Lokasi Ruangan : <input type="text" name="lokasi_ruangan"><br>
    Nama Wali Kelas : <input type="text" name="nama_wali_kelas"><br>
    <input type="submit" value="Simpan">
</form>
<?php /**PATH C:\xampp\htdocs\project\project22\resources\views/t_kelas/from.blade.php ENDPATH**/ ?>