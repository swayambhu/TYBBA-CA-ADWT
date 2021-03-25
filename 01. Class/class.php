<?php
    class fruit {  //class
        public $name, $color; //variable/properties


        function set_name($name, $color) {  //method
            $this-> name = $name;
            $this-> color = $color;

        }

        function get_name(){  //method
            echo "Name = ".$this->name;
            echo "<br/>";
            echo "color = ".$this->color;
        }

        

    }

    $apple = new fruit();  //Creating object
    $apple -> set_name('Apple', 'Red');
    $apple -> get_name();

?>

