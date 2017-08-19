<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!--Je lie le css de l'authentification-->
  <link rel="stylesheet" href="../CSS/CreerUnCompte.css">
  <title>Créer un compte</title>
</head>
  <body>
    <div id="wrapper">

  	<form name="login-form" class="login-form" action="" method="post">

  		<div class="header">
  		<h1>Formulaire d'enregistrement</h1>
  		<span>Créer votre compte.</span>
  		</div>

  		<div class="content">
  		<input name="username" type="text" class="input username" placeholder="Username" />
  		<div class="user-icon"></div>
  		<input name="password" type="password" class="input password" placeholder="Password" />
  		<div class="pass-icon"></div>
      <input name="confirmPassword" type="password" class="input confirmPassword" placeholder="Confirm Password" />
  		<div class="confirmPass-icon"></div>
  		</div>

  		<div class="footer">
  		<input type="submit" name="submit" value="Créer votre compte" class="register" />
  		</div>

  	</form>

  </div>
  <div class="gradient"></div>
</body>
</html>
