<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vérification de Palindrome</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            padding: 20px;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        input[type="text"] {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border-radius: 5px;
            border: 1px solid #ccc;
        }
        button {
            padding: 10px 20px;
            border-radius: 5px;
            font-size: 16px;
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
        }
        #result {
            margin-top: 20px;
            padding: 10px;
            border-radius: 5px;
            text-align: center;
            font-size: 16px;
            color: #333;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Vérification de Palindrome</h2>
    <form method="POST" action="">
        <input type="text" name="word" placeholder="Entrez un mot" required>
        <button type="submit">Vérifier</button>
    </form>
    <div id="result">
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $word = trim($_POST['word']); // Supprimer les espaces en début et fin
            // Supprimer les espaces et convertir en minuscules
            $cleanedWord = strtolower(str_replace(' ', '', $word));
            // Vérifier si le mot est un palindrome
            if ($cleanedWord === strrev($cleanedWord)) {
                $result = "Le mot \"$word\" est un palindrome.";
            } else {
                $result = "Le mot \"$word\" n'est pas un palindrome.";
            }
            echo $result; // Afficher le résultat
        }
        ?>
    </div>
</div>

</body>
</html>