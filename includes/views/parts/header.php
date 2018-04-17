<!DOCTYPE html>
<html lang="en">
<div id="login">
    <head>
        <meta charset="UTF-8">
        <title>Login</title>

        <link href="css/bootstrap-theme.min.css" rel="stylesheet" type="text/css">
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="css/960gs_16col.css" rel="stylesheet" type="text/css">
        <link href="css/style.css" rel="stylesheet" type="text/css">

        <script type="text/javascript" src="../js/core.js"></script>

        <?php if($this->current == 'login'): ?>
        <!--anderes zeug was nur bei login im markup stehen soll-->
        <?php endif; ?>
    </head>
    <body>
    <header>

        <?php if($this->current != 'login'): ?>
        <nav>
            <ul>
                <li class="offset2 grid3"><a href="#">Start</a></li>
                <li class="grid3"><a href="#">Highscore</a></li>
                <li class="grid3"><a href="#">Profil</a></li>
                <li class="grid3 suffix2"><a href="#">Impressum</a></li>
            </ul>
        </nav>
        <?php endif; ?>

    </header>