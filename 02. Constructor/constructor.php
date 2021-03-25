<?php
    class fruit {  //class
        public $name; //variable/properties
        public $color;

        function __construct($name, $color) {
        $this->name = $name;
        $this->color = $color;
        }
        function get_details() {
            echo "Name = ".$this -> name;
            echo "<br>";
            echo "Color = ".$this -> color;
        }
        
    }

    $apple = new fruit('Apple','Red');  //Creating object
    $apple -> get_details();
    
?>