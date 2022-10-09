<?php

require_once __DIR__ . '/Car.php';

class Taxi extends Car
{
    private $passenger;

    public function pickUp($pickup)
    {
        $this->passenger += $pickup;
        return strval($pickup)."人乗車しました\n";
    }

    public function lower($lower)
    {
        if ($this->passenger - $lower > 0) {
            $this->passenger -= $lower;
            return strval($lower) ."人降車しました\n";
        } else {
            return strval($lower)."人は降車できません\n";
        }
    }
    public function information()
    {
        return "車の車種：" . $this->getName() . "\n" .
            "車体番号：" . $this->getNumber() . "\n" .
            "カラー：" . $this->getColor() . "\n" .
            "乗車人数:" . $this->passenger . "人\n";
    }
}
