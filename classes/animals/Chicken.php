<?php

namespace App\animals;

//класс курицы

class Chicken extends Animal {

    // Обявляем тип животного
    public const ANIMALS_TYPE = 'Chicken';
    // обявляем тип производимого продукта
    public const PRODUCT_TYPE = 'Ages';

    //минималное количество яйц производимого курицей
    private const MIN_AGES_AMOUNT = 0;

    //максималное количество яйц производимого курицей
    private const MAX_AGES_AMOUNT = 1;

    //присваеваем тип животного
    public function getAnimalType(): string
    {
        return self::ANIMALS_TYPE;
    }

    //присваеваем тип продукта
    public function getProductType(): string
    {
        return self::PRODUCT_TYPE;
    }

    /**
     * Метод возврашает случайное количество литров коровя молока в заданном диапазоне MIN, MAX
     * @throws \Exception
     */
    public function getProduct(): int
    {
        return random_int(self::MIN_AGES_AMOUNT, self::MAX_AGES_AMOUNT);
    }


}