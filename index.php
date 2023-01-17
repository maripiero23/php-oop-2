<?php 

require_once "./classes/Product.php";
require_once "./classes/Category.php";
require_once "./classes/Game.php";

$dogCategory = new Category("Cani", "fa-dog");
$catCategory = new Category("Gatti","fa-cat");
$petsCategory = new Category("Pets", "fa-paw");
$brushCategory = new Category("Useful", $petsCategory);

$osso = new Product("Osso giocattolo", 15, $petsCategory);
$collare = new Product("Collare a fascetta", 20, $petsCategory);
$ciboScatola = new Food("Cibo in scatola", 25, $dogCategory, 300);
$croccantini = new Food("Croccantini di pesce", 4.5, $catCategory, 200);
$tiragraffi = new Game("Tiragraffi", 30, $catCategory,["plastica", "legno"]);

$palla = new Game("Palla da tennis", 4.5, $dogCategory,["nylon", "stoffa"]);


// var_dump($collare, $brushCategory);
// var_dump($catCategory)




$prodotti = [
    $osso,
    $collare,
    $ciboScatola,
    $croccantini,
    $tiragraffi
];

var_dump($prodotti)

?>