<?php

function getTestData(){
	$data = array();
	for ($i=0; $i < 10; $i++) { 
		$data[$i]['name'] = 'user-'.$i;
		$data[$i]['age'] = rand(18,90);
	}

	return $data;
}
function getAge($year){
	$now=date('Y');
	if ($year>$now) {
		return '数据错误';
	}
	return $now-$year;
}