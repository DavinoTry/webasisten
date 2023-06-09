<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pendaftaran</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-5">
        <h1>PENDAFTARAN ASISTEN PRAKTIKUM</h1>
        <form action="/asisten/simpan" method="post">
            <?= csrf_field() ?>
            <div class="form-group">
                <label for="nim">NIM:</label>
                <input type="text" name="nim" class="form-control" id="nim">
            </div>
            <div class="form-group">
                <label for="nama">NAMA:</label>
                <input type="text" name="nama" class="form-control" id="nama">
            </div>
            <div class="form-group">
                <label for="praktikum">PRAKTIKUM:</label>
                <input type="text" name="praktikum" class="form-control" id="praktikum">
            </div>
            <div class="form-group">
                <label for="ipk">IPK:</label>
                <input type="text" name="ipk" class="form-control" id="ipk">
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
</body>

</html>