<?php
$a=@$_POST['a'];
$poczx=@$_POST['poczx'];
$konx=@$_POST['konx'];
$b=@$_POST['b'];

do{
    echo $a*$poczx+$b." ";
    

$poczx++;
}while($poczx<=$konx)



?>