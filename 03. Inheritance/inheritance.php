<?php
    class fruit {  //class
        public $name; //variable/properties
        public $color;

        public function __construct($name, $color) {
        $this->name = $name;
        $this->color = $color;
        }
        public function intro() {
            echo "The fruit {$this->name} and the color is{$this->color}";
        }
    }

    class mango extends fruit {
        public function message() {
            echo "I'm a fruit";
            echo "<br>";
        }
    }

    $mango = new mango('Mango','Yellow');  //Creating object
    $mango->message();
    $mango->intro();

?>