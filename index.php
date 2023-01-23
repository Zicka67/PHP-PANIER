<!DOCTYPE html>

<html lang="fr">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="style.css">


    <title>HTML Panier</title>

</head>

<body>

    <?php spl_autoload_register(function ($class_name) {

        require_once $class_name . '.php';
    });

    ?>

    <nav>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="recap.php">Récapitulatif</a></li>
        </ul>
    </nav>

    <div class="container">
        <h1>Ajouter un produit</h1>
        <form action="traitement.php" method="post">
            <!-- action => indique la cible du formulaire, le fichier a atteindre quand le user soumet le form -->
            <p> <!-- method => précise la méthode HTTP de transmission au serveur, des données du form -->
                <label>
                    Nom du produit :
                    <input class="margin1" type="text" name="name">
                </label>
            </p>
            <p>
                <label>
                    Prix du produit :
                    <input class="margin2" type="number" step="any" name="price">
                </label>
            </p>
            <p>
                <label>
                    Quantité désirée :
                    <input class="margin3" type="number" name="qtt" value="">
                </label>
            </p>
            <p class="button">
                <input class="panier-input" type="submit" name="submit" value="Ajouter le produit">
            </p>
        </form>

    </div>



</body>

</html>