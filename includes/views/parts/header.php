<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Brenna Tuats Guat</title>

        <!--einbinden CSS/JS Header: von root ausgehen!-->
        <link href="css/bootstrap-theme.min.css" rel="stylesheet" type="text/css">
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="css/toastr.min.css" rel="stylesheet" type="text/css">
        <link href="css/bootstrap-grid.css" rel="stylesheet" type="text/css">
        <link href="css/style.css" rel="stylesheet" type="text/css">
        <link href="css/styleGame.css" rel="stylesheet" type="text/css">


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
        <?php if($this->current == 'register'): ?>
            <!--bindet JS für Registrierung ein-->
            <script type="text/javascript" src="js/register.js"></script>
        <?php endif; ?>
        <?php if($this->current == 'index'): ?>
            <!--bindet Style und JavaScript nur für Spiel ein-->
            <script type="text/javascript" src="js/game.js"></script>
        <?php endif; ?>

    </head>

    <body>
        <header>


            <nav>
                <ul>
                    <li class="col-xs-4"><a href="index">Start</a></li>
                    <li class="col-xs-4"><a href="highscore">Highscore</a></li>
                   <!-- <li class="col-xs-3"><a href="profil">Profil</a></li>    entfernen-->
                    <li class="col-xs-4"><a href="logout">Logout <div id="logout_bild"></div></a> </li>

                </ul>
            </nav>
        </header>