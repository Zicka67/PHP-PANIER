<!DOCTYPE html>

<html lang="fr">

<head>
    <meta charset="UTF-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>HTML Panier</title>

</head>

<body>

    <h1>Ajouter un produit</h1>
    <form action="traitement.php" method="post"> <!-- action => indique la cible du formulaire, le fichier a atteindre quand le user soumet le form -->
    <p>                                          <!-- method => précise la méthode HTTP de transmission au serveur, des données du form -->
        <label>
            Nom du produit :
            <input type="text" name="name">
        </label>
    </p>
    <p>
        <label>
            Prix du produit :
            <input type="number" step="any" name="price">
        </label>
    </p>
    <p>
        <label>
            Quantité désirée :
            <input type="submit" name="submit" value="Ajouter le produit">
        </label>
    </p>



    </form>



</body>

</html>