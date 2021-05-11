 <?php 
    function add($no=0,$no2=1) {
        $sum=$no+$no2;
        echo "$sum<br>"; 
    }
    function subtract($no=1,$no2=2) { 
        $sub=$no-$no2;
        echo "$sub<br>";
    } 
    function product($no=1,$no2=2) { 
        $sub=$no*$no2;
        echo "$sub<br>";
    } 
    function division($no=1,$no2=2) { 
        $sub=$no/$no2;
        echo "$sub<br>";
    } 
    $n=$_POST['no']; 
    $n2=$_POST['no2'];
    $c=$_POST['calc'];
    if($c=="add") { 
        add($n,$n2); 
        echo"<br>"; 
        echo "Call with default value";
        add(); 
    }   
    if($c=="subtract") { 
        subtract($n,$n2); echo"<br>";
        echo "Call with default value";
        subtract();
    }
    if($c=="mult") { 
        product($n,$n2); echo"<br>";
        echo "Call with default value";
        product();
    }
    if($c=="div") { 
        division($n,$n2); echo"<br>";
        echo "Call with default value";
        division();
    }
?> 
