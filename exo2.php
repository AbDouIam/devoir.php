<?php 
  if(isset($_POST["nombre"])){
    $nombre = $_POST["nombre"];
  if ($nombre % 3 == 0 && $nombre % 5 == 0)
    $resultat= " $nombre est multiple de 3 et de 5";
  else 
    $resultat=" $nombre n'est multiple de 3 et de 5";
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Diviseur commun</title>
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
            <span>Exercice 2:</span><br>
            <p>Rédigez une expression conditionnelle pour tester si un nombre est à la fois un
multiple de 3 et de 5.</p>
        </div>
        <div class="formulaire">
            <form method="post">
              <label for="nombre">Entrer un nombre : </label>
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