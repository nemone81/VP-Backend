<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
<script>
$(document).ready( function() { 
	$('select#abbonamento').val('<?php echo substr($abbonamenti_item['codice_abbonamento'], 1, 1) ?>'); 
	$('select#tipologia').val('<?php echo substr($abbonamenti_item['codice_abbonamento'], 2, 1) ?>'); 
	$('select#data_scadenza_mese').val('<?php echo substr($abbonamenti_item['scadenza'], 5, 5) ?>'); 
	
    if( $('#abbonamento').val() == 'M' || $('#abbonamento').val() == 'T' || $('#abbonamento').val() == 'A' ) 		{
      $('#corso').show();
    } else {
      $('#corso').hide();
    }    

	$('#abbonamento').bind('change', function (e) { 
    if( $('#abbonamento').val() == 'M' || $('#abbonamento').val() == 'T' || $('#abbonamento').val() == 'A' ) 		{
      $('#corso').slideDown();
    } else {
      $('#corso').slideUp();
    }         
  });  
});
</script>