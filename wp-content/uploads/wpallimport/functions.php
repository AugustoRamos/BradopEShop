<?php

	function console_log( $data ){
	  echo '<script>';
	  echo 'console.log('. json_encode( $data ) .')';
	  echo '</script>';
	}

	function SumImpactVal($val1 = null, $val2 = null){
		if($val1 != null && $val2 != null)
			return $val1 + $val2;
		else if($val2 != null)
			return $val2;
		else
			return $val1;			
	}


	function GetLatka($param_name, $param_value){
		if(trim($param_name) == 'Látka')
			return $param_value;
		else 
			return null;
	}

	function GetLatky2017($param_name, $param_value){
		if(trim($param_name) == 'Látky 2017')
			return $param_value;
		else 
			return null;
	}

	function GetProvedeni($param_name, $param_value){
		if(trim($param_name) == 'Provedení')
			return $param_value;
		else 
			return null;
	}

	function ProductType($param = null){
		if($param != null)
			return 'variable';
		else
			return 'simple';
	}

?>