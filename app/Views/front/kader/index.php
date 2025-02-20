<?php
 include(__DIR__ . '/../../layouts/header.php');
 include(__DIR__ . '/../../layouts/navbar.php');
?>

<div class="container mt-5">
    <div class="card">
        <div class="card-header text-center">
            <h3>Profil Kader</h3>
        </div>
        <div class="card-body">
            <form action="#" method="POST">
                <div class="form-group">
                    <label for="nik">NIK</label>
                    <input type="text" class="form-control" id="nik" name="nik" required>
                </div>

                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" class="form-control" id="nama" name="nama" required>
                </div>

                <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <textarea class="form-control" id="alamat" name="alamat" rows="4" required></textarea>
                </div>

                <div class="form-group">
                    <label for="lulusan">Lulusan</label>
                    <input type="text" class="form-control" id="lulusan" name="lulusan" required>
                </div>

                <div class="form-group">
                    <label for="keahlian">Keahlian</label>
                    <input type="text" class="form-control" id="keahlian" name="keahlian" required>
                </div>

                <button type="submit" class="btn btn-primary btn-block">Simpan Profil</button>
            </form>
        </div>
    </div>
</div>



<?php
 include(__DIR__ . '/../../layouts/footer.php');

?>