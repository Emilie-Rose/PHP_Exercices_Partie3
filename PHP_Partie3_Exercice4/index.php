<html lang="fr"></html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test PHP</title>
</head>
<body>
    <h1>Exercices PHP - Partie 2</h1>

    <h2 class="">Exercice 4</h2>
    <p style="color:#8080FF">Créez une fonction qui retourne deux nombres aléatoire allant de 1 à 15. 
    Si le premier nombre est plus grand que le deuxième affichez "le premier nombre est plus grand 
    que le deuxième" sinon si le deuxième nombre est plus grand affichez "le premier nombre est plus 
    petit que le deuxième". 
    Affichez "les deux nombres sont égaux" si les deux nombres sont identiques.
    </p>
    <?php
        function displayNumber(){
            $a = rand(1,15);
            $b = rand(1,15);
           
            if ($a>$b) {
                echo " Ma 1e variable est = ". $a." et ma 2em variable est = ".$b. " donc : <br>";
                echo "Le premier nombre est plus grand que le deuxième";
            }else if($a<$b){
                echo " Ma 2em variable est = ". $b." et ma 1e variable est = ".$a. " donc : <br>";
                echo "Le premier nombre est plus petit que le deuxième";
            }else{
              echo "Les deux nombres sont égaux";
            }
        }
        echo displayNumber();
    ?>
</body>
</html>
