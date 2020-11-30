<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" href="../../favicon.ico">

        <title><?php echo $gameName ?></title>

        <!-- Bootstrap core CSS -->
        <link href="../../css/bootstrap.min.css" rel="stylesheet">

        <!-- Custom styles for this template -->
        <link href="../../css/navbar-top-fixed.css" rel="stylesheet">
    </head>

    <body>
		<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
			<a class="navbar-brand" href="index.php">Panel Administration</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarsExampleDefault">
				<ul class="navbar-nav mr-auto">
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Ressources</a>
						<div class="dropdown-menu" aria-labelledby="dropdown01">
							<a class="dropdown-item" href="../../administration/accounts/index.php">Comptes/Personnages</a>
							<a class="dropdown-item" href="../../administration/equipments/index.php">Equipements</a>
							<a class="dropdown-item" href="../../administration/items/index.php">Objets</a>
							<a class="dropdown-item" href="../../administration/monsters/index.php">Monstres</a>
							<a class="dropdown-item" href="../../administration/parchments/index.php">Parchemins</a>
							<a class="dropdown-item" href="../../administration/places/index.php">Lieux</a>
							<a class="dropdown-item" href="../../administration/races/index.php">Classes</a>
							<a class="dropdown-item" href="../../administration/shops/index.php">Magasins</a>
						</div>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Scénario</a>
						<div class="dropdown-menu" aria-labelledby="dropdown01">
							<a class="dropdown-item" href="../../administration/chapters/index.php">Chapitres</a>
						</div>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Communication</a>
						<div class="dropdown-menu" aria-labelledby="dropdown01">
							<a class="dropdown-item" href="../../administration/news/index.php">News</a>
						</div>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Événements</a>
						<div class="dropdown-menu" aria-labelledby="dropdown01">
							<a class="dropdown-item" href="../../administration/battlesInvitationsNominative/index.php">Invitation de combat nominative</a>
							<a class="dropdown-item" href="../../administration/battlesInvitationsRandom/index.php">Invitation de combat aléatoire</a>
							<a class="dropdown-item" href="../../administration/offerExperience/index.php">Offrir expérience</a>
							<a class="dropdown-item" href="../../administration/offerGold/index.php">Offrir pièce(s) d'or</a>
							<a class="dropdown-item" href="../../administration/offerItem/index.php">Offrir objet</a>
						</div>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Configuration</a>
						<div class="dropdown-menu" aria-labelledby="dropdown01">
							<a class="dropdown-item" href="../../administration/configuration/index.php">Jeu</a>
							<a class="dropdown-item" href="../../administration/itemsTypes/index.php">Types d'objets</a>
						</div>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Débug</a>
						<div class="dropdown-menu" aria-labelledby="dropdown01">
							<a class="dropdown-item" href="../../administration/debugLevel/index.php">Modifier mon niveau</a>
							<a class="dropdown-item" href="../../administration/debugMonster/index.php">Tester un monstre</a>
						</div>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Galerie</a>
						<div class="dropdown-menu" aria-labelledby="dropdown01">
							<a class="dropdown-item" href="../../administration/picturesEquipments/index.php">Equipements</a>
							<a class="dropdown-item" href="../../administration/picturesItems/index.php">Objets</a>
							<a class="dropdown-item" href="../../administration/picturesMonsters/index.php">Monstres</a>
							<a class="dropdown-item" href="../../administration/picturesParchments/index.php">Parchemins</a>
							<a class="dropdown-item" href="../../administration/picturesPlaces/index.php">Lieux</a>
							<a class="dropdown-item" href="../../administration/picturesRaces/index.php">Classes</a>
							<a class="dropdown-item" href="../../administration/picturesShops/index.php">Magasins</a>
						</div>
					</li>
				</ul>
				<ul class="navbar-nav pull-right"> 
					<li class="nav-item dropdown">
						 <a class="nav-link" href="../../index.php">Retour au jeu</a>
					</li>
				</ul>
			</div>
		</nav>

		<!-- Main jumbotron for a primary marketing message or call to action -->
		<div class="container">
			<div class="jumbotron">
