<?php
	session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Virifocus</title>
    <meta charset="utf-8"/>
    <link rel="stylesheet" href="dashboard_compte.css"/>
    <link rel="icon" type="image/png" href="image/logo.png" />
	<?php
		try
		{
			$bdd = new PDO('mysql:host=localapp;dbname=virifocus;charset=utf8', 'root', '');
		}
		catch(Exception $e)
		{
				die('Erreur : '.$e->getMessage());
				echo "ERREUR BDD ERREUR BDD ERREUR BDD";
		}
		/* Requ�tes des diff�rentes donn�es du compte */
		$req = $bdd->prepare('SELECT name, firstname FROM users WHERE mail=?');
		$req->execute(array($_SESSION['mail']));
		/* Attribution variable des donn�es */
		 while ($donnees = $req->fetch()) {
			$name = $donnees['name'];
			$firstname = $donnees['firstname'];
		}
	?>
</head>
<body class="fond">
            <div id="site">
			
			<?php
				include "header.php";
			?>
			
				<!-- Boutons des tabs (tableau horizontal) -->
				<div class="tab">
				<button class="tablinks" id="tablink1">Profile</button>		<!-- Le bouton "Profile" est ouvert par d�fault (voir JS) -->
				<button class="tablinks" id="tablink2">Compte</button>
				<button class="tablinks" id="tablink3">Confidentialit&eacute;</button>
				<button class="tablinks" id="tablink4">Notifications</button>
				</div>
				
				<!-- Tab 1 : Profile -->
				<div id="profile" class="tabcontent">
					<div class="bloc">
						<form class="profile_form" action="dashboard_compte_submit.php" method="post"> 
							Name: <input type="text" name="name" value="<?php echo $name;?>">
							Firstname: <input type="text" name="firstname" value="<?php echo $firstname;?>">
						</form>
					</div>
					<div class="bloc">
						J'aimerai savoir comment faire une bonne pur&eacute;e.
					</div>
					<div class="bloc">
						 Quel est votre secret ?
					</div>
				</div>			
						
					<!-- Tab 2 : Compte -->
						<div id="compte" class="tabcontent"> Test2 </div>		
						
					<!-- Tab 3 : Confidentialit� -->
						<div id="confidentialite" class="tabcontent"> Test3 </div>		
						
					<!-- Tab 4 : Notifications -->
						<div id="notifications" class="tabcontent"> Test4 </div>
						
				<input class="valider" type="submit" value="Valider">
			<?php
				include "footer.php";
			?>
			
			</div>
		<script src="https://code.jquery.com/jquery-1.10.2.js"></script>
		<script src="dashboard_compte.js"></script>
</body>
</html>