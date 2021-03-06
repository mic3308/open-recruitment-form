<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="https://c.s-microsoft.com/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="/registration/public/libs/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="/registration/public/src/css/fonts.css">
    <link rel="stylesheet" href="/registration/public/src/css/styles.css">
    <title><?= isset($title) ? $title : ucfirst($layout) ?> | Microsoft Innovation Center Universitas Indonesia</title>
</head>
<body>

    <div class="img-logo">
        <img src="/registration/public/src/images/logo-reverse.png" alt="">
    </div>
    
    <div class="container-fluid">
        <?php require_once __DIR__ . '/' . $layout . '.php' ?>
    </div>

    <script src="/registration/public/libs/jquery/dist/jquery.min.js"></script>
    <script>
        $('#logout').click(function(e) {
            if (!confirm('Are you sure want to logout?')) {
                e.preventDefault();
            }
        })
        $('#delete').click(function(e) {
            if (!confirm('Are you sure want to delete?')) {
                e.preventDefault();
            }
        })
    </script>
</body>
</html>