<?
session_start();
include "verification.php";

?>
<!DOCTYPE html>
<html>

<head>
	<title>Félicitations !</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Amatic+SC&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=DotGothic16&display=swap" rel="stylesheet">
</head>

<body>
	<header>
		<h1>Jeu de rôle médiéval</h1>
		<nav>
			<ul>
				<li><a href="jeu.php">Accueil</a></li>
				<li><a href="#">Profil</a></li>
				<li><a href="#">Personnages</a></li>
				<li><a href="#">Quêtes</a></li>
				<li><a href="deconnexion.php">Déconnexion</a></li>
			</ul>
		</nav>
	</header>
	<div id="wrapper">
		<main>
			<h2>Félicitations <span class="surbrillance"><?= $_SESSION["nom"] ?></span> ! </h2>
			<p>Votre personnage <span class="surbrillance"><?= $_SESSION["race"] ?> <?= $_SESSION["classe"] ?></span> a
				été créé avec succès.</p>
			<p>Vous êtes maintenant prêt à vivre des aventures dans le monde fantastique de notre jeu de rôle médiéval.
			</p>
			<h2>Votre première quête :</h2>
			<p>Le village de Brennac est en danger ! Les habitants sont terrorisés par des créatures maléfiques qui
				rôdent dans la forêt voisine. Le chef du village vous a demandé de l'aide pour débarrasser la région de
				ces monstres. Partez en quête et sauvez le village !</p>
			<a href="quete001.php">Accepter la quête</a>
		</main>
	</div>
	<footer>
		<p>&copy; 2023 Jeu de rôle médiéval - Tous droits réservés.</p>
	</footer>
</body>

</html>