<html lang="fr"></html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test PHP</title>
</head>
<body>
    <h1>Exercices PHP - Partie 2</h1>

    <h2 class="">Exercice 5</h2>
    <p style="color:#8080FF">Créez une fonction qui retourne une chaîne de caractère et un nombre aléatoire.</p>
    <?php
        function display(){
            $i = rand(1,30);
            echo "Cette fonction retourne une chaine de caractère et le nombre alétoire $i .";
        }
        echo display();
    ?>
</body>
</html>
