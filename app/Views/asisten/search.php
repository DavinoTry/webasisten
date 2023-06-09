<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Update</title>
</head>

<body>
    <h1>PENCARIAN ASISTEN PRAKTIKUM</h1>
    <form action="/asisten/search" method="post">
        <?= csrf_field() ?>
        SEARCH:<input type="text" name="key" />
        <input type="submit" name="submit" value="Search" />
    </form>

    <?php
    if (!empty($hasil)) {
        echo "<h1>Hasil Pencarian</h1>";
        echo "Nama :" . $hasil['NAMA'];
        echo "<br>Praktikum :" . $hasil['PRAKTIKUM'];
        echo "<br>IPK :" . $hasil['IPK'];
    }
    ?>
</body>

</html>