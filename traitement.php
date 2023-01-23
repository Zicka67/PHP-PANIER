<?php
session_start();

switch($_GET["action"]) {

    case "addProduct" :

        if(isset($_POST["submit"])) {
            //Ce filtre supprime une chaine de caractère de tte présence de carac spéciaux et de balise HTML
            $name = filter_input(INPUT_POST, "name", FILTER_SANITIZE_FULL_SPECIAL_CHARS);//Nouvelle version de FILTER_SANITIZE_STRING
            //Ce filtre validera le prix UNIQUEMENT si il est a virgule et FLAG = permet " , " et " . "
            $price = filter_input(INPUT_POST, "price", FILTER_VALIDATE_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
            //Ce filtre ne validera la quantité UNIQUEMENT si le prix est un chiffre entier différent de 0
            $qtt = filter_input(INPUT_POST, "qtt", FILTER_VALIDATE_INT);
            
            if($name && $price && $qtt) {
                $product = [
                    "name" => $name,
                    "price" => $price,
                    "qtt" => $qtt,
                    "total" => $price*$qtt,
                ];
                $_SESSION["products"][] = $product;//[] est un raccourci pour indiquer que nous ajoutons une nouvelle 
                //entrée au futur tab "products" associé a cette clé.
            }

            header("Location: index.php");
        }
    break;

    // Decrease Quantity product
    case "lowerQtt":

        header("Location: recap.php");
        die;
    break;

    // Increase Quantity product
    case "addQtt":

        header("Location: recap.php");
        die;
    break;

    // Delete all Qtt product
    case "deleteAll":
        unset($_SESSION["products"]);
        header("Location: recap.php");
        die;
    break;

    case "deleteProduct":

        header("Location: recap.php");
        die;
    break;
}




?>


</body>

</html>