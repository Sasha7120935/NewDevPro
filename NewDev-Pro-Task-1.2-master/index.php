<?php
class tickets
{
    public $Lucky;
    public function __construct($Lucky)
    {
        $this -> Lucky = $Lucky;
    }

}
$tickets = new Tickets("123456");
$input = 123456;
echo strtr($input,"123456","060456");   //1.2 Lucky Tickets
