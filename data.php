<?php
	$data = file_get_contents('dataFlight.json');
	$penerbangan = json_decode($data, true);
	print_r($penerbangan);
?>