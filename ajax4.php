<?php
/**
 * On fly v1
 * Alfredo Cosco
 * 
 */ 
	include_once('config.php');
    include_once 'functions.php';
	
	$tags=taglist($db);
	//var_dump($tags);
	echo implode(', ', $tags);
?>