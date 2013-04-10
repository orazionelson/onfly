<?php
include_once('wordlist.inc.php');
?>
<div style="float:left; margin-left:3px; margin-right: 40px;">
<h3>Used Tags</h3>
<a class="btn btn-primary" href="#" id="rig"><i class="icon-refresh icon-white"></i>Rebuild Taglist</a><br>
<?php
//var_dump($newtags);
foreach ($newtags as $key => $value) {
	echo "<p>".($key+1)."-".$value."</p>";
}
?>
</div>
<div id="regen" style="padding:20px;color:green">
</div>
<div style="clear:both"></div>
<script>
$(function(){
  $('#rig').click(function() {
   $('#regen').empty().load("wordlist2.php");
  });
});
</script>