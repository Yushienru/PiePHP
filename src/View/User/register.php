<div class = "register-form">
<div id="body-content">
    <section id="page" class="container">
        <section class="row">
            <form class="form-horizontal formulaire" method="POST">
                <fieldset>
                    <legend>S'inscrire</legend>
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="name">Prénom</label>
                        <div class="col-md-4">
                            <input id="name" name="name" type="text" placeholder="Renseignez votre prénom ..."
                                class="form-control input-md" required="">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-4 control-label" for="surname">Nom</label>
                        <div class="col-md-4">
                            <input id="surname" name="surname" type="text" placeholder="Renseignez votre nom ..."
                                class="form-control input-md" required="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="city">Ville</label>
                        <div class="col-md-4">
                            <input id="city" name="city" type="text" placeholder="Renseignez votre ville ..."
                                class="form-control input-md" required="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="birth">Date de naissance</label>
                        <div class="col-md-4">
                            <input id="birth" name="birth" type="date" class="form-control input-md" required="">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-4 control-label" for="email">Email</label>
                        <div class="col-md-4">
                            <input id="email" name="email" type="text" placeholder="Renseignez votre e-mail ..."
                                class="form-control input-md" required="">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-4 control-label" for="password">Password</label>
                        <div class="col-md-4">
                            <input id="password" name="password" type="password" placeholder="Choisissez un mot de passe ..."
                                class="form-control input-md" required="">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-4 control-label" for="submit"></label>
                        <div class="col-md-4">
                            <button data-href="PiePHP/user/register" id="submit"
                                class="btn btn-success">S'inscrire</button>
                            <button class="btn btn-warning" id="button-login"
            onclick="window.location.href='login'">Déjà inscrit ?</button>
                        </div>
                    </div>
                </fieldset>
            </form>
        </section>
        
        <section>
            <?php 
            if (isset($error)) {
                echo $error;
            }
            if (isset($success)) {
                echo $success;
            }
            ?>
        </section>
    </section>
</div>
</div>