
<?php

echo is_snt(1);
echo "<br>";
echo is_snt(2);
echo "<br>";
echo is_snt(6);
echo "<br>";
echo is_snt(19);


for ($i = 1; $i <100; $i++) {
    if ( is_snt($i)){
        echo ($i." ");
    }
}
function is_snt($n){
    $tam= 0;
    for ($i=1;$i<=$n;$i++){
        if($n%$i==0 ) $tam++;
     
        
    }

    if ($tam > 2) {
        return false;
    }else {
        return true;
    }
}



 ?>   

