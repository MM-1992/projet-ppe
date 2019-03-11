<!DOCTYPE html>
<html>
<head>
	<title>Formulaire Inscription</title>
</head>
<body>
	<form method="post" action="traitement.php">
   <p>
       <label for="Nom">Votre Nom</label> : <input type="text" name="Nom" id="Nom" />
   </p>
 </form>
	<form method="post" action="traitement.php">
   <p>
       <label for="Prénom">Votre Prénom</label> : <input type="text" name="Prénom" id="Prénom" />
   </p>
 </form>
<form method="post" action="traitement.php">
   <p>
       <label for="Mail">Votre Mail</label> : <input type="Mail" name="Mail" id="Mail" />
   </p>
 </form>
 <form method="post" action="traitement.php">
   <p>
       <label for="MDP">Votre MDP</label> : <input type="password" name="MDP" id="MDP" />
   </p>
   <input type="submit" name="envoyer">
</form>

</body>
</html>