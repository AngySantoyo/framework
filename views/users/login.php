<html>
    <head>
        <title>Inicio de sesión</title>
        </head>
    <body>
<h3>Inicio de sesión</h3>

<form class="contacto" action="<?php echo APP_URL."/users/login"; ?>" method="post">
<fieldset>
        <legend>Inicio de sesión</legend>
    
    <div>
        <label for="username">Username</label>
        <input type="text" name="username">
        </div>
    <br>
    <div>
        <label for="password">Password</label>
        <input type="text" name="password">
        </div>
    <div>
        <input type="submit" value="Entrar">
        </div>
    </fieldset>
</form>
    </body>
    </html>

