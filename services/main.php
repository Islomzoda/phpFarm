<?php

use classes\Farm;

// метод добавляет новых животных
function addNewAnimals(array $newAnimals, Farm $farm){
    foreach ($newAnimals as $animal => $quantity){
        $className = '\\classes\\animals\\' .ucfirst($animal);

        for($i = 1; $i <= $quantity; $i++){
    $farm->addAnimal(new $className(uniqid($animal)));
        }

    }
}


//метод возвращает тип продукта и еженедельное количество производимого продукта
function showWeeklyProductList(array $products){
    foreach ($products as $productType => $productQuantity){
        echo $productType .' - ' . $productQuantity . "\n";
    }
}

//метод возвращает тип животного и их количество
function showAnimalList(array $animals){
    foreach ($animals as $animalType=> $animalQuantity){
        echo $animalType . ' - ' . $animalQuantity . "\n";
    }
}

/*
 * Цикл 7 раз (неделю) произвести сбор продукции (подоить коров и собрать яйца у кур).
 * */
function getWeeklyProductCollection(Farm $farm){
    for ($count = 1; $count <= 7; $count++){
        $farm->collectProduct();
    }
}