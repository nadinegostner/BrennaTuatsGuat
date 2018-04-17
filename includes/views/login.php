<?php

echo $this->header;

?>
    <main id="wrapper">
        <h1>Login</h1>

        <div class="offset2 whiteframe">
            <div class="form-group">
                <div class="form-group offset1 grid10 ">
                    <label for="validationDefaultUsername">Username</label>
                    <input type="text" class="form-control" id="validationDefaultUsername" placeholder="Fackelmann" aria-describedby="inputGroupPrepend2" required>
                </div>
            </div>
            <div class="clear"></div>
            <div class="form-row">
                <div class="form-group offset1 grid10 ">
                    <label for="password validationDefault04">Passwort</label>
                    <input type="password" class="form-control" id="password validationDefault04" placeholder="** Psst! Geheim. **" required>
                </div>
            </div>
            <div class="clear"></div>
            <div class="button offset1 grid4"><p>Sign in</p></div>
            <div class="clear"></div>
        </div>

        <div class="clear"></div>

    </main>
<?php

echo $this->footer;

?>