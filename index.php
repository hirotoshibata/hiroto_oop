<?php

    $kid = new Kid();

    $kid->setSex('rady');

    $kid->setName('理香子');

    $kid->setAge(8);

    $kid->showName();


    class Kid{
        public $name;
        public $sex;
        public $age;

        function __construct(){
            $this->name = 'Seed';
            $this->sex = 'boy';
            $this->age = 10;
        }

        public function setSex($seibetu){
            $this->sex=$seibetu;
        }

        public function getSex(){
            return $this->sex;
        }
    // ここまでは性別と初期値の設定なのであっている。


    // 男性の時と女性の時で条件分岐をさせたい。
        public function setName($namae){
            $this->name=$namae;
        }

        public function getName(){
            return $this->name;
        }

        public function setAge($nennrei){
            $this->age=$nennrei;
        }

        public function getAge(){
            return $this->age;
        }
    // ここまでで、セットなどの条件を全て書き出している。
        public function showName(){
            if ($this->age>=12) {
                if($this->sex== 'boy'){
                        echo "$this->name".'君';
                    }elseif($this->sex== 'rady'){
                        echo "$this->name".'さん';
                }
            }elseif($this->age<=12){
                if($this->sex== 'boy'){
                        echo "$this->name".'くん';
                    }elseif($this->sex== 'rady'){
                        echo "$this->name".'ちゃん';
                }
        }

    }

}