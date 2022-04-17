<?php

use App\Farm;

// метод добавляет новых животных
// function addNewAnimals(array $newAnimals, Farm $farm): void
// {
//     foreach ($newAnimals as $animal => $quantity) {
//         $className = '\\App\\animals\\' . ucfirst($animal);
//
//         for ($i = 1; $i <= $quantity; $i++) {
//             $farm->addAnimal(new $className(uniqid($animal)));
//         }
//     }
// }




//метод возвращает тип продукта и еженедельное количество производимого продукта
function showWeeklyProductList(array $products): void
{
    foreach ($products as $productType => $productQuantity){
        echo $productType .' - ' . $productQuantity . "\n";
    }
}

//метод возвращает тип животного и их количество
function showAnimalList(array $animals): void
{
    foreach ($animals as $animalType=> $animalQuantity){
        echo $animalType . ' - ' . $animalQuantity . "\n";
    }
}

/*
 * Цикл 7 раз (неделю) произвести сбор продукции (подоить коров и собрать яйца у кур).
 * */
function getWeeklyProductCollection(Farm $farm): void
{
    for ($count = 1; $count <= 7; $count++){
        $farm->collectProduct();
    }
}