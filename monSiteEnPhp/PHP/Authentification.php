<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <!--Je lie le css de l'authentification-->
  <link rel="stylesheet" href="../CSS/Authentification.css">
  <title>Authentification</title>
</head>
<body>
  <div id="wrapper">

	<form name="login-form" class="login-form" action="" method="post">

		<div class="header">
		<h1>Formulaire d'authentification</h1>
		<span>Authentifiez-vous, ou créer un compte.</span>
		</div>

		<div class="content">
		<input name="username" type="text" class="input username" placeholder="Username" />
		<div class="user-icon"></div>
		<input name="password" type="password" class="input password" placeholder="Password" />
		<div class="pass-icon"></div>
		</div>

		<div class="footer">
		<input type="submit" name="submit" value="On y va !" class="button" />
		<input type="button" name="submit" value="Créer" class="register" href="CreerUnCompte.php"/>
		</div>

	</form>

</div>
<div class="gradient"></div>
</body>
</html>
