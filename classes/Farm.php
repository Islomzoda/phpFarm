<?php

namespace App;

use App\interfaces\AnimalInterface;


class Farm {

    private $animals;

    private $products;

    /**
     * Перебирает массив с объектами животных и возвращает массив с типом и кол-вом животных.
     * @return array
     */

    public function getAnimalTypeCount(){

        $animalsTypeAndQuantity = [];

        /** @var AnimalInterface $animal */
        foreach ($this->animals as $animal){
            // если массив пустой или не содержит в себе типа животного в виде ключа, то добавить такой ключ.
            if (empty($animalsTypeAndQuantity) || (!array_key_exists($animal->getAnimalType(), $animalsTypeAndQuantity))){
                $animalsTypeAndQuantity[$animal->getAnimalType()] = 0;
            }

            // если тип итерируемого животного в виде ключа уже существует, то просто посчитать его
            $animalsTypeAndQuantity[$animal->getAnimalType()] += 1;
        }

        return $animalsTypeAndQuantity;
    }


    public function collectProduct(): void
    {

        /** @var AnimalInterface $animal */
        foreach ($this->animals as $animal){

            // если массив пустой или не содержит в себе типа продукта в виде ключа, то добавить такой ключ.
            if (empty($this->products) || (!array_key_exists($animal->getProductType(), $this->products)))
            {

                $this->products[$animal->getProductType()] = 0;
            }

            // если тип итерируемого продукта в виде ключа уже существует, то просто посчитать его
            $this->products[$animal->getProductType()] += $animal->getProduct();

        }
    }

    public function getProducts()
    {
        return $this->products;
    }

    public function realeaseProducts(): array
    {
        return $this->products = [];
    }

    public function addAnimal(AnimalInterface $animal): void
    {
                $this->animals[] = $animal;
    }
}