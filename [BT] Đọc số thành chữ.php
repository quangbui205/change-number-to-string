<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Đọc số thành chữ</title>
</head>
<body>
<form method="post">
    <input type="number" name="numberCheck" placeholder="Nhập vào 1 số bất kỳ">
    <input type="submit" value="Change">
</form>
<?php
if($_SERVER['REQUEST_METHOD'] == 'POST')
{
    $numberIn=$_POST['numberCheck'];
    $numHun = floor($numberIn /100);
    $numDozen = floor(($numberIn-$numHun*100) /10);
    $numUnit = ($numberIn - $numHun*100 - $numDozen*10);
    $numText = ' ';
    if($numberIn<1000)
    {
        if($numHun!=0){
            checkNum($numHun,$numText);
            echo " hundred";
        }
        if(($numDozen!=0) && ($numDozen!=1))
        {
            checkNumDozen($numDozen,$numText);
            echo "ty";
        }
        if(($numDozen == 1)&&($numUnit!=1) &&($numUnit!=2)&&($numUnit!=0))
        {
            checkNumDozen($numUnit,$numText);
            echo "teen";
        }
        if(($numDozen==1)&&($numUnit==0))
        {
            echo " ten";
        }
        if(($numDozen==1)&&($numUnit==1))
        {
            echo " eleven";
        }
        if(($numDozen==1)&&($numUnit==2))
        {
            echo " twelve";
        }
        if(($numUnit!=0)&&($numDozen!=1))
        {
            checkNum($numUnit,$numText);
        }
    }
    if($numberIn>=1000) echo "out of ability";
}
function checkNum($num,$text)
{
switch ($num) {
    case 1:
        echo $text . "one";
        break;
    case 2:
        echo $text . "two";
        break;
    case 3:
        echo $text . "three";
        break;
    case 4:
        echo $text . "four";
        break;
    case 5:
        echo $text . "five";
        break;
    case 6:
        echo $text . "six";
        break;
    case 7:
        echo $text . "seven";
        break;
    case 8:
        echo $text . "eight";
        break;
    case 9:
        echo $text . "nine";
        break;
}
}
function checkNumDozen($num,$text)
{
    switch ($num) {
        case 2:
            echo $text . "twen";
            break;
        case 3:
            echo $text . "thir";
            break;
        case 4:
            echo $text . "four";
            break;
        case 5:
            echo $text . "fif";
            break;
        case 6:
            echo $text . "six";
            break;
        case 7:
            echo $text . "seven";
            break;
        case 8:
            echo $text . "eight";
            break;
        case 9:
            echo $text . "nine";
            break;
    }
}
?>
</body>
</html>
