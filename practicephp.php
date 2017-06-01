<?php

function add($x,$y){
    return($x+$y);
}
function subtract($a,$b){
    return($a-$b);
}
function multiply($c,$d){
    return($c*$d);
}
function divide($e,$f){
    return($e/$f);
}

//(3+(5*4))/10
//$multiply=multiply(5,4);
//$divide=divide($add,10);



echo "
<form method='get' action=''>
    <input name='num1' type='text'>
    <input name='num2' type='text'>
    <input type='submit'/>
    </form>
";

//only execute the code in here if this is true (if statement)
//isset is a function - same as addition function
if (isset($_REQUEST['num1']) && isset($_REQUEST['num2'])){
    $add=add($_REQUEST['num1'],$_REQUEST['num2']);
    echo "<h1>The result is ".$add." </h1>";
}

//practice: enter into the form a hexadecimal color
//and change the entire background to that color
 ?>
