<?php
	$data = file_get_contents('dataFlight.json');
	$penerbangan = json_decode($data, true);
	echo "<pre>";
	print_r($penerbangan);
	echo "</pre>";
?>