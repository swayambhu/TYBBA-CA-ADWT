<?php
    class fruit {  //class
        public $name; //variable/properties
        public $color;

        function set_name($name) {  //method
            $this-> name = $name;
        }

        function get_name(){  //method
            return $this->name;
        }

        function set_color($color) {  //method
            $this-> color = $color;
        }

        function get_color(){  //method
            return $this->color;
        }

    }

    $apple = new fruit();  //Creating object
    $apple -> set_name('Apple');
    echo "Name = ".$apple -> get_name();
    echo "<br>";

    $red = new fruit();
    $red -> set_color('Red');
    echo "Color = ".$red -> get_color();


    // $mango = new fruit();  //Creating object
    // $mango -> set_name('Mango');
    // echo "Name = ".$mango -> get_name();
?>