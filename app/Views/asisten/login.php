<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Form Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-5">
        <form action="/asisten/login" method="post">
            <?= csrf_field() ?>
            <div class="form-group">
                <label for="usr">User:</label>
                <input type="text" name="usr" class="form-control" id="usr">
            </div>
            <div class="form-group">
                <label for="pwd">Password:</label>
                <input type="password" name="pwd" class="form-control" id="pwd">
            </div>
            <button type="submit" class="btn btn-primary">Login</button>
        </form>
    </div>

</body>

</html>