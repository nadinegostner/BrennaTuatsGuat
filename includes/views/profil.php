<?php

echo $this->header;

?>

    <main id="wrapper profil">

        <h1>Profil</h1>


        <form method="put" action="api/profil">
            <div class="form-row">
                <div class="form-group grid8">
                    <label for="validationDefault01">First name</label>
                    <input type="text" class="form-control" id="validationDefault01" value="<?php echo $this->firstname; ?>">
                </div>

                <div class="form-group grid8">
                    <label for="validationDefault02">Last name</label>
                    <input type="text" class="form-control" id="validationDefault02" value="<?php echo $this->lastname; ?>">
                </div>
            </div>

            <div class="form-group">
                <div class="form-group grid16">
                    <label for="validationDefaultUsername">Username</label>
                    <input type="text" class="form-control" id="validationDefaultUsername" value="<?php echo $this->username; ?>" aria-describedby="inputGroupPrepend2">
                </div>

                <div class="form-group grid16">
                    <label for="validationDefault03">E-Mail</label>
                    <input type="email" class="form-control" id="validationDefault03" value="<?php echo $this->mail; ?>" >
                </div>
            </div>

            <div class="form-group">
                <div class="form-group grid16">
                    <label for="validationDefault06">Passwort</label>
                    <input type="password" name="pwd" class="form-control" id="validationDefault06 pwd" placeholder="** Psst! Geheim. **" aria-describedby="inputGroupPrepend2" required>
                </div>
            </div>

            <div class="form-row">
                <div class="form-group grid8">
                    <label for="password validationDefault04">Neues Passwort</label>
                    <input type="password" name="pwdneu" class="form-control" id="password validationDefault04 pwd2" placeholder="** Psst! Geheim. **" required>
                </div>
                <div class="form-group grid8">
                    <label for="confirm_password validationDefault05">Neues Passwort wiederholen</label>
                    <input type="password" name="pwd2neu" class="form-control" id="confirm_password validationDefault05" placeholder="und nochmal..." required>
                </div>
                <div class="form-group grid16">
                    <small id="passwordHelpBlock" class="form-text text-muted">
                        Your password must be 8-20 characters long, contain letters and numbers, and must not contain spaces, special characters, or emoji.
                    </small>
                </div>
            </div>

            <?php if($this->id): ?>
                <input type="hidden" name="id" value="<?php echo $this->id; ?>">
            <?php endif; ?>

            <button class="button grid4" type="submit">Save changes</button>
        </form>

        <div class="clear"></div>

        <div class="modal fade<?php if(!$this->userid):?> in<?php endif; ?>" id="toLoginModal" tabindex="-1" role="dialog" aria-labelledby="toLoginModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h2 class="modal-title" id="toLoginModalLabel">Meld dich an!</h2>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <p class="col-xs-12">
                                Damit wir dein Profil anzeigen können, musst du eingeloggt sein!!
                            </p>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Abbrechen</button>
                        <button type="button" id="toLogin" class="btn btn-primary">Zum Login</button>
                    </div>
                </div>
            </div>
        </div>
    </main>




    <script type="text/javascript">

        var editModal = $('#editModal');

        editModal.find('form').unbind('submit');

        editModal.find('form').bind('submit', function(e, that) {

            e.preventDefault();

            editModal.find('.btn-primary').prop('disabled', true);

            hasError = false;

            if(typeof that === 'undefined') {
                that = editModal.find('.btn-primary').get(0);
            }

            var requiredFields = ['#firstname', '#lastname', '#username', '#mail', '#pwdneu'];

            for(var i = 0; i < requiredFields.length; i++) {
                if($(requiredFields[i]).val() == '') {
                    hasError = true;
                    $(requiredFields[i]).closest('.form-group').addClass('has-error');
                }
            }

            if(!hasError)
            {
                $.ajax({
                    'url': $(this).attr('action'),
                    'method': $(this).attr('method'),
                    'data': $(this).serialize(),
                    'dataType': "json",
                    'success': function (receivedData) {

                        if(receivedData.result)
                        {
                            window.setTimeout(function() {
                                location.reload();
                            }, 500);

                        }
                        else
                        {
                            editModal.find('.form-group').removeClass('has-error');

                            $.each(receivedData.data.errorFields, function(key, value) {
                                $('#'+key).closest('.form-group').addClass('has-error');
                            });
                        }

                        editModal.find('.btn-primary').prop('disabled', false);
                    }
                });
            }
            else
            {
                editModal.find('.btn-primary').prop('disabled', false);
            }

        });

    </script>

<?php

echo $this->footer;

?>