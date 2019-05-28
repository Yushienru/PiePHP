    <div id="body-content">
        <section id="page" class="container">
            <section class="row">
                <fieldset>
                    <legend>Informations du compte</legend>
                    <div class="login-form text-center">
                        <h2><?php echo ucfirst($_SESSION['name']) . ' ' . ucfirst($_SESSION['surname']); ?></h2>
                        <div class="clear"></div>
                        <div class="account-form text-center">
                            <p>Date de naissance : <?php echo $_SESSION['birth']; ?></p>
                            <p>Ville : <?php echo $_SESSION['city']; ?></p>
                            <p>Adresse email : <?php echo $_SESSION['email']; ?></p>
                            <hr>
                            <div class="text-center">
                                <a onclick="showEmailForm()" class="pointer">Changer d'adresse email</a>
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <a onclick="showPassForm()" class="pointer">Modifier le mot de passe</a>
                            </div>
                            <hr>
                            <form class="form-horizontal" method="POST" id="passForm">
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="old_pass">Ancien mot de passe</label>
                                    <div class="col-md-5">
                                        <input id="old_pass" name="old_pass" type="password"
                                            placeholder="entrez votre ancien mot de passe ..."
                                            class="form-control input-md" required="">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="password">Nouveau mot de passe</label>
                                    <div class="col-md-5">
                                        <input id="password" name="password" type="password"
                                            placeholder="entrez votre nouveau mot de passe ..."
                                            class="form-control input-md" required="">
                                    </div>
                                </div>
                                <div class="form-group text-center">
                                    <div class="col-md-4 text-center">
                                        <button class="btn btn-warning" type="submit">Changer mot de passe</button>
                                    </div>
                                </div>
                            </form>
                            <form class="form-horizontal" method="POST" id="emailForm">
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="email">Nouvel email</label>
                                    <div class="col-md-5">
                                        <input id="email" name="email" type="email"
                                            placeholder="entrez votre nouvel email ..." class="form-control input-md"
                                            required="">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-4-center text-center">
                                        <button class="btn btn-warning" type="submit">Changer adresse email</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <form id="delete" method="POST" class="text-center">
                            <input type="hidden" name="delete">
                            <button type="submit" class="btn btn-danger">Supprimer le compte</button>
                        </form>
                        <button class ="btn btn-warning">Historique Film Vu</button>
                
                </fieldset>
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