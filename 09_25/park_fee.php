﻿<?
	$age = $_POST["age"];
	$welfare= $_POST["AA"];	//yes: 복지카드 소지  no: 복지카드 무소지
	$youkong = $_POST["BA"];	// 국가유공자증 소지자 여부
	$after_1710= $_POST["CA"];

	if($age < 3)
		$fee = "무료";
	elseif(($age>=3 && $age<=13) || ($after_1710=="yes"))
		$fee = "4,000원";
	elseif(($age>=14 && $age<=18) || ($age>=70) || ($youkong=="yes"))
		$fee ="8,000원";
	else
		$fee="10,000원";

	echo "복지카드 소지: $welfare<br>";
	echo "국가유공자증 소지: $youkong<br>";
	echo "17시 10분 이후 입장 : $after_1710<br>";
	echo "나이: $age 세<br>";
	echo "입장료 : $fee<br>";

?>