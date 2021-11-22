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
<form action = '' method ='post'>
Podaj imię: 
<input type="text" name='imie' placeholder="imię">
Podaj nazwisko: 
<input type="text" name='nazwisko'placeholder="nazwisko">
<br><br>
Najbardziej ulubione lody:
<br><input type="radio" id='b' name="a" value="smytana" checked>smytana
<br><input type="radio" id='d' name="a" value="czekokolada">czekokolada
<br><input type="radio" id='c' name="a" value="turkaweczka">turkaweczka
<br><input type="radio" id='e' name="a" value="oszech">oszech
<br><br>
Jakie znasz języki:
<br><input type="checkbox" name='jezyk'>Polski
<br><input type="checkbox" name='jezyk'>Hiszpański
<br><input type="checkbox" name='jezyk'>Angielski
<br><input type="checkbox" name='jezyk'>Niemicki
<br><input type="submit" value='wyślij'>
</form>
<div>
<?php
if (!empty($_POST['imie'])&& !empty($_POST['nazwisko'])){
    $imie = $_POST['imie'];
    $nazwisko = $_POST['nazwisko'];
    $lody = $_POST['a'];
    echo($imie.'<br>'.$nazwisko.'<br>'.$lody.'<br>');
    for($i=0;$i<4;$i++)
    {
        echo($_POST['jezyk'][i]);
    }
    }
else{
    }

?>
</div>
</body>
</html>