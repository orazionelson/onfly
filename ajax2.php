<? 
/**
 * On fly v1
 * Alfredo Cosco
 * 
 */ 
 
include_once('config.php');

$query = 'SELECT tag FROM tags;';

$results = $db->query($query);
while ($row = $results->fetchArray(SQLITE3_NUM)) {
    $tags[]=(trim($row[0]));
	//$values=implode(',',$row);
	//$tags[]=$values;
}

// Make request var preg safe
if (isset($_POST['value'])) 
{ 
    $value = trim($_POST['value']);
} 

/*if (isset($_GET['value'])) 
{ 
    $value = trim($_GET['value']);
}*/ 

// Ensure there is a value to search for
//if (!isset($value) || $value == '') exit;
//var_dump($tags);

sort($tags);
// Set up the send back array
$found = array();

// Search through each standard val and match it if possible
foreach ($tags as $tag){
	if (strpos($tag, $value) === 0){
		$found[]=$tag;
		if (count($found) >= 10) break;
	}
}

// JSON encode the array for return
echo json_encode($found);
?>