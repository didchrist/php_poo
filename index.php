<?php
class Dogo
{
    public function __construct(public string $name, public string $age, public string $race)
    {
    }
    public function showinfo()
    {
        echo  'Name : ' . $this->name . ' - Age : ' . $this->age . ' - Race : ' . $this->race . '<br>';
    }
}

$dogo1 = new Dogo('Pam', '15', 'Yorkshire');
$dogo2 = new Dogo('Mina', '5', 'Yorkshire');
$dogo3 = new Dogo('Hok', '12', 'Jack Russell');
$dogo1->showinfo();
$dogo2->showinfo();
$dogo3->showinfo();