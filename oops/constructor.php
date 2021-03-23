<?php
    class fruit {  //class
        public $name; //variable/properties
        public $color;

        function __construct($name, $color) {
        $this->name = $name;
        $this->color = $color;
        }
        function get_name() {
            return $this->name;
        }
        function get_color() {
            return $this->color;
        }

    }

    $apple = new fruit('Apple','Red');  //Creating object
    echo "Name = ".$apple -> get_name();
    echo "<br>";
    echo "Color = ".$apple -> get_color();