<?php
require_once 'classes/animal.php';
require_once 'classes/cows.php';
require_once 'classes/chickens.php';

$QuantityCows = 10;
$QuantityChickens = 20;
$stable = array();
$coop = array();


function CreateAnimals()
{
    global $stable, $QuantityCows, $QuantityChickens, $coop;
    for ($i = 0; $i < $QuantityCows; $i++) {
        array_push($stable, new Cows());
    }
    for ($i = 0; $i < $QuantityChickens; $i++) {
        array_push($coop, new Chickens());
    }
}

// CreateAnimals();
// echo '<pre>';
// echo print_r($coop);
// echo print_r($stable);
// echo '</pre>';
function GetProducts()
{
    global $stable, $coop;
    foreach ($stable as $cow) {
        $cow->GetProducts();
    }
    foreach ($coop as $chicken) {
        $chicken->GetProducts();
    }
}

CreateAnimals();
echo 'Животные созданы!';
GetProducts();
echo '<br>';
echo "Получено молока:" .Cows::$totalMilk;
echo '<br>';
echo "Получено яиц:" .Chickens::$totalEggs;




function getGUID()
{
    if (function_exists('com_create_guid')) {
        return com_create_guid();
    } else {
        mt_srand((float) microtime() * 10000); //optional for php 4.2.0 and up.
        $charid = strtoupper(md5(uniqid(rand(), true)));
        $hyphen = chr(45); // "-"
        $uuid = chr(123) // "{"
            . substr($charid, 0, 8) . $hyphen
            . substr($charid, 8, 4) . $hyphen
            . substr($charid, 12, 4) . $hyphen
            . substr($charid, 16, 4) . $hyphen
            . substr($charid, 20, 12)
            . chr(125); // "}"
        return $uuid;
    }
}
