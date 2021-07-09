<?php
/*$arr1 = array(2,8,5,1);
$arr11 = array(3,5,7,9);
$arr2 = array(
    2 => 2,
    8 => 1,
    5 => 1

);
// 1. array_combine()	Tạo một mảng bởi sử dụng một mảng cho key và mảng khác cho value
//$arr_test1 = array_combine($arr1, $arr11);
//var_dump($arr_test1);//
//array(4) { [2]=> int(3) [8]=> int(5) [5]=> int(7) [1]=> int(9) }

//2.2. array_count_values()	Trả về một mảng với số lần xuất hiện mỗi value
//$a= array(2,2,2,6);
//$ab= array ( 2,"hi",1,"hi",2);
//var_dump(array_count_values($ab));
//array(3) { [2]=> int(2) ["hi"]=> int(2) [1]=> int(1) }

//3. array_diff()	So sánh các value của mảng, và trả về các sự khác nhau
*/

/*
$a1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
$a2=array("e"=>"red","f"=>"green","g"=>"blue");

$result=array_diff($a1,$a2);
print_r($result);

*/
//4. array_key_exists()	Kiểm tra xem key đã cho có tồn tại trong mảng không

 /*  $i= array('cute'=> 2,'kawaii'=> 3);
   if (array_key_exists('cute',$i)){
	   echo "Phan tu 'cute' la co trong mang";
   }
*/

//5. array_keys()	Trả về tất cả key của một mảng

/*
$a=array("a"=>"Horse","b"=>"Cat","c"=>"Dog");
print_r(array_keys($a));
*/

//6. array_merge()	Sáp nhập một hoặc nhiều mảng thành một mảng
/*
$array1 = array(
    "php" => "laravel",
    "css", "html"
);
$array2 = array(
    "python",
    "php" => "zend",
    "js" => "nodeJs"
);
$result = array_merge($array1, $array2);
echo "<pre>";
    print_r($result);
echo "</pre>";
*/
/*
$a=8;

    
while ($a>0){
    $str=3588;
    
    $arr = array (); 
    for ($i=0;$i < strlen ($str)-1; $i++);
    $arr = array ($i);
    
    $arr_count = array_count_values($arr);
    //var_dump($arr_count);
    
    $max= $arr_count;
    $min= $arr_count;
    if($arr_count= 4) {
        echo 'Four Card'."<br>";
    }elseif ($arr_count = 3) {
        echo 'Three Card'."<br>";
    }elseif ( max($arr_count)==2 && min($arr_count)==2){
        echo 'Two Pair'."<br>";
    }elseif ( max($arr_count)==2 && min($arr_count)==1){
        echo 'One Pair'."<br>";
    }else {
        echo 'No Pair';
    }
   $a--;
}  
//7 dùng để xóa một phần từ trong một mảng : 
$a = array(0 => 2,  1 => 4, 2 => 6, 3 => 3, 4 => 8);
unset($a[2]);

*/

$str = 'abcde';
$str = addcslashes($str, a..zA..Z);
echo "<br>";
echo $str;
$str = ltrim($str,'\\');
echo "<br>".$str;
echo "<br>";
$arr = explode ('\\',$str);
var_dump($arr);

?>