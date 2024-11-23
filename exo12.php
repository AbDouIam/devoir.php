<?php
$post = false;
    if($_SERVER["REQUEST_METHOD"] === "POST"){
    $post = true;
    $nom = $_POST["nom"];
    $prenom = $_POST["prenom"];
    $adresse = $_POST["adresse"];
    $ville = $_POST["ville"];
    $codePostal = $_POST["code-postal"];
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
    <link rel="stylesheet" href="styles/tableau.css">
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
              <span>Exercice 12:</span><br>
              <p>Créez un formulaire comprenant un groupe de champs ayant pour titre "Adresse
                client". Le groupe doit permettre la saisie du nom, du prénom, de l’adresse, de la ville et du code postal. Les données sont ensuite traitées par un fichier PHP séparé récupérant les données et les affichant dans un tableau HTML.</p>
          </div> 
          <div class="formulaire">
              <form method="post">
                  <h2>Adresse client</h2>

                  <label>Nom :</label>
                  <input type="text" name="nom" required><br>

                  <label>Prenom :</label>
                  <input type="text" name="prenom" required><br>

                  <label>Adresse :</label>
                  <input type="text" name="adresse" required><br>

                  <label>Ville :</label>
                  <input type="text" name="ville" required><br>

                  <label>Code postal :</label>
                  <input type="text" name="code-postal" required><br>

                  <button type="submit">Executer</button> 
              </form> 
          </div>
          <div class="resultat">
             <?php if($post) echo "
             <table>
                <tr>
                    <th>Nom</th>
                    <th>Prenom</th>
                    <th>Adresse</th>
                    <th>Ville</th>
                    <th>Code postal</th>
                </tr>
                <tr>
                    <td>$nom</td>
                    <td>$prenom</td>
                    <td>$adresse</td>
                    <td>$ville</td>
                    <td>$codePostal</td>
                </tr>
              </table>";
              ?>
          </div>
      </div>
    </main>
</body>
</html>


