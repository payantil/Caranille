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
			<a class="navbar-brand" href="../../modules/main/index.php"><?php echo $gameName ?></a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarsExampleDefault">
				<ul class="navbar-nav mr-auto">
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Accueil</a>
						<div class="dropdown-menu" aria-labelledby="dropdown01">
							<a class="dropdown-item" href="../../modules/main/index.php">Actualité</a>
							<a class="dropdown-item" href="../../modules/presentation/index.php">Présentation</a>
							<a class="dropdown-item" href="../../modules/race/index.php">Les classes</a>
							<a class="dropdown-item" href="../../modules/contact/index.php">Contact</a>
							<a class="dropdown-item" href="../../modules/about/index.php">A propos</a>
						</div>
					</li>

					<?php
					//Si le joueur est connecté on affiche le menu du jeu
					if (isset($_SESSION['account']['id']))
					{
						?>

						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Personnage (<?php echo $battleInvitationRow ?>)</a>
							<div class="dropdown-menu" aria-labelledby="dropdown01">
								<?php
								//Si le joueur possèdes une invtation de combaz
								if ($battleInvitationRow > 0)
								{
									?>
									<a class="dropdown-item" href="../../modules/battleInvitation/index.php">Invitation de combat (<?php echo $battleInvitationRow ?>)</a>
									<?php
								}
								?>
								<a class="dropdown-item" href="../../modules/character/index.php">Fiche complète</a>
								<a class="dropdown-item" href="../../modules/inventory/index.php">Inventaire</a>
								<a class="dropdown-item" href="../../modules/skillPoint/index.php">Points de compétences</a>
							</div>
						</li>
								
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Aventure</a>
							<div class="dropdown-menu" aria-labelledby="dropdown01">
								<a class="dropdown-item" href="../../modules/story/index.php">Continuer l'aventure</a>

								<?php
								//Si characterplaceId est supérieur ou égal à un le joueur est dans un lieu. On met le raccourcit vers le lieu
								if($characterPlaceId >= 1)
								{
									?>

									<a class="dropdown-item" href="../../modules/place/index.php">Lieu actuel</a>

									<?php
								}
								//Si characterplaceId n'est pas supérieur ou égal à un le joueur est dans aucun lieu. On met le raccourcit vers la carte du monde
								else
								{
									?>

									<a class="dropdown-item" href="../../modules/map/index.php">Carte du monde</a>

									<?php
								}
								?>
								<a class="dropdown-item" href="../../modules/bestiary/index.php">Bestiaire</a>
								<a class="dropdown-item" href="../../modules/travelogue/index.php">Carnet de voyage</a>
							</div>
						</li>
								
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Communauté (<?php echo $privateConversationNumberRow + $tradeRequestRow + $tradeRow + $marketOfferQuantityRow ?>)</a>
							<div class="dropdown-menu" aria-labelledby="dropdown01">
								<a class="dropdown-item" href="../../modules/arena/index.php">Arène (PVP)</a>
								<a class="dropdown-item" href="../../modules/chat/index.php">Chat</a>
								<a class="dropdown-item" href="../../modules/privateConversation/index.php">Messagerie privée (<?php echo $privateConversationNumberRow ?>)</a>
								<a class="dropdown-item" href="../../modules/tradeRequest/index.php">Place des échanges (<?php echo $tradeRequestRow + $tradeRow ?>)</a>
								<a class="dropdown-item" href="../../modules/market/index.php">Le marché (<?php echo $marketOfferQuantityRow ?>)</a>
							</div>
						</li>      
					<?php
					}
					?>
				</ul>
				<ul class="navbar-nav pull-right"> 
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Mon compte <?php if(isset($_SESSION['account']['id'])) { echo "($totalNotification)"; } ?></a>
						<div class="dropdown-menu" aria-labelledby="dropdown01">
							<?php
							//Si le joueur est connecté on lui donne la possibilité de se déconnecter
							if (isset($_SESSION['account']['id']))
							{
								?>
								
								<a class="dropdown-item" href="../../modules/notification/index.php">Notifications (<?php echo $notificationNumberRow ?>)</a>
								<a class="dropdown-item" href="../../modules/security/index.php">Sécurité</a>
								
								<?php
								switch ($accountAccess)
								{
									case 0:
									
									break;

									case 1:
									?>

									<a class="dropdown-item" href="../../moderation/main/index.php">Modération</a>

									<?php
									break;

									case 2:
									?>

									<a class="dropdown-item" href="../../moderation/main/index.php">Modération</a> 
									<a class="dropdown-item" href="../../administration/main/index.php">Administration</a>
									
									<?php
									break;
								}
								?>
															
								<a class="dropdown-item" href="../../modules/logout/index.php">Déconnexion</a>
									
								<?php
							}
							//Sinon on propose au joueur de s'inscrire ou se connecter
							else
							{
								?>

								<a class="dropdown-item" href="../../modules/login/index.php">Connexion</a>
								<a class="dropdown-item" href="../../modules/register/index.php">Inscription</a>
								<a class="dropdown-item" href="../../modules/forgetPassword/enterCode.php">Code</a>
									
								<?php
							}
							?>
						</div>
					</li>
				</ul>
			</div>
		</nav>

		<!-- Main jumbotron for a primary marketing message or call to action -->
		<div class="container">
			<div class="jumbotron">
