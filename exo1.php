<?php
    if (isset($_POST["mot"])) {
        $mot = $_POST["mot"];
        $inverse = strrev($mot);
        if (strlen($mot)<3) $resultat="Entrez un mot valide";
        else {
            if ($mot === $inverse)
                $resultat = "\"$mot\" est un palindrome !";
            else
                $resultat = "\"$mot\" n'est pas un palindrome.";
        }
        
    }
?>
<!DOCTYPE html>
<html lang="en">
<head> 
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles/exo.css">
    <script defer src="scripts/link.js"></script>
    <script defer src="https://kit.fontawesome.com/daeaf1a76d.js" crossorigin="anonymous"></script>
</head>
<body>
    <header>
         <a href="Acceuil.php"><i class="fa-solid fa-house fa-flip-horizontal fa-xl" style="color: #ffffff;"></i>Acceuil</a>
        <span>Devoir-php</span>
    </header>
    <main>
        <nav>
            <div id="exo-links"></div>  
        </nav>
        <div class="exo">
            <div class="text-exo">
                <span>Exercice 1:</span><br>
                <p>Créez un programme qui prend un mot saisi par l'utilisateur et vérifie s'il s'agit d'un
                palindrome. Affichez le résultat.</p>
            </div>
            <div class="formulaire">
                <form method="post">
                    <label>Entrez un mot :</label>
                    <input type="text" name="mot">
                    <button type="submit">Executer</button>
                </form> 
            </div>
            <div class="resultat">
                <?php if (isset($resultat)) echo $resultat?>
            </div>
        </div>
    </main>
</body>
</html>