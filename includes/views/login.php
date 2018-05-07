<?php

echo $this->header;

?>
    <main id="wrapper">
        <div class="col-xs-12" id="logo">
            <img src="images/logo/Logo_font.png" alt="Logo Brenna Tuats Guat">
        </div>

        <h1>Login</h1>

        <!--Formular Login-->
        <form action="login" method="post" class="col-xs-12">
            <!--Ausgabe Fehlermeldung-->
            <?php if($this->errorPasswd == true): ?>
                <div class="alert alert-danger alert-dismissible fade in" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <h4>Benutzername und/oder Passwort sind falsch</h4>
                    <p>Prüfen Sie bitte ob Sie sich nicht vertippt haben und versuchen Sie es erneut!</p>
                </div>
            <?php endif; ?>

            <div>
                <div class="form-row">
                    <div class="form-group col-xs-12 ">
                        <label for="validationDefaultUsername">Username</label>
                        <input type="text" name="username" class="form-control" id="validationDefaultUsername" value="" placeholder="Fackelmann" aria-describedby="inputGroupPrepend2" required>
                    </div>
                </div>
                <div class="clear"></div>
                <div class="form-row">
                    <div class="form-group col-xs12 ">
                        <label for="password validationDefault04">Passwort</label>
                        <input type="password" name="password" class="form-control" id="password validationDefault04" value="" placeholder="** Psst! Geheim. **" required>
                    </div>
                </div>

                <div class="form-row">
                    <div class="clear form-group">
                        <button class="button col-xs-4" type="submit">Sign in</button>
                        <input type="hidden" name="action" value="login">
                        <div class="clear"></div>
                    </div>
                </div>
            </div>

        </form>

        <div class="form-group offset1 col-xs4" id="wrapper">
            <p>Sie haben noch kein Profil?</p>
            <a href="registrierung"> Hier geht's zur Registrierung!</a>
        </div>

        <div class="clear"></div>




    </main>
<?php

echo $this->footer;

?>