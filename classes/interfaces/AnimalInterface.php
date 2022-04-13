<?php

namespace classes\interfaces;

interface AnimalInterface {

    // метод получени id
    public function getId();

    //  метод получение типа животного
    public function getAnimalType();

    // метод получение типа продукта
    public function getProductType();

    // метод получение продукта
    public function getProduct();
}