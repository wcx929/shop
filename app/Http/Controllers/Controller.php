<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;


    /**
	 * 反转数组
	 * @param  array $arr 
	 * @return array
	 */
	function reverse($arr)
	{
		$arr=['a','b','c'];
	    $n = count($arr);

	    $left = 0;
	    $right = $n - 1; //2

	    while ($left < $right) {
	        $temp = $arr[$left];
	        $arr[$left++] = $arr[$right];
	        $arr[$right--] = $temp;
	    }

	    return $arr;
	}
}
