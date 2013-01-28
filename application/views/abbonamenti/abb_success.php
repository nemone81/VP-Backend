<div id="sample_1_wrapper" class="dataTables_wrapper form-inline" role="grid">

	<?php $abbonamenti_item=end($abbonamenti);
	//	 $var = $abbonamenti_item['id_socio'];
	//	 echo $var;
		 //$soci_item=$soci[];?>	
	<div class="alert alert-success">
		<button class="close" data-dismiss="alert">×</button>
		<strong>Nuovo abbonamentio inserito</strong>.
	</div>

	<div class="widget">
		<div class="widget-title">
			<h4><i class="icon-sign-blank"> </i><?php // echo $abbonamenti_item['nome'].' '.$abbonamenti_item['cognome']; ?></h4>
			<span class="tools">
			<a href="javascript:;" class="icon-chevron-down"></a>
			<a href="#widget-config" data-toggle="modal" class="icon-wrench"></a>
			<a href="javascript:;" class="icon-refresh"></a>		
			<a href="javascript:;" class="icon-remove"></a>
			</span>							
		</div>
		<div class="widget-body">
			<?php include 'abbonamenti_details_snippet.php'; ?>
			<div style="clear:both">
			<hr>
            <button class="btn" onclick="location.href='<?php // echo base_url('index.php/abbonamenti/edit/'.$abbonamenti_item['slug']) ?>'"><i class="icon-pencil icon-white"></i> Modifica i dati inseriti</button><span style="color:grey">
            <button class="btn btn-info" onclick="location.href='<?php // echo base_url('index.php/abbonamenti/create'); ?>'"><i class="icon-plus icon-white"></i> Inserici un nuovo abbonamentio</button><br><br><p style="color:grey"> creazione scheda: <?php // echo $abbonamenti_item['data_creazione']?></p>
            </div>	
        </div>
   </div>	
</div>	
				
				
									
									
									
									
									
									