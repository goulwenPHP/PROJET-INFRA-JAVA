<html>
	<head>
		<meta charset="utf-8"/>
		<link rel="stylesheet" href="stylePagePrincipale.css" />
		<title> Sport manager event </title>
	</head>
	<body>
		<img src="banniere.png">
		<form method="post" action="retourIndex.php">
  			<p>
  				<label for="login">Identifiant :</label><br/>
  				<input type="text" name="login" placeholder="ex : mail@gmail.com"/>
				<br/><br/>
  				<label for="pass">Mot de passe :</label><br/>
				<input type="password" name="pass" />
  			</p>
  			<button type="submit">Se connecter</button><br/><br/>
			<p> Pas de compte ? 
			<a href="inscription.php" ><input type="button" value="Rejoins-nous !" </a></p>
		</form>
	</body>
</html>