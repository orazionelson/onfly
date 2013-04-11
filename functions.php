<?php
//include_once('config.php');

function taglist($db){
	//$path = 'db/db.sqlite';
	//$db = new SQLite3($path);
	$query = 'SELECT tag FROM tags;';
	$results = $db->query($query);
	while ($row = $results->fetchArray(SQLITE3_NUM)) {
    $tags[]=(trim($row[0]));
	}
	return $tags;
	}

?>