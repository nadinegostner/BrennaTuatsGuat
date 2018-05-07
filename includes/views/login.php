<?php

echo $this->header;

?>
    <main id="wrapper login">
        <div class="col-md-12" id="logo">
            <img src="images/logo/Logo_font.png" alt="Logo Brenna Tuats Guat">
        </div>

        <h1>Login</h1>

        <!--Formular Login-->
        <form action="login" method="post" class="col-md-12">
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

            <div class="offset-md-2 whiteframe">
                <div class="form-group">
                    <div class="form-group offset-md-1 col-md-10 ">
                        <label for="validationDefaultUsername">Username</label>
                        <input type="text" name="username" class="form-control" id="validationDefaultUsername" value="" placeholder="Fackelmann" aria-describedby="inputGroupPrepend2" required>
                    </div>
                </div>
                <div class="clear"></div>
                <div class="form-row">
                    <div class="form-group offset-md-1 col-md10 ">
                        <label for="password validationDefault04">Passwort</label>
                        <input type="password" name="password" class="form-control" id="password validationDefault04" value="" placeholder="** Psst! Geheim. **" required>
                    </div>
                </div>

                <div class="form-row">
                    <div class="clear form-group">
                        <button class="button offset1 col-md-4" type="submit"><p>Sign in</p></button>
                        <input type="hidden" name="action" value="login">
                        <div class="clear"></div>
                    </div>
                </div>
            </div>

        </form>

        <div class="form-group offset1 col-md4" id="wrapper">
            Sie haben noch kein Profil?
            <a href="registrierung">Hier geht's zur Registrierung!</a>
        </div>

        <div class="clear"></div>




    </main>
<?php

echo $this->footer;

?>