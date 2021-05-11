<?php
    abstract class car{
        public $name;
        public function __construct($name) {
            $this -> name = $name;
        }
        abstract public function intro():string;
    }
    class Audi extends Car{
        public function intro():string{
            return "Choose german quality I'm $this->name";
        }
    }
    $audi = new Audi('Audi');
    echo $audi -> intro();
?>