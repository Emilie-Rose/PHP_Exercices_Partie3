<html lang="fr"></html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test PHP</title>
</head>
<body>
    <h1>Exercices PHP - Partie 2</h1>

    <h2 class="">Exercice 6</h2>
    <p style="color:#8080FF">Créez une fonction qui retourne l'addition de trois nombres.</p>
    <?php
        function multi($a,$b,$c) {
            echo "Le résultat de la somme des 3 nombres est ";
            return $a+$b+$c;
        }
        echo multi(3,4,5);
    ?>
</body>
</html>
