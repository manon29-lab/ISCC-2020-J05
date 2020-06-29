<?php
$nom_produit = 'T-shirt simple';
$couleur = ' Blanc '; 
$prix = 10.50;
$disponible = true;
$quantite = 10  ;

echo "<h3>" . $nom_produit . "</h3>";
echo "<p> Le nom du produit est " . $nom_produit . "</p>";
echo "<p> Il reste " . $quantite . " produits en stock </p>";
echo "<p> Le produit " . $nom_produit . " est de couleur" . $couleur . "</p>";

echo "<h4>" . $nom_produit . "</h4>";
echo "<p> Acheter 3 produits couterait".  $prix*3 .  "</p>";
echo "<p> Acheter la totalité des produits disponibles couterait " . $prix*$quantite. "</p>";
echo "<p> Si 3 produits sont vendus"; 
?>

<?php
$nom_produit = 'T-shirt simple';
$couleur = ' Blanc '; 
$prix = 10.50;
$disponible = true;
$quantite = 10  ;

echo "<h3>" . $nom_produit . "</h3>";
echo "<p> Le nom du produit est " . $nom_produit . "</p>";
echo "<p> Il reste " . $quantite . " produits en stock </p>";
echo "<p> Le produit " . $nom_produit . " est de couleur" . $couleur . "</p>";

echo "<h4>" . $nom_produit . "</h4>";
echo "<p> Acheter 3 produits couterait".  $prix*3 .  "</p>";
echo "<p> Acheter la totalité des produits disponibles couterait " . $prix*$quantite. "</p>";
echo "<p> Si 3 produits sont vendus alors il reste " . ($quantite-3) . "</p>";

if ($disponible == true) {
    echo "Le produit" .$nom_produit." est disponible en ligne";
}
if ($disponible == false) {
    echo "<p> Le produit" . $nom_produit . "n'est malheuresement plus disponible </p>";
} 
if ($quantite> 5) {
    echo "<p> Il reste " .$quantite . "produits en magasin </p>";
}

if ($quantite < 5) {

    echo "<p> Il ne reste que" .$quantite. "produits en magasin </p>";
}
if ($quantite ==1) {
    echo "<p> Il ne reste qu'un produit en magasin </p>";
}
if ($quantite ==0) {
    echo "<p> Il ne reste plus de produit en magasin </p>";
}
