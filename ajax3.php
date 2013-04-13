<?
/**
 * On fly v1
 * Alfredo Cosco
 * 
 */ 
include_once('config.php');
include_once 'functions.php';

if (isset($_POST['tag'])) {

$tag=$_POST['tag'];
?>
<div class="results" id="result" data-role="collapsible-set" data-theme="e" data-content-theme="e">
<?php
//at least 4 possible tags to identify a suggestion
//they build the rank, so be careful in taxonomy
foreach (range(1, 4) as $number) {
	$query="SELECT * FROM messages WHERE tag".$number." = '".$tag."'";
	$results = $db->query($query);
	while ($row = $results->fetchArray(SQLITE3_ASSOC)) {
	echo "<div data-role=\"collapsible\">";
	echo "<h3>".$row['title']." (<i>".$row['tag1']." - ".$row['tag2']." - ".$row['tag3']." - ".$row['tag4']."</i>)</h3>";
	echo "<div class=\"message\"><p>".$row['message']."</p></div>";
	echo "<div class=\"references\">";
	//at least 3 possible references, so the range is from 1 to 3
	foreach (range(1, 3) as $number) {
    $rowname='reference'.$number;
			if($row[$rowname]) {
			echo parseRef($row[$rowname],$db)."<br>";	
			}
		}
	echo "</div>";
	echo "</div>";
	}
}


?>
</div>
<?php

}
else
{
echo "An ERROR HAS OCCURED ...";	
}

?>