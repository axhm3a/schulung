<?php
class ca {
	public function asd(){
		array_intersect($array1, $array2);
		array_intersect_assoc($array1, $array2);
		array_intersect_key($array1, $array2);
	    array_intersect_uassoc($array1, $array2, $key_compare_func);
		array_intersect_ukey($array1, $array2, $key_compare_func);
		array_uintersect($array1, $array2, $data_compare_func);
		array_uintersect_assoc($array1, $array2, $data_compare_func);
		array_uintersect_uassoc($array1, $array2, $data_compare_func, $key_compare_func);

		array_diff($array1, $array2);
		array_diff_assoc($array1, $array2);
		array_diff_key($array1, $array2);
		array_diff_uassoc($array1, $array2, $key_compare_func);
		array_diff_ukey($array1, $array2, $key_compare_func);
		array_udiff($array1, $array2, $data_compare_func);
		array_udiff_assoc($array1, $array2, $data_compare_func);
		array_udiff_uassoc($array1, $array2, $data_compare_func, $key_compare_func);

		array_map($callback, $array1, $array2);
		array_filter($array1);
		array_filter($array1, $callback);

		array_multisort($array);
		sort($array);
		asort($array);
		arsort($array);
		ksort($array);
		krsort($array);
		natsort($array);
		natcasesort($array);
		usort($array, $cmp_function);
		uasort($array, $cmp_function);
		uksort($array, $cmp_function);

		array_chunk($input, $size);

		array_pad($input, $pad_size, $pad_value);
		array_pop($array);
		array_shift($array);
		array_push($array, $var);
		array_unshift($array, $var);
		array_rand($input);
		array_reduce($input, $function);

		array_slice($array, $offset);
		array_splice($input, $offset);

		compact($varname);
		extract($var_array);
		$drink = null;
		$info = array('coffee', 'brown', 'caffeine');
		list($drink, $color, $power) = $info;
		echo "$drink is $color and $power makes it special.\n";
	}
}