<?php

require_once('./services/autoload.php');
require_once('./services/main.php');

use App\animals\Cow;
use App\animals\Chicken;
use App\Farm;


// создаем массив с количеством животных на ферме


$animals = [
    Cow::ANIMALS_TYPE => 10,
    Chicken::ANIMALS_TYPE => 20
];

$farm = new Farm();

try {
    addNewAnimals2($animals, $farm);
    // можно прямо тут без функции можно обработат и добавит
    //     foreach ($animals as $animal => $quantity){
    //
    //
    //        if ($animal[0]){
    //            for($i =1; $i <= $quantity; $i++){
    //                $farm->addAnimal(new Cow(uniqid($animal)));
    //            }
    //        }
    //        for($i =1; $i <= $quantity; $i++){
    //            $farm->addAnimal(new Chicken(uniqid($animal)));
    //        }
    //
    //
    //    }

} catch (Throwable $err){
    echo $err->getMessage();
    return;
}


// выводим информацию о количестве каждого типа животных на ферме
showAnimalList($farm->getAnimalTypeCount());

echo "\n";
// Еженедельный сбор продуктов
getWeeklyProductCollection($farm);

// Выводим общее кол-во собранных за неделю шт. яиц и литров молока.
showWeeklyProductList($farm->getProducts());




echo "-----------------------------------";
echo "\n";


$farm->realeaseProducts();

// добавляем ново купленных животных в нашу ферму
$newAnimals = [
    Cow::ANIMALS_TYPE => 1,
    Chicken::ANIMALS_TYPE => 5
];
//
addNewAnimals2($newAnimals, $farm);

showAnimalList($farm->getAnimalTypeCount());

    echo "\n";

// Еженедельный сбор продуктов включая новых животных
    getWeeklyProductCollection($farm);

//Выводим общее кол-во собранных за неделю шт. яиц и литров молока.
    showWeeklyProductList($farm->getProducts());

