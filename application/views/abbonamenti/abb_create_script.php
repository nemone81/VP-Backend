<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
<script>
$(document).ready( function() { 
  $('#abbonamento').bind('change', function (e) { 
    if( $('#abbonamento').val() <= 3 ) {
      $('#corso').slideDown();
    }
    else{
      $('#corso').slideUp();
    }         
  });  
});
</script>