<div id="sample_1_wrapper" class="dataTables_wrapper form-inline" role="grid">

	<?php $abbonamenti_item=end($abbonamenti); ?>

	<div class="widget">
		<div class="widget-title">
			<h4><i class="icon-sign-blank"> </i>Nuovo Abbonamento</h4>
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
				<strong>Nuovo abbonamentio inserito</strong>.
			</div>		
		
			<?php include 'abbonamenti_details_snippet.php'; ?>
			<div style="clear:both">
			<hr>
            <button class="btn" onclick="location.href='<?php echo base_url('index.php/abbonamenti/abb_edit/'.$abbonamenti_item['slug']) ?>'"><i class="icon-pencil icon-white"></i> Modifica i dati inseriti</button><span style="color:grey">
            <button class="btn btn-info" onclick="location.href='<?php // echo base_url('index.php/abbonamenti/create'); ?>'"><i class="icon-plus icon-white"></i> Inserici un nuovo abbonamentio</button><br><br><p style="color:grey">            </div>	
        </div>
   </div>	
</div>	
				
				
									
									
									
									
									
									