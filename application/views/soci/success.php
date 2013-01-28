<div id="sample_1_wrapper" class="dataTables_wrapper form-inline" role="grid">

	<?php // print_r( $soci); // stampa l'intero array ?>
	<?php // print_r($soci[3]); // stampa il 4 item di un array?>
	<?php $soci_item=end($soci);?>	
	
	<div class="alert alert-success">
		<button class="close" data-dismiss="alert">×</button>
		<strong>Nuovo socio inserito</strong>.
	</div>

	<div class="widget">
		<div class="widget-title">
			<h4><i class="icon-sign-blank"> </i><?php echo $soci_item['nome'].' '.$soci_item['cognome']; ?></h4>
			<span class="tools">
			<a href="javascript:;" class="icon-chevron-down"></a>
			<a href="#widget-config" data-toggle="modal" class="icon-wrench"></a>
			<a href="javascript:;" class="icon-refresh"></a>		
			<a href="javascript:;" class="icon-remove"></a>
			</span>							
		</div>
		<div class="widget-body">
			<?php include 'soci_details_snippet.php'; ?>
			<div style="clear:both">
			<hr>
            <button class="btn" onclick="location.href='<?php echo base_url('index.php/soci/edit/'.$soci_item['slug']) ?>'"><i class="icon-pencil icon-white"></i> Modifica i dati inseriti</button><span style="color:grey">
            <button class="btn btn-info" onclick="location.href='<?php echo base_url('index.php/soci/create'); ?>'"><i class="icon-plus icon-white"></i> Inserici un nuovo socio</button><br><br><p style="color:grey"> creazione scheda: <?php echo $soci_item['data_creazione']?></p>
            </div>	
        </div>
   </div>	
</div>	
				
				
									
									
									
									
									
									