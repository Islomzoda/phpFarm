<?php
namespace App\animals;

use App\interfaces\AnimalInterface;

//родителский класс животных
abstract class Animal implements AnimalInterface {

    // идентификационный номер животного
    protected $id;

    // метод присваевает уникалный id животному

public function __construct($id)
{

        $this->id == $id;
}

 // метод возврашает id

    public function getId(): int
    {
     return $this->id;
    }
}
