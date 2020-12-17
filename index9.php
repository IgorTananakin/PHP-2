<?php

// trait Trait1 {
//     function m1(){
//         echo "Trait 1";
//     }
// }
// trait Trait2 {
//     function m2(){
//         echo "Trait 2";
//     }
// }



// class MyClass {
//     use Trait1;
//     use Trait2;
// }
// $n = new MyClass();

// $n->m1();
// $n->m2();

function array_unique_key($array, $key) { 
	$array_sum = $tmp = $key_array = array(); 
	$i = 0; 
 $sum=0;
 // print_r($array['id'][1]);
	foreach($array as $val) { 
		if (!in_array($val[$key], $key_array)) { 
			// var_dump($val[$key]+1);
			// var_dump(array_filter($val));
			// if($val[$key]==$val[$key]+1)
			$key_array[$i] = $val[$key]; 
			$tmp[$i] = $val; 
// var_dump($val);
			// $array_sum[i]=$sum++;
		} 
		$i++; 
	} 
	return $tmp; 
}



$test = array( 
	array(
		'id' => 1,
		'name' => 'Диски Sparco',
		'price' => 5000,
	),
	array(
		'id' => 1,
		'name' => 'Диски Sparco',
		'price' => 6000,
	), 	
	array(
		'id' => 2,
		'name' => 'Автокресло',
		'price' => 3000,
	), 
	array(
		'id' => 2,
		'name' => 'Автокреслоcxcx',
		'price' => 99999,
	), 
 
);



// print_r($test);
// var_dump(array_filter($test));
	// var_dump($test['id'][]);
	$test = array_unique_key($test, 'id'); 
print_r($test);