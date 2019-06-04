<?php

$kid = new Kid();


$kid->showSex();





class Kid{
    // 時速の値を保持するプロパティ
    public $name;
    public $sex;

    function __construct(){
        $this->name = 'Seed';
        $this->sex = 'boy';
    }

    public function showSex($seibetu){
        if($seibetu== 'boy'){
            echo $this->name;
        }elseif($seibetu== 'rady'){
            echo $this->name;
        }
    }

    public function setName($namae){
        $this->name=$namae
    }

    // public function getSpeed(){
    //     return $this->speed;
    // }

 

    // public function greeting(){
    //     $this->start();
    //     $this->run();
    //     $this->stop();
    


}

// $car = new Car();

// $car->setSpeed(60);

// $car->greeting();




