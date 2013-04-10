<?php
//include_once('config.php');

function rebuild_taglist($db){
	$query = 'SELECT tag1,tag2,tag3,tag4 FROM messages;';
	$results = $db->query($query);
	while ($row = $results->fetchArray(SQLITE3_NUM)) {
    //var_dump($row);
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
	
	$query2="DELETE FROM tags";
	//$db->query($query2);
	
	foreach($newtags as $k=>$v){
	$query3="INSERT INTO 'tags' ('tagid', 'tag') VALUES ('".($k+1)."', '".$v."');";
	//$db->query($query3);
	}
}

?>