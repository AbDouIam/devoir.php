<?php
if (isset($_POST["nombre1"]) && isset($_POST["nombre2"])){
  $nombre1 = $_POST["nombre1"];
  $nombre2 = $_POST["nombre2"];
  for ($i = 1; $i <= ($nombre1 * $nombre2); $i++) {
    if ($i % $nombre1 == 0 && $i % $nombre2 == 0) {
      $ppcm = $i;
      break;
    }
  }
  $resultat = "Le ppcm de $nombre1 et de $nombre2 est $i";
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
                <span>Exercice 4:</span><br>
                <p>Ecrire un programme qui permet de calculer le PPCM de deux entiers saisis au
                    clavier.</p>
            </div>
            <div class="formulaire">
                <form method="post">
                    <label>Entrez un entier :</label>
                    <input type="text" name="nombre1" required><br>
                    <label>Entrez un entier :</label>
                    <input type="text" name="nombre2" required>
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

