<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Delete</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-5">
        <h1 class="mb-4">DELETE ASISTEN PRAKTIKUM</h1>
        <form action="/asisten/delete" method="post">
            <?= csrf_field() ?>
            <div class="form-group">
                <label for="nim">NIM:</label>
                <input type="text" name="nim" class="form-control" id="nim">
            </div>
            <button type="submit" class="btn btn-danger">Hapus</button>
        </form>
    </div>

</body>

</html>