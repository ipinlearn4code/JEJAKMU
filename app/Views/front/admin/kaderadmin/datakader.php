<?php
 include(__DIR__ . '/../../../layouts/header.php');
 include(__DIR__ . '/../../../layouts/navbar2.php');
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Kader</title>
   
</head>
<body>
    
    <div class="container-fluid mt-5">
        <h2 class="text-center mb-4">Data Kader</h2>
        <div class="d-flex justify-content-end mb-3">
            <a href="<?= base_url('kader/create') ?>" class="btn btn-primary">Tambah Kader</a>
        </div>
        <div class="table-responsive">
            <table class="table table-bordered table-striped w-100">
                <thead class="table-dark">
                    <tr>
                        <th>NIK</th>
                        <th>Nama</th>
                        <th>Alamat</th>
                        <th>Lulusan</th>
                        <th>Keahlian</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    $kader = [
                        ["nik" => "1234567890123456", "nama" => "Budi Santoso", "alamat" => "Jl. Merdeka No. 10", "lulusan" => "S1 Teknik", "keahlian" => "Pemrograman"],
                        ["nik" => "6543210987654321", "nama" => "Ani Lestari", "alamat" => "Jl. Mawar No. 5", "lulusan" => "S1 Manajemen", "keahlian" => "Administrasi"],
                        ["nik" => "7890123456789012", "nama" => "Dewi Kartika", "alamat" => "Jl. Kenanga No. 8", "lulusan" => "D3 Akuntansi", "keahlian" => "Keuangan"]
                    ];
                    foreach ($kader as $k): ?>
                    <tr>
                        <td><?= esc($k['nik']) ?></td>
                        <td><?= esc($k['nama']) ?></td>
                        <td><?= esc($k['alamat']) ?></td>
                        <td><?= esc($k['lulusan']) ?></td>
                        <td><?= esc($k['keahlian']) ?></td>
                        <td>
                            <a href="<?= base_url('kader/edit/'.$k['nik']) ?>" class="btn btn-warning btn-sm">Edit</a>
                            <a href="<?= base_url('kader/delete/'.$k['nik']) ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus?')">Hapus</a>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
    
    
</body>
</html>

<?php
include(__DIR__ . '/../../../layouts/footer.php');
?>

