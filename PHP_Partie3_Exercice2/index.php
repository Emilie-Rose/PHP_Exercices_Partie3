<html lang="fr"></html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test PHP</title>
</head>
<body>
    <h1>Exercices PHP - Partie 3</h1>

    <h2 class="">Exercice 2</h2>
    <p style="color:#8080FF">Créez une fonction qui retourne une chaîne de caractère.</p>
    <!-- methode 1 -->
    <?php
        function string() {
            return 'Je suis en train de rechercher une info!';
        };
        echo string();
    ?> 

    <!-- methode 2 -->
    <?php
    $text ='Hello!!';
    function returnText($string = 'coucou'){
        return $string;
    }
    echo returnText($text);
    ?>
</body>
</html>
