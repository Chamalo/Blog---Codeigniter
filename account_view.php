<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="fr">

    <head>
        <meta charset="UTF-8" />
    </head>

    <body onload="onload();">

    <button type="button" onclick="close_login()">Connexion</button>
    <button type="button" onclick="close_register()">Creer un compte</button>

    <!-- Contenu du formulaire de connexion !-->
    <div id="login_container">
        <form name="login_form" method="post" action="/account/login">
            <fieldset>
                <p>Pseudo :
                    <input type="text" class="form-control" name="user_pseudo" id="pseudo" required=""></p>
                <p>Mot de passe :
                    <input type="password" class="form-control" name="user_password" id="password" required=""></p>
                <p>Connexion automatique :
                    <input type="checkbox" name="auto" id="auto"></p>
                <input type="submit" value="Connexion" name="loginSubmit" class="btn btn-lg btn-success btn-block">
            </fieldset>
        </form>
    </div>

    <!-- Contenu du formulaire d'enregistrement !-->
    <div id="register_container">
		<form name="register_form" method="post" action="/account/register">
            <fieldset>
                <p>Pseudo : 
                    <input type="text" class="form-control" name="user_pseudo" id="pseudo" required=""></p>
                <p>Adresse email : 
                    <input type="email" class="form-control" name="user_email" id="email" required=""></p>
                <p>Mot de passe : 
                    <input type="password" class="form-control" name="user_password" id="password" required=""></p>
                <p>Confirmez mot de passe : 
                    <input type="password" class="form-control" name="password_conf" id="password2" required=""></p>
                <input type="submit" value="S'enregistrer" name="registerSubmit" class="btn btn-lg btn-success btn-block">
            </fieldset>
		</form>
    </div>

    </body>
</html>
