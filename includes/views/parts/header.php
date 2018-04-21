<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Brenna Tuats Guat</title>

        <!--einbinden CSS/JS Header: von root ausgehen!-->
        <link href="css/bootstrap-theme.min.css" rel="stylesheet" type="text/css">
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="css/toastr.min.css" rel="stylesheet" type="text/css">
        <link href="css/960gs_16col.css" rel="stylesheet" type="text/css">
        <link href="css/style.css" rel="stylesheet" type="text/css">

        <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
        <script type="text/javascript" src="js/core.js"></script>


        <?php if($this->current == 'game'): ?>
            <!--bindet Style und JavaScript nur für Spiel ein-->
            <link rel="stylesheet" type="text/css" href="css/styleGame.css">   <!--muss noch von SCSS umgewandelt werden-->
            <script type="text/javascript" src="js/game.js"></script>
        <?php endif; ?>
        <?php if($this->current == 'profil'): ?>
            <!--bindet Overlay-Script für Zum-Login-Feld ein-->
            <script type="text/javascript" src="js/profil.js"></script>
        <?php endif; ?>
        <?php if($this->current == 'login'): ?>
            <!--bindet JS für Login ein-->
            <script type="text/javascript" src="js/login.js"></script>
        <?php endif; ?>

    </head>

    <body>
    <header>


        <nav>
            <ul>

                <li class="offset2 grid3"><a href="index">Start</a></li>
                <li class="grid3"><a href="highscore">Highscore</a></li>     <!--Links funktionieren nicht!-->
                <li class="grid3"><a href="includes/views/profil.php">Profil</a></li>
                <li class="grid3 suffix2"><a href="#">Impressum</a></li>

            </ul>
        </nav>
    </header>