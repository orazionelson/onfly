<?php
/**
 * On fly v1
 * Alfredo Cosco
 * 
 */ 
include_once('config.php');

$query = 'SELECT tag1,tag2,tag3,tag4 FROM messages;';
$results = $db->query($query);
while ($row = $results->fetchArray(SQLITE3_NUM)) {
	$values=implode(',',$row);
	$tags[]=$values;
}
$mytags=implode(',', $tags);
$comas=array(",,,",",,");
$mytags = str_replace($comas, ",", $mytags);
$newtags=explode(",", $mytags);
$newtags = array_filter( $newtags, 'strlen' );
$newtags=array_values(array_unique($newtags));
sort($newtags);
?>