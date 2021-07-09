
<?php
/*
for ($i=100; $i >=50 ; $i--) { 
    echo $i;
}
?>

/*
in ra các số chắn có ít hơn 3 chữ số,theo thứ tự tăng dần
*/

/*
for ($i = 1; $i < 100; $i++) {
    echo '<br>';
    if ($i % 2 == 0) {
        echo $i;
    }
}

?>
*/
//in ra cac so <100 va chia het cho 7//
/*
for ($i = 1; $i < 100; $i++) {
    if ($i % 7 == 0) {
    echo $i.'<br>';
    }
}
?>


for ($i = 0; $i < 100; $i=$i+7) {
    echo $i.'<br>';
}


//in ra so 10...//
$tam=1;
for ($i=1; $i<=13; $i++){
    $tam*=10;
    echo $tam."<br>";
}
*/

/*
$thanhpho = array ('tokyo','london','newyork')
for ( $i  = 0;$i<=2;$i++){
    echo $thanhpho[$i];
}
   
*/
/*
function my_print ($sl){
    for ($i=1;$i<=$sl;$i++){
        echo"-";
    }
}
my_print(3);
echo "<br>";
my_print(5);
*/
/*
function printdthcn ($dai,$rong){
    echo $dai *$rong;
}
printdthcn (4,5);
*/
/*
    for ($i = 1; $i <= 4; $i++) {
        echo '<br>';
        for ($j = 1; $j <= 9; $j++) {
            echo '*';
        }
    }
*/
/*
$n = 6;
//-------CHƯƠNG TRÌNH CHÍNH
for($i = 0; $i < 10; $i++){    
    in_tam_giac($i);
}

//------- PHẦN KHAI BÁO HÀM
// in 1 tam giác có cạnh $n
function in_tam_giac($n){
    for($i = 0; $i < $n; $i++){
        //echo $i;
        // print 1 dòng $i dấu sao.
        print_i_sao($n-$i);
        // in xuống dòng
        echo "<br>";
    }
}

// print 1 dòng dấu sao.
function print_i_sao($so_sao){
    for($i = 0; $i < $so_sao; $i++)
        print "*";
}
*/
/*
echo giai_phuong_trinh_bac_1(3, 4);
echo "<br>";
echo giai_phuong_trinh_bac_1(0, 4);
echo "<br>";
echo giai_phuong_trinh_bac_1(0, 0);
echo "<br>";

function giai_phuong_trinh_bac_1($a, $b)
{

    if ($a == 0 and $b == 0) return -1;
    if ($a == 0 and $b != 0) return 0;
     return 1;
    
}
*/
//in ra bang cuu chuong .

echo giai_thua(0);
echo "<br>";
echo giai_thua(1);
echo "<br>";
echo giai_thua(5);
echo "<br>";
//su dung bien tam cong hoac nhan vao
function giai_thua($n)
{   $tich=1;
    for ($i=1;$i<=$n;$i++)
        $tich = $tich *$i;
   
    return $tich;
}
