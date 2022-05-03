<?php

abstract class Machine
{
    protected function startFunction()
    {
        echo $this->start;
    }
}

class Bulldozer extends Machine 
{
    protected $start = 'Go!';
    
    public function scoop()
    {
        $this->startFunction();
    }
}

class Car extends Machine
{
    protected $start = 'Go!';
  
    public function nitrox()
    {
        $this->startFunction();
    }
}
interface OwnFunction
{
    public function scoop(int $deep);
    public function nitrox(int $volume);
}
?>