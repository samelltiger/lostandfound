<?php
function reshape($arr,$col=9){
	$len = count($arr);
	$values= [];
	$start = 0;
	for( ; $start<$len; $start+=$col){
		$temp = range($start,$start+$col-1);
		$v =  array_map(function($i) use ($arr){
			return isset($arr[$i])?$arr[$i]:null;
		}, $temp);
		array_push($values, $v);
	}
	return $values;
}