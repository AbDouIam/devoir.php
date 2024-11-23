<?php
if (isset($_POST["nombre"])) {
    $nombre = $_POST["nombre"];
    $somme = 0;
    for ($i = 1; $i < $nombre; $i++){
        if($nombre%$i==0){
            $somme += $i;
        }
    }
    if ($somme == $nombre)
        $resultat = "$nombre est un nombre parfait";
    else
        $resultat = "$nombre n'est pas un nombre parfait";
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
                <span>Exercice 7:</span><br>
                <p>Ecrire un programme qui teste si un nombre saisi au clavier est parfait. <br>
                    NB : Un nombre égal à la somme de ses diviseurs propres est parfait.</p>
            </div>
            <div class="formulaire">
                <form method="post">
                    <label>Entrez le nombre :</label>
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

