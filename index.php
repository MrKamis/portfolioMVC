<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kamil Samiec</title>
    <base href=".\">
    <link href="\public/stylesheets/basic.css" rel="stylesheet">
    <link href="\public/stylesheets/animation.css" rel="stylesheet">
</head>
<body>
    <?php
        require_once '.\app\helpers\router.php';
        Router::route($_GET);
    ?>
    <script src="\public/javascripts/jquery.js"></script>
    <script src="\public/javascripts/basic.js"></script>
</body>
</html>