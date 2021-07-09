
<?php

//1. Danh sách các số nguyên tố <= n
//2. LẤY N CHIA CHO CÁC SỐ TRONG DS SỐ NGUYÊN TỐ Ở TRÊN
// CHO ĐẾN KHI N = 1 THÌ DỪNG
// 3. LÚC CHIA -> LẤY KẾT QUẢ VÀ LƯU LẠI VÀO DANH SÁCH KẾT QUẢ 
//4. IN RA DANH SÁCH KẾT QUẢ THEO YÊU CẦU

$n = 45;
$arr_snt = array(); // {2,3,5,7,11,13,17,19,23,29,31,37,41,43}
$arr_kq = array();  // {3,3,5}
for ($i=2; $i<=$n; $i++){
    if (is_snt($i) == true) {
       // echo $i."<br>";
        $arr_snt[]= $i;
       // var_dump($arr_snt);
    }

}
for ($i=0; $i< count($arr_snt);$i++){
    while ($n % $arr_snt[$i]==0){
        $n= $n/$arr_snt[$i];
        $arr_kq[]=$arr_snt[$i];
    }
  
    }
$kq= implode("x",$arr_kq);
echo $kq;


function is_snt($n){
    $tam= 0;
    for ($i=1;$i<=$n;$i++){
        if($n%$i==0 ) $tam++;
     
        
    }

    if ($tam == 2) {
        return true;
    }else {
        return false;
    }
}

 ?>   

