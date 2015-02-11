<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

class MathQuestion{
 
	public function numOne(){
		$num1 = rand() % 10;
		return $num1;
	}
 
	public function numTwo(){
		$num2 = rand() % 10;
		return $num2;
	}
}