<?php
    if(isset($_POST["nombre"])){
        $nombre = $_POST["nombre"];
        $perimetre = $nombre*2*3.14;
        $diametre = $nombre * 2;
        $surface = $nombre * $nombre * 3.14;
        $resultat = "Diametre : $diametre <br>
                     Perimetre : $perimetre <br>
                     Surface : $surface";
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
                <span>Exercice 5:</span><br>
                <p>Ecrire un programme qui calcule le diamètre, le périmètre et la surface d’un cercle
                    dont le rayon est saisi au clavier.</p>
            </div>
            <div class="formulaire">
                <form method="post">
                    <label>Entrez le rayon :</label>
                    <input type="text" name="nombre" required>
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

