<?php

namespace scr;

class AbstractAnimal implements Motion,FoodCreature,CreatureLiving
{
    public function crawl()
    {
        return "crawl"."<br>";
    }
    public function run()
    {
        return "run"."<br>";
    }
    public function swim()
    {
        return "swim"."<br>";
    }
    public function EatMeat()
    {
        return"EatMeat"."<br>";
    }
    public function EatGrass()
    {
        return"EatGrass"."<br>";
    }
    public function EatFruit()
    {
        return "EatFruit"."<br>";
    }
    public function Aquarium()
    {
        return "Aquarium"."<br>";
    }
    public function Terrarium()
    {
        return "Terrarium"."<br>";
    }
    public function Cell()
    {
        return "Cell"."<br>";
    }
}