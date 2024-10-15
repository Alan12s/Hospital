<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenido</title>
    <link rel="stylesheet" href="<?= base_url('path/to/bootstrap.css'); ?>">
</head>
<body>
    <div class="container">
        <h1>Bienvenido, <?= session()->get('email') ?></h1>
        <a href="/logout" class="btn btn-danger">Logout</a>
    </div>
</body>
</html>
