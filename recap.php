<?php
session_start();
?>

<!DOCTYPE html>
<html lang="fr">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Recap des produits</title>

</head>

<body>

    <?php
    // Soit clé "produits" du tab de session n'existe pas : !isset()
    if (!isset($_SESSION["products"]) || empty($_SESSION["products"])) { // soit cette clé existe mais est vide : empty()
        echo "<p> Aucun produit en session ... </p>";
    } else {
        echo "<table>",
            "<thead>",
            "<tr>",
            "<th>#</th>",
            "<th>Nom</th>",
            "<th>Prix</th>",
            "<th>Quantité</th>",
            "<th>Total</th>",
            "</tr>",
            "</thead>",
            "<tbody>";
        $totalGeneral = 0;

        foreach ($_SESSION["products"] as $index => $product) {
            echo "<tr>",
                "<td>" . $index . "</td>",
                "<td>" . $product["name"] . "</td>",
                "<td>" . number_format($product["price"], 2, ",") . " €</td>",
                "<td>" . $product["qtt"] . "</td>",
                "<td>" . number_format($product["total"], 2, ",") . " €</td>",
                "</tr>";
            $totalGeneral += $product["total"];
        }
        echo  "<tr>",
                "<td colspan=4>Total général : </td>",
                "<td><strong>" . number_format($totalGeneral, 2, ",") . " €</strong></td>",
                "<tr>",
                "</tbody>",
                "</table>";
    }
    ?>



</body>

</html>