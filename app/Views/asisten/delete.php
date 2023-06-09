<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Delete</title>
</head>

<body>
    <h1>DELETE ASISTEN PRAKTIKUM</h1>
    <form action="/asisten/delete" method="post">
        <?= csrf_field() ?>
        NIM:<input type="text" name="nim" /><br />
        <input type="submit" name="" value="Hapus" />
    </form>
</body>

</html>