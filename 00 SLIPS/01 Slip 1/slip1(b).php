<?php
    class emp{
        var $code;
        var $name;
        var $desig;
        function emp($c, $n, $d){
            $this -> code = $c;
            $this -> name = $n;
            $this -> desig = $d;

        }
        function show1(){
            echo "<br/> Name : $this -> $name";
            echo "<br/> code : $this -> $code";
            echo "<br/> designation : $this -> $desig";
        }

        function no($code){
            return $this -> code;
        }

        
    }
?>