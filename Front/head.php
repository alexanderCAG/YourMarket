<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>
        <?php if(isset($title)): ?>
            <?= $title; ?>
        <?php else: ?>
            YourMarket
        <?php endif ?>
    </title>
    <!-- CSS -->
    <link rel="stylesheet" href="../Lien/yourmarket.css">
    <link rel="stylesheet" href="../Lien/accueil.css">
    <link rel="stylesheet" href="../Lien/categorie.css">
    <link rel="stylesheet" href="../Lien/infoPerso.css">
    <link rel="shortcut icon" href="../Image/logo.png">
    <!-- Responsive -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Boostrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

</head>

<body>