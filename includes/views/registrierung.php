<?php

echo $this->header;

?>


    <main id="wrapper">

        <h1>Registrierung</h1>

        <form>
            <div class="form-row">
                <div class="form-group grid8">
                    <label for="validationDefault01">First name</label>
                    <input type="text" class="form-control" id="validationDefault01" placeholder="Max" required>
                </div>

                <div class="form-group grid8">
                    <label for="validationDefault02">Last name</label>
                    <input type="text" class="form-control" id="validationDefault02" placeholder="Mustermann" required>
                </div>
            </div>

            <div class="form-group">
                <div class="form-group grid16">
                    <label for="validationDefaultUsername">Username</label>
                    <input type="text" class="form-control" id="validationDefaultUsername" placeholder="Fackelmann" aria-describedby="inputGroupPrepend2" required>
                </div>

                <div class="form-group grid16">
                    <label for="validationDefault03">E-Mail</label>
                    <input type="email" class="form-control" id="validationDefault03" placeholder="max.mustermann@mail.com" required>
                </div>
            </div>

            <div class="form-row">
                <div class="form-group grid8">
                    <label for="password validationDefault04">Passwort</label>
                    <input type="password" class="form-control" id="password validationDefault04" placeholder="** Psst! Geheim. **" required>
                </div>
                <div class="form-group grid8">
                    <label for="confirm_password validationDefault05">Passwort wiederholen</label>
                    <input type="password" class="form-control" id="confirm_password validationDefault05" placeholder="und nochmal..." required>
                </div>
                <div class="form-group grid16">
                    <small id="passwordHelpBlock" class="form-text text-muted">
                        Your password must be 8-20 characters long, contain letters and numbers, and must not contain spaces, special characters, or emoji.
                    </small>
                </div>
            </div>


            <button class="button grid4" type="submit">Sign in</button>
        </form>
    </main>
    <div class="clear"></div>

<?php

echo $this->footer;

?>