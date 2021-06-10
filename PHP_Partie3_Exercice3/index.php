<html lang="fr"></html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test PHP</title>
</head>
<body>
    <h1>Exercices PHP - Partie 2</h1>

    <h2 class="">Exercice 3</h2>
    <p style="color:#8080FF">Créez deux variables contenant chacune une string. 
    Créez une fonction qui retourne le contenu de ces deux variables.</p>
    <!-- methode 1 -->
    <?php
        function hobby() {
            $a = 'Livres';
            $b = 'Musique';
            return "J'aime les $a et la $b.";
        }
        echo hobby();
    ?>

    <!-- methode 2 -->
    <?php
    // function returnStrings($string1, $string2){
    //             return $string1. ' ' .$string2;
    //         }
    //         echo 'Hello + World = ' .returnStrings('Hello', 'World');
    ?>

    <!-- methode 3 -->
    <?php
    // $text1 = 'Hello';
    // $text2 = 'Decodeuses';
    // $text3 = 'ça va?';
    // function = concatString($string1, $string2){
    //     $concatText = $string1 . ' ' . $string2. ' ' . $string3;
    //     return $concatText;
    // }
    // echo concatString($text1, $text3);
    ?>

</body>
</html>
