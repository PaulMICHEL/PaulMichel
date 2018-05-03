<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Virifocus | Inscription</title>
    <link rel="stylesheet" href="inscription_habitant_3.css"/>
    <link rel="icon" type="image/png" href="image/logo.png" />
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
</head>

<body class="fond">

<div id="menu">

    <div class="case1">
        <div class="case11"></div>
        <div class="case12">
            <div class="case1212"><br><br>Home</div></a></div>
        <div class="case13">
            <div class="case1313"><br><br>Compte</div></a></div>
        <div class="case14">
            <div class="case1414"><br><br>Paramètres</div></a></div>
        <div class="case15">
            <div class="case1515"><br><br>Aide</div></a></div>
        <div class="case16"></div>
    </div>
</div>


<div class="Main">

    <form class="infos" action="inscription_habitant_3_post" method="post">

        <div class="formulaire">

            <div class="titre"><h1>Créez votre maison</h1></div>

            <div>Pièce :</div>
            <div>Surface (m2)</div>
            <input type="text" name="p1" maxlenght="255" style="text-align: center" required />
            <input type="number" name="s1" maxlenght="255" style="text-align: center" required />



        </div>

        <div class="boutton2">
            <a href="#" class="lien3">
                <button class="ajoutermaisonlink" onclick="">+</button>
            </a>
        </div>

        <div class="captcha">

            <br/>
            <input class="valider" type="submit" value="Valider">

            <a class="lien" href="inscription_habitant_4.php"><p>Next Page Debug</p></a>

        </div>

    </form>


</div>

</body>

</html>