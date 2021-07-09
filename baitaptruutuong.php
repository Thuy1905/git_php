<?php
//Tạo đối tượng và thử nghiệm 
$pb = new PhoneBook();
$pb->insertPhone('Thông', '0964493237');
$pb->insertPhone('Thông', '111111');
$pb->insertPhone('Thông', '0964493237');

$pb->insertPhone('Thủy', '0333789561');
$pb->insertPhone('Long', '0935157321');
$pb->removePhone('Thủy');
$pb->updatePhone('Long', '0123456789');
//print_r($pb->searchPhone("Long"));
$pb->sort();
print_r($pb->phoneList);

abstract class Phone{
    abstract function insertPhone($name, $phone);
    abstract function removePhone($name);
    abstract function updatePhone($name, $phone);
    abstract function searchPhone($name);
    abstract function sort();
}
class PhoneBook extends Phone{
    var $phoneList = array();
    //phoneList là 1 mảng Key - value
    // key là name
    // value là 1 mảng 1 chiều chứa danh sách các số điện thoại của người đó.
    
    function insertPhone($name, $phone){
        if(array_key_exists($name,$this->phoneList)){
            if(in_array($phone, $this->phoneList[$name]) == false)
                $this->phoneList[$name][] = $phone; 
                //in_array($phone, $this->phoneList[$name]) == false
                // kiểm tra xem phone có tồn tại trong mảng hay không. 
        } else {
            $this->phoneList[$name] = [$phone];
            // [$phone, 342] => tạo mảng 1 phần tử
        }
    }
    function removePhone($name){
        unset($this->phoneList[$name]);
        // hàm dùng để xóa 1 phần tử theo key. 
    }
    function updatePhone($name, $phone){
        $this->phoneList[$name] = [$phone];
        // gắn mảng mới thay cho mảng cũ. 
    }
    function searchPhone($name){
        return $this->phoneList[$name];
        // thường tìm kiếm thì phải trả về kết quả
    }
    function sort(){
        ksort($this->phoneList);
        // sắp xếp mảng theo key
    }
}