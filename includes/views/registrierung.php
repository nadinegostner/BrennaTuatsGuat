<?php

echo $this->header;

?>

<!--Registrierung: id verweist auf Pfad und Controller (siehe routes)-->
   <main id="wrapper register">

        <h1>Registrierung</h1>

       <!--Meldung bei erfolgreicher Registrierung-->
       <?php if($this->RegisterSuccessful): ?>

           <h2>Registrierung erfolgreich! Herzlichen Glückwunsch!!</h2>
           <section>
               <p>
                    Sie sind bereits registriert? Klicken Sie <a href="login">hier um sich anzumelden</a>.
               </p>
           </section>
        <?php else: ?>


       <!--Formular Registrierung-->
       <form method="post" id="registerModal" role="document" aria-labelledby="registerModalLabel">
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="validationDefault01">First name</label>
                    <input type="text" name="name" class="form-control" id="validationDefault01" placeholder="Max" >
                </div>

<!--                <div class="form-group col-md-6">-->
<!--                    <label for="validationDefault02">Last name</label>-->
<!--                    <input type="text" name="lastname" class="form-control" id="validationDefault02" placeholder="Mustermann" >-->
<!--                </div>-->
            </div>

            <div class="form-group">
                <div class="form-group col-md-6">
                    <label for="validationDefaultUsername">Username*</label>
                    <input type="text" name="name" class="form-control" id="validationDefaultUsername" placeholder="Fackelmann" aria-describedby="inputGroupPrepend2" required>
                </div>

<!--                <div class="form-group col-md-12">-->
<!--                    <label for="validationDefault03">E-Mail</label>-->
<!--                    <input type="email" name="mail" class="form-control" id="validationDefault03" placeholder="max.mustermann@mail.com" >-->
<!--                </div>-->
            </div>

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="password validationDefault04">Passwort*</label>
                    <input type="password" name="pwd" class="form-control" id="validationDefault04 pwd" placeholder="Passwort" required>
                </div>
                <div class="form-group col-md-6">
                    <label for="confirm_password validationDefault05">Passwort wiederholen*</label>
                    <input type="password" name="pwd2" class="form-control" id="validationDefault05 pwd2" placeholder="und nochmal..." required>
                </div>
                <div class="form-group col-md-12">
                    <small id="passwordHelpBlock" class="form-text text-muted">
                        Dein Passwort muss 8-20 Zeichen lang sein, muss Buchstaben als auch Zahlen beinhalten und darf keine Sonderzeichen beinhalten.
                    </small>
                </div>
                <div class="form-group col-md-12">
                    <small id="requiredInfo" class="form-text text-muted">
                        * Diese Felder müssen ausgefüllt werden.
                    </small>
                </div>
            </div>

            <input type="hidden" name="action" value="register">

            <div>
                <button class="button col-md-3 btn-primary" type="submit">Registrieren</button>
            </div>
        </form>

        <?php endif; ?>


    </main>
    <div class="clear"></div>



<?php

echo $this->footer;

?>