<!DOCTYPE html>
<html lang="en">

<head>
    <title>DAFTAR CALON ASISTEN</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <div class="container mt-0">
        <div class="container p-5 text-white rounded" style="background-color: #2c90c6;">
            <h1 style="text-align: center;">Pendaftaran Asisten Praktikum</h1>
        </div>
        <table class="table table-striped">
            <tr>
                <th scope="col">No.</th>
                <th scope="col">NIM</th>
                <th scope="col">Nama</th>
                <th scope="col">Kelas Praktikum</th>
                <th scope="col">IPK</th>
            </tr>
            <?php $i = 1 ?>
            <?php foreach ($asisten as $ast) : ?>
                <tr>
                    <td><?= $i++ ?></td>
                    <td><?= esc($ast['NIM']) ?></td>
                    <td><?= esc($ast['NAMA']) ?></td>
                    <td><?= esc($ast['PRAKTIKUM']) ?></td>
                    <td><?= esc($ast['IPK']) ?></td>
                </tr>
            <?php endforeach; ?>
        </table>
    </div>
    <br>
    <input type="submit" name="" value="Simpan" />
</body>

</html>