<?php

use App\Farm;
use App\animals\Chicken;
use App\animals\Cow;

// первый метод добавляет новых животных
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

// второй метод добавление животных
function addNewAnimals2(array $newAnimals, Farm $farm): void
{
    foreach ($newAnimals as $animal => $quantity){


        if ($animal[0]){
            for($i =1; $i <= $quantity; $i++){
                $farm->addAnimal(new Cow(uniqid($animal)));
            }
        }
        for($i =1; $i <= $quantity; $i++){
            $farm->addAnimal(new Chicken(uniqid($animal)));
        }


    }
}

// третий метод добавление животных пока в режиме дороботки
//function addNewAnimals3(array $newAnimals, Farm $farm): void
//{
//    foreach ($newAnimals as $animal => $quantity){
//
//        switch ($animal) {
//            case ($animal[0]):
//                for ($i = 1; $i <= $quantity; $i++){
//                $farm->addAnimal(new Cow(uniqid($animal)));
//            };
//                break;
//            case ($animal[1]):
//                for ($i = 1; $i <= $quantity; $i++){
//                    $farm->addAnimal(new Chicken(uniqid($animal)));
//                };
//                break;
//        }
//
//
//
//    }
//}



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