<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

class ValidNumber{

	function validNum($value){

		$value = trim($value);
		if ($value == ''){
			return TRUE;
		}

		else{
			if (preg_match('/^\(?[0-9]{3}\)?[-. ]?[0-9]{3}[-. ]?[0-9]{4}$/', $value)){
				return preg_replace('/^\(?([0-9]{3})\)?[-. ]?([0-9]{3})[-. ]?([0-9]{4})$/', '($1) $2-$3', $value);
			}
			else{
				return FALSE;
			}
		}

		//$justNumbers = preg_replace( '/\D/', $_POST[ 'phone_num' ] );
		//$numRequired = 7; // make your constraints here
		//if( strlen( $justNumbers ) < $numRequired ){ /* ... naughty naughty ... */ }
	}
}