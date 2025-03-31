<?php

$num1 = 15;
$num2 = 5;
$num3 = 10;

if ($num1 > $num2 && $num2 > $num3){

    echo ("$num1<br/> $num2<br/> $num3");

}elseif ($num1 < $num3 && $num3 > $num2){

    echo ("$num1<br/>, $num3<br/> $num2");

}elseif ($num2 < $num1 && $num1 > $num3){

    echo ("$num2<br/> $num1<br/> $num3");

}elseif ($num2 < $num3 && $num3 > $num1){

    echo ("$num2<br/> $num3<br/> $num1");

}elseif ($num3 < $num1 && $num1 > $num2){

    echo ("$num3<br/> $num1<br/> $num2");

}else {

    echo ("$num3<br/> $num2<br/> $num1");
}

?>
