<?php
/**
 * On fly v1
 * Alfredo Cosco
 * 
 */ 
include_once('wordlist.inc.php');

$query2="DELETE FROM tags";
$db->query($query2);

foreach($newtags as $k=>$v){
	$query3="INSERT INTO 'tags' ('tagid', 'tag') VALUES ('".($k+1)."', '".$v."');";
		$db->query($query3);
}
echo "<h4 id=\"rigmes\">Taglist rebuilt with ".count($newtags)." values</h4>";

?>
<script>
$(function(){
  $('#rigmes').hide().fadeIn(2000);
});
</script>
