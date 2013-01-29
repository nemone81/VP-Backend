<div id="sample_1_wrapper" class="dataTables_wrapper form-inline" role="grid">
	<div class="widget">
		<div class="widget-title">
			<h4><i class="icon-sign-blank"> </i> Scheda Socio<?php //echo $soci_item['nome'].' '.$soci_item['cognome']; ?></h4>
			<span class="tools">
			<a href="javascript:;" class="icon-chevron-down"></a>
			<a href="#widget-config" data-toggle="modal" class="icon-wrench"></a>
			<a href="javascript:;" class="icon-refresh"></a>		
			<a href="javascript:;" class="icon-remove"></a>
			</span>							
		</div>
		<div class="widget-body">
			<?php include 'soci_details_snippet.php'; ?>
			
	
			<div style="fmargin-left:100px">			
				<button class="btn" onclick="location.href='<?php echo base_url('index.php/soci/edit/'.$soci_item['slug']) ?>'"><i class="icon-pencil icon-white"></i> Modifica i dati </button>
			</div>

			<hr>
			<h5>Abbonamento:</h5>
			<div style="float:left">
				<div class="alert alert-block fade in"><class="alert-heading"><i class=" icon-list-alt"> </i>Scadenza Iscrizione: <?php echo $soci_item['data_nascita']?></div>
				<p><i class="icon-map-marker"> </i>Abbonamento: Trimestrale con Corso scadenza: Marzo 2013 - Modifica</p>
			</div>	

			<div style="clear:both">	
			</div>		
			<button class="btn" onclick="location.href='<?php echo base_url('index.php/abbonamenti/create?id_socio='.$soci_item['id'].'&nome='.$soci_item['nome'].'&cognome='.$soci_item['cognome'].'&slug='.$soci_item['slug'].'&tipo='.$soci_item['tipo']) ?>'"><i class="icon-pencil icon-white"></i> Aggiungi Abbonamento </button><span style="color:grey">   ultima modifica: <?php echo $soci_item['data_modifica']?></span>		
			</div>	
</div>	
</div>	
					
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
		
		<?php // print_r($tipo_abbonamenti) ?>
		<br>



		
				
			<table class="table table-striped table-bordered" id="sample_1">
				<thead>
					<tr>
						<th style="width: 50px;">Azioni</th>
						<th>Abbonamento</th>
						<th class="hidden-phone" style="width: 80px;">Codice</th>
						<th style="width: 120px;">Data Scadenza</th>
						<th>Note</th>
						<th class="hidden-phone" style="width: 120px;">Data Acquisto</th>
					</tr>
				</thead>
				<tbody>
				
				<?php foreach ($abbonamenti as $abbonamenti_item): ?>
				<tr class="odd gradeX">
					<td class="center">
						<a href="" class="icon huge tooltips" data-placement="top" data-original-title="Modifica Abbonamento"><i class="icon-pencil"></i></a>&nbsp;
						<a href="" class="icon huge tooltips" data-placement="top" data-original-title="Elimina Abbonamento"><i class="icon-remove"></i></a>&nbsp;		
					</td>
					
					<td><?php echo $tipo_abbonamenti[$abbonamenti_item['id_abbonamento']] ?></td>
					<td class="hidden-phone" ><?php echo $abbonamenti_item['id_abbonamento'] ?></td>
					<td><?php echo substr($abbonamenti_item['scadenza'],0,10) ?></td>
					<td><?php echo $abbonamenti_item['note'] ?></td>
					<td class="hidden-phone" ><?php echo $abbonamenti_item['data_creazione'] ?></td>
				</tr>
				<?php endforeach ?>
				</tbody>
			</table>
		</div>
	</div>								
</div>								
				
				



