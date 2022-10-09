<?php

class Car
{
    private $name;
    private $number;
    private $color;

    public function __construct($name, $number, $color)
    {
        $this->name = $name;
        $this->number = $number;
        $this->color = $color;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getNumber()
    {
        return $this->number;
    }

    public function getColor()
    {
        return $this->color;
    }


    public function setName()
    {
        return $this->name;
    }
    public function setNumber()
    {
        return $this->number;
    }

    public function setColor()
    {
        return $this->color;
    }

    public function information()
    {
        return "車の車種：" . $this->name . "\n" .
            "車体番号" . $this->number . "\n" .
            "カラー" . $this->color . "\n";
    }
}
