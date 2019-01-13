<?php
/*
 * Сделайте класс Driver (Водитель), который будет наследоваться от класса Worker из предыдущей задачи.
 * Этот метод должен вносить следующие private поля: водительский стаж, категория вождения (A, B, C).
 */

class Driver extends Worker
{
    private $exper;
    private $category;

    public function __construct($exper, $category)
    {
        $this ->exper = $exper;
        $this -> category = $category;
    }

    /**
     * @return mixed
     */
    public function getExper()
    {
        return $this->exper;
    }

    /**
     * @param mixed $exper
     */
    public function setExper($exper): void
    {
        $this->exper = $exper;
    }

    /**
     * @return mixed
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * @param mixed $category
     */
    public function setCategory($category): void
    {
        $this->category = $category;
    }



}