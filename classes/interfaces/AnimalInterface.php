<?php

namespace App\interfaces;

interface AnimalInterface {

    // метод получени id
    public function getId(): int;

    //  метод получение типа животного
    public function getAnimalType(): string;

    // метод получение типа продукта
    public function getProductType(): string;

    // метод получение продукта
    public function getProduct(): int;
}