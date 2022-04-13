<?php

namespace classes\animals;

// класс коровы

class Cow extends Animal {
    //  тип животного
    public const ANIMALS_TYPE = 'Cow';

    //  тип производимого продукта
    public const PRODUCT_TYPE = 'Milk';

    // минималная количество производимого коровя молока
    private const MIN_MILK_LITERS = 8;

    // максималное количество производимого коровя молока
    private const MAX_MILK_LITERS = 12;

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
     *  Метод возврашает случайное количество литров коровя молока в заданном диапазоне MIN, MAX
     * @throws \Exception
     */
    public function getProduct()
    {
        return random_int(self::MIN_MILK_LITERS, self::MAX_MILK_LITERS);
    }
}