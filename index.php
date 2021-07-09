
<?php
//$var_a = 2;
/*$var_b = 3;

$var_c = $var_b;
$var_b = $var_a;
$var_a = $var_c;


echo '$var_a:'.$var_a;
echo '<br>';
echo '$var_b:'.$var_b;

?>   
*/
/*
//tang bien a len mot don vi
$var_a = 200;
$var_b = 200;

$var_c = $var_a ++;
$var_d = $var_b ++;

echo '$var_a:'.$var_a;
echo '$var_b:'.$var_b;
echo '$var_c:'.$var_c;
echo '$var_d:'.$var_d;
?> 
*/
/*
$var_a=5;
$var_b=5;
echo $var_a++;echo '<br>';
echo ++$var_b;echo '<br>';
echo $var_a;echo '<br>';
echo $var_b;
?>
*/
/*

     $thu=5;

     if($thu==8){
          echo 'chunhat';
     }elseif($thu==2){
          echo 'thuhai';
     }elseif($thu==3){
          echo 'thuba';
     }elseif($thu==4){
          echo 'thutu';
     }elseif($thu==5){
          echo 'thunam';
     }elseif($thu==6){
          echo 'thusau';
     }elseif($thu==7){
          echo 'thubay';
     }else {
          echo 'khongtontai';
     }
?>
*/
/*
$thu=2;
switch ($thu){
    case 2:
        echo'thu hai';
        break;
    case 3:
        echo 'thu ba';
        break;
    case 4:
        echo'thu tu';
        break;
    case 5:
        echo'thu nam';
        break;
    case 6:
        echo 'thu sau';
        break;
    case 7:
        echo 'thu bay';
        break;
    case 8:
        echo 'chu nhat';
        break;
    default:
        echo 'khong ton tai';
        break;
}
?>
*/
/*
$ngay = 30;
switch ($ngay) {
    case $ngay >= 1 && $ngay <= 15:
        echo 'di hoc';
        break;
    case $ngay >= 15 && $ngay <= 25:
        echo 'di du lich';
        break;
    default:
        echo 'o nha ngu';
        break;
}
*/
/*
//in ra các số từ 100 đến 50//
for ($i=100; $i >=50 ; $i--) { 
    echo $i;
}


*/
//in ra các số chắn có ít hơn 3 chữ số,theo thứ tự tăng dần


function isPrimeNumber($n) {
    // so nguyen n < 2 khong phai la so nguyen to
    if ($n < 2) {
        return false;
    }
    // check so nguyen to khi n >= 2
    $squareRoot = sqrt ( $n );
    for($i = 2; $i <= $squareRoot; $i ++) {
        if ($n % $i == 0) {
            return false;
        }
    }
    return true;
}
 
echo ("Các số nguyên tố nhỏ hơn 100 là: <br>");
for($i = 0; $i < 100; $i ++) {
    if (isPrimeNumber ( $i )) {
        echo ($i . " ");
    }
}
?>