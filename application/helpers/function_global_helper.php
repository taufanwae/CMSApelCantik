<?php if (!defined('BASEPATH')) exit('No direct script access allowed');



if( ! function_exists('secure_input')){
	function secure_input($data){
		
		$cr = '/\%0d/';
		$lf = '/\%0a/';




		$filter_sql = stripslashes(strip_tags(htmlspecialchars(trim($data),ENT_QUOTES)));

		$cr_check = preg_match($cr , $filter_sql);
		$lf_check = preg_match($lf , $filter_sql);

		if ($cr_check > 0 || $lf_check > 0){
		    $filter_sql = preg_replace("/[^\\S ]/", '', $input);
		}


		return $filter_sql;
	}
}	


