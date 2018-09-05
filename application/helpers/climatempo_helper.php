<?php
function clima(){
	date_default_timezone_set('America/Sao_Paulo');
	if(date("H") > 5 && date("H") < 18) $a = "";
	else $a = "";
	$url  = file_get_contents('http://apiadvisor.climatempo.com.br/api/v1/weather/locale/3143/current?token=aa630a438223d13240944b6fc3e6f486');
	$obj = json_decode($url);
	echo "<table class='table text-center table-responsive text-white'>";
		echo "<tr><td class='border-0 pt-2 pl-0'>".$obj->name." - ".$obj->state
	."</td><td class='border-0  p-0'><img width='60px' src='".base_url()."content/imagens/realistic/".$obj->data->icon."".$a.".png'></td></tr>";
	echo "<tr><td class='border-0 p-0'>".$obj->data->condition."</td><td class='border-0  p-0'>".$obj->data->sensation."º C</td></tr>";
	echo "</table>";
}
?>