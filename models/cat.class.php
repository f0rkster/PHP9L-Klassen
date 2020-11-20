<?php

namespace fhe\models;

class Cat extends \fhe\core\LivingBeing
{
    public function speak()
    {
        echo "I'm a $this->gender cat.";
    }
}