<div id="sample_1_wrapper" class="dataTables_wrapper form-inline" role="grid">

	<?php $soci_item=end($soci);?>	
	
	<div class="widget">
		<div class="widget-title">
			<h4><i class="icon-sign-blank"> </i>Nuovo Socio</h4>
			<span class="tools">
			<a href="javascript:;" class="icon-chevron-down"></a>
			<a href="#widget-config" data-toggle="modal" class="icon-wrench"></a>
			<a href="javascript:;" class="icon-refresh"></a>		
			<a href="javascript:;" class="icon-remove"></a>
			</span>							
		</div>
		<div class="widget-body">
			<div class="alert alert-success">
				<button class="close" data-dismiss="alert">×</button>
				<strong>Nuovo socio inserito</strong>.
			</div>	
			<?php include 'soci_details_snippet.php'; ?>
			<div style="clear:both">
			<hr>
               	<button class="btn" onclick="location.href='<?php echo base_url('index.php/soci/'.$soci_item['id']) ?>'"><i class="icon-eye-open"></i> Vedi Scheda Socio</button>
            <button class="btn" onclick="location.href='<?php echo base_url('index.php/soci/edit/'.$soci_item['id']) ?>'"><i class="icon-pencil icon-white"></i> Modifica i dati inseriti</button><span style="color:grey">
            <button class="btn btn-info" onclick="location.href='<?php echo base_url('index.php/soci/create'); ?>'"><i class="icon-plus icon-white"></i> Inserici un nuovo socio</button><br><br><p style="color:grey">
            </div>	
        </div>
   </div>	
</div>	
				
				
									
									
									
									
									
									