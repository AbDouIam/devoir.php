<?php 
$prixHT = $tauxTVA = $montantTVA = $prixTTC = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $prixHT = $_POST['prixHT'];
    $tauxTVA = $_POST['tauxTVA'];
    if (is_numeric($prixHT) && $prixHT > 0 && is_numeric($tauxTVA) && $tauxTVA >= 0) {
        $montantTVA = ($prixHT * $tauxTVA) / 100;
        $prixTTC = $prixHT + $montantTVA;
    }
  $resultat = "Montant TVA : $montantTVA FCFA<br>Prix toutes taxes comprises : $prixTTC FCFA";
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
    <style>
      label,input{
            margin-bottom: 20px;
        }
    </style>
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
              <span>Exercice 14:</span><br>
              <p>Créez un formulaire demandant la saisie d’un prix HT et d’un taux de TVA. Le
                script affiche le montant de la TVA et le prix TTC dans deux zones de texte créées
                dynamiquement. Le formulaire maintient les données saisies.</p>
          </div> 
          <div class="formulaire">
              <form method="post">
                  <label>Prix hors taxes :</label>
                  <input type="text" name="prixHT" required>FCFA<br>

                  <label>Taux de TVA :</label>
                  <input type="text" name="tauxTVA" required style="width : 40px">%<br>

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


