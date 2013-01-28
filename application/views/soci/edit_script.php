<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
<script>
$(document).ready( function() { 
	$('select#tipo').val('<?php echo $soci_item['tipo']?>'); 
	$('select#sesso').val('<?php echo $soci_item['sesso']?>');
});
</script>

