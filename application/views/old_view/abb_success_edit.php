<div id="sample_1_wrapper" class="dataTables_wrapper form-inline" role="grid">
	<div class="alert alert-success">
		<button class="close" data-dismiss="alert">×</button>
		<strong>Dati modificati con successo</strong>.
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
               	<button class="btn" onclick="location.href='<?php echo base_url('index.php/soci/'.$soci_item['id']) ?>'"><i class="icon-eye-open"></i> Vedi Scheda Socio</button>
               	
                <button class="btn" onclick="location.href='<?php echo base_url('index.php/abbonamenti/edit/'.$abbonamenti_item['id'].'/'.$soci_item['id']) ?>'"><i class="icon-pencil icon-white"></i> Modifica i dati inseriti</button><span style="color:grey">
				<button class="btn btn-info" onclick="location.href='<?php echo base_url('index.php/abbonamenti/create/'.$soci_item['id']) ?>'"><i class="icon-plus icon-white"></i> Inserici un nuovo abbonamentio</button>
			</div>	
		</div>
	</div>	
							
									
									
									
									
									
									