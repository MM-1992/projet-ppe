<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>RéviQuizz</title>
</head>
<body>
 <h1>ALOHA ! </h1> <!--gros titre-->
 <p> <hr> Veuillez saisir votre login et votre mot de passe</hr></p><!--paragraphe-->
<form method="post" action="traitement.php" > 
<p>
	<label>Mail : </label>
	<input type="texte" name="mail" id="mail" >
	<p>
	<label>Mot de passe : </label>
	<input type="password" name="mdp" id="mdp" >
	<p>
	<input type="submit" name="envoyer">
	<p>
	<label>Mot de passe oublié ? : </label>
	<input type="text" name="mdp_oublié">
	<p>
</form>
 </p>

</body>

</html>