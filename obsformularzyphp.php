<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>kasa biletowa</h1>
<form action = '' method =  'post'>
Liczba biletów normalnych (22 zł/szt):
<br><input type='number' name = 'dorosly'>
<br>Liczba biletów ulgowych (16 zł/szt):
<br><input type='number' name = 'ulg'>
<p><input type= 'submit' value= 'Oblicz'></p>
</form>
<div>
<?php
if (!empty($_POST['dorosly'])|| !empty($_POST['ulg'])){
    $d=$_POST['dorosly'];
    $u=$_POST['ulg'];
    $suma= $d*22+$u*16;
    echo('liczba biletów normalnych '.$d.'<br>');
    echo('liczba biletów ulgowych '.$u.'<br>');
    echo('do zapłaty '.$suma);}
else{
    echo('nie podałeś wszystkich danych');
    }

?>
</div>
</body>
</html>
<?php

?>