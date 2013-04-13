<?php
/**
 * On fly v1
 * Alfredo Cosco
 * 
 */ 

function taglist($db){
	$query = 'SELECT tag FROM tags;';
	$results = $db->query($query);
	while ($row = $results->fetchArray(SQLITE3_NUM)) {
    $tags[]=(trim($row[0]));
	}
	return $tags;
	}

function parseRef($value,$db)
{
	
	//switch from 'code' to 'reference' (see references table)
	$query="SELECT * FROM \"references\" WHERE \"code\" = '".$value."'";
	$results = $db->query($query);
	//var_dump($results);
	while ($row = $results->fetchArray(SQLITE3_ASSOC)) {
    $result=($row['reference']);
	}
	//autobuild link on the reference if it begins for http
	$result=preg_replace('#(https?://[^\s]+)#', '<a href="$1">$1</a>', $result);
	return $result;
}
?>