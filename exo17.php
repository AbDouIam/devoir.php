<?php 
  function calculerSinus($angle, $unite = 'radian') {
    // Vérifier l'unité et convertir l'angle en radians si nécessaire
    if ($unite == 'degré') {
        // Convertir de degrés à radians
        $angle = deg2rad($angle);
    } elseif ($unite == 'grade') {
        // Convertir de grades à radians
        $angle = $angle * (pi() / 200);
    }
    
    // Calculer le sinus de l'angle en radians
    return sin($angle);
}
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $angle = $_POST["angle"];
    $unite = $_POST["unite"];
    if ($unite != "") {
        $reponse =calculerSinus($angle, $unite);
        $resultat = "Sinus de $angle $unite : $reponse";
    } else
        $resultat = "Selectionner une unite";

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles/exo.css">
    <link rel="stylesheet" href="styles/select.css">
    <script defer src="scripts/link.js"></script>
    <script defer src="scripts/select.js"></script>
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
            <span>Exercice 17:</span><br>
              <p>À partir de la fonction sinus de PHP, écrivez une fonction qui donne le sinus
              d’un angle donné en radian, en degré ou en grade. Les paramètres sont la mesure l’angle, et l’unité est symbolisée par une lettre. Le deuxième paramètre doit avoir une valeur par défaut correspondant aux radians.</p>
          </div> 
          <div class="formulaire">
              <form method="post" action="">
                  <label>Entrez le degré de l'angle :</label>
                  <input type="number" step="any" id="angle" name="angle" style="width: 100px" required>
                  <div class="custom-select"  style="width:100px;display:inline-block"><select name="unite" id="unite " >
                    <option value="">Unité</option>
                    <option value="radian">Radian</option>
                    <option value="degré">Degré</option>
                    <option value="grade">Grade</option>
                  </select></div>
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