<?php
class SINHVIEN{
	var $Ma_SV;
	var $TenSinhvien;
	var $Gioitinh;
	const Ngaysinh = '6-21-2021';
	const Tuoi = 20;
	const Muchocphi = 1000000;

	function dangkihocphan(){
		echo " lop K4 "	;}
}

	$sinhvien1 = new SINHVIEN();
	$sinhvien1 -> Ma_SV = 'sv001';
	$sinhvien1 -> TenSinhvien = 'Thong';
	$sinhvien1 -> Gioitinh = 'Nam';

	$sinhvien2 = new SINHVIEN();
	$sinhvien2 -> Ma_SV = 'sv002';
	$sinhvien2 -> TenSinhvien = 'Long';
	$sinhvien2 -> Gioitinh = 'Nam';

	$sinhvien3 = new SINHVIEN();
	$sinhvien3 -> Ma_SV = 'sv003';
	$sinhvien3 -> TenSinhvien ='Thuy';
	$sinhvien3 -> Gioitinh ='Nu';

echo $sinhvien1 -> Ma_SV;
echo "<br>";
echo $sinhvien1 -> TenSinhvien;
echo "<br>";
echo $sinhvien1->Gioitinh;
echo "<br>";
echo SINHVIEN:: Ngaysinh; 
echo "<br>";
echo SINHVIEN :: Tuoi;
echo "<br>";
echo SINHVIEN :: Muchocphi;




