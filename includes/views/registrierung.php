<?php

echo $this->header;

?>

<!--variablen angepasst: trotzdem immer Fehlermeldung errorFields: name (Bitte Wert eingeben) -> Feld umbenannt zu username-->
   <main id="wrapper register">

        <h1>Registrierung</h1>

        <form method="post" action="login" id="registerModal" role="document" aria-labelledby="registerModalLabel">
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="validationDefault01">First name</label>
                    <input type="text" name="firstname" class="form-control" id="validationDefault01" placeholder="Max" >
                </div>

                <div class="form-group col-md-6">
                    <label for="validationDefault02">Last name</label>
                    <input type="text" name="lastname" class="form-control" id="validationDefault02" placeholder="Mustermann" >
                </div>
            </div>

            <div class="form-group">
                <div class="form-group col-md-12">
                    <label for="validationDefaultUsername">Username*</label>
                    <input type="text" name="username" class="form-control" id="validationDefaultUsername" placeholder="Fackelmann" aria-describedby="inputGroupPrepend2" required>
                </div>

                <div class="form-group col-md-12">
                    <label for="validationDefault03">E-Mail</label>
                    <input type="email" name="mail" class="form-control" id="validationDefault03" placeholder="max.mustermann@mail.com" >
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="password validationDefault04">Passwort*</label>
                    <input type="password" name="pwd" class="form-control" id="password validationDefault04 pwd" placeholder="** Psst! Geheim. **" required>
                </div>
                <div class="form-group col-md-6">
                    <label for="confirm_password validationDefault05">Passwort wiederholen*</label>
                    <input type="password" name="pwd2" class="form-control" id="confirm_password validationDefault05 pwd2" placeholder="und nochmal..." required>
                </div>
                <div class="form-group col-md-12">
                    <small id="passwordHelpBlock" class="form-text text-muted">
                        Your password must be 8-20 characters long, contain letters and numbers, and must not contain spaces, special characters, or emoji.
                    </small>
                </div>
                <div class="form-group col-md-12">
                    <small id="requiredInfo" class="form-text text-muted">
                        * These are required fields.
                    </small>
                </div>
            </div>

            <input type="hidden" name="action" value="register">

            <div>
                <button class="button col-md-3 btn-primary" type="submit">Sign in</button>
            </div>
        </form>


    </main>
    <div class="clear"></div>

<!--
    <div class="modal fade<?php if($registerError):?> in<?php endif; ?>" id="registerModal" tabindex="-1" role="dialog" aria-labelledby="registerModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="registerModalLabel">Registrierung</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <p class="col-xs-12">
                        Wir benötigen folgende Angaben um Sie für unseren Dienst registrieren zu können:
                    </p>

                    <form method="post" action="login" class="col-xs-12">

                        <div class="form-group">
                            <label for="name">Benutzername:</label>
                            <input type="text" class="form-control" name="name" id="name" placeholder="Benutzernamen eingeben">
                        </div>
                        <div class="form-group">
                            <label for="pwd">Passwort (mindestens 8 Zeichen):</label>
                            <input type="password" name="pwd" class="form-control" id="pwd" placeholder="Bitte Passwort eingeben (mind. 8 Zeichen)">
                        </div>
                        <div class="form-group">
                            <label for="pwd2">Passwort (wiederholen):</label>
                            <input type="password" name="pwd2" class="form-control" id="pwd2" placeholder="Bitte das Passwort wiederholen">
                        </div>

                        <input type="hidden" name="action" value="register">

                    </form>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Abbrechen</button>
                <button type="button" class="btn btn-primary">Registrieren</button>
            </div>
        </div>
    </div>
    </div>-->

<?php

echo $this->footer;

?>