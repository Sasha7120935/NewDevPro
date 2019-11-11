<?php

namespace scr;

class AbstractZoo extends AbstractAnimal
{
    protected $zoo = null;
    public function getZoo()
    {
        return $this->zoo;
    }

    public function  setZoo(Essence $zoo)
    {
        if($this->zoo !== false)
        {
            echo "Zoo"."<br>";
            $this->zoo = $zoo;
        }
    }

}