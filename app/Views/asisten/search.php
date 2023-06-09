<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pencarian</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-5">
        <h1>PENCARIAN ASISTEN PRAKTIKUM</h1>
        <form action="/asisten/search" method="post">
            <?= csrf_field() ?>
            <div class="form-group">
                <label for="key">SEARCH:</label>
                <input type="text" name="key" class="form-control" id="key">
            </div>
            <button type="submit" class="btn btn-primary">Search</button>
        </form>

        <?php if (!empty($hasil)) : ?>
            <h1>Hasil Pencarian</h1>
            <p>Nama: <?= $hasil['NAMA'] ?></p>
            <p>Praktikum: <?= $hasil['PRAKTIKUM'] ?></p>
            <p>IPK: <?= $hasil['IPK'] ?></p>
        <?php endif; ?>
    </div>

</body>

</html>