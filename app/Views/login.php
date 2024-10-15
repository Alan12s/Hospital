<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="<?= base_url('path/to/bootstrap.css'); ?>">
</head>
<body>
    <div class="container">
        <h2>Login</h2>
        <?php if(session()->getFlashdata('msg')):?>
            <div class="alert alert-warning"><?= session()->getFlashdata('msg') ?></div>
        <?php endif;?>
        <form action="/auth" method="post">
            <div class="form-group">
                <label>Email</label>
                <input type="email" class="form-control" name="email" required>
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" class="form-control" name="password" required>
            </div>
            <button type="submit" class="btn btn-primary">Login</button>
        </form>
    </div>
</body>
</html>
