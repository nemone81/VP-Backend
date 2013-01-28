<div id="sample_1_wrapper" class="dataTables_wrapper form-inline" role="grid">
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
			<?php if (empty($soci_item['note'])) {
				    echo 'Non ci sono note';
				    } else {
				    echo '<div class="alert alert-block alert-info fade in"><class="alert-heading"><strong>Note:</strong> '.$soci_item['note'];
				    }?>					
			</div>	
			<div style="fmargin-left:100px">			
				<button class="btn" onclick="location.href='<?php echo base_url('index.php/soci/edit/'.$soci_item['slug']) ?>'"><i class="icon-pencil icon-white"></i> Modifica i dati </button>
			</div>

			
			<hr>
			<h5>Abbonamento:</h5>
			<div style="float:left">
				<div class="alert alert-block fade in"><class="alert-heading"><i class=" icon-list-alt"> </i>Scadenza Iscrizione: <strong><?php echo $soci_item['data_nascita']?></div>
				<p><i class="icon-map-marker"> </i>Abbonamento: Trimestrale con Corso scadenza: Marzo 2013<?php // echo $soci_item['luogo_residenza']?> - Modifica</p>

			</div>	

			<div style="clear:both">	
			</div>		
			<button class="btn" onclick="location.href='<?php echo base_url('index.php/abbonamenti/create?id_socio='.$soci_item['id'].'&nome='.$soci_item['nome'].'&cognome='.$soci_item['cognome'].'&slug='.$soci_item['slug'].'&tipo='.$soci_item['tipo']) ?>'"><i class="icon-pencil icon-white"></i> Aggiungi Abbonamento </button><span style="color:grey">   ultima modifica: <?php echo $soci_item['data_modifica']?></span>		
			</div>	
</div>	
</div>	
					
	<p>
	<div class="widget">
			<div class="widget-title">
				<h4><i class="icon-sign-blank"> </i>Storico Abbonamenti di <?php echo $soci_item['nome'].' '.$soci_item['cognome']; ?></h4>
				<span class="tools">
				<a href="javascript:;" class="icon-chevron-down"></a>
				<a href="#widget-config" data-toggle="modal" class="icon-wrench"></a>
				<a href="javascript:;" class="icon-refresh"></a>		
				</span>							
			</div>
			<div class="widget-body">
				<div id="sample_1_wrapper" class="dataTables_wrapper form-inline" role="grid">
					<table class="table table-striped table-bordered" id="sample_1">
						<thead>
							<tr>
							<th>Tipologia Abbonamento</th>
							<th>data scadenza</th>
							<th>Note</th>
							<th>Actions</th>
							</tr>											
						</thead>
						<tbody>
							<tr class="odd gradeX">
								<td>Trimestrale con Corso<?php //echo $soci_item['tessera'] ?></td>
								<td>Marzo 2012</td>
								<td>Deve 5 suro</td>
								<td class="center">
									<a href="<?php echo $soci_item['slug'] ?>" class="icon huge"><i class="icon-zoom-in"></i></a>&nbsp;	
									<a href="#" class="icon huge"><i class="icon-pencil"></i></a>&nbsp;
									<a href="#" class="icon huge"><i class="icon-remove"></i></a>&nbsp;		
								</td>
							</tr>
							<tr class="odd gradeX">
								<td>Annuale con Corso<?php //echo $soci_item['tessera'] ?></td>
								<td>Marzo 2014</td>
								<td>Deve 5 suro</td>
								<td class="center">
									<a href="<?php echo $soci_item['slug'] ?>" class="icon huge"><i class="icon-zoom-in"></i></a>&nbsp;	
									<a href="#" class="icon huge"><i class="icon-pencil"></i></a>&nbsp;
									<a href="#" class="icon huge"><i class="icon-remove"></i></a>&nbsp;		
								</td>
							</tr>		
						</tbody>
					</table>
				</div>
			</div>								
				
				
				</div>								
				
				



