<!-- BEGIN PAGE CONTENT-->
<div id="page">
	<!-- BEGIN ROW-->
	

	<?php echo'iscritti: '; print_r($storico_iscritti);	?>
	<br>
	<?php echo'mensili :'; print_r($storico_mensili);	?>
	<br>
	<?php echo'coupon: '; print_r($storico_coupon);	?>
	<br>
	<?php echo'annuali: '; print_r($storico_annuali);	?>
	<br>
	<?php echo'trimestrali: '; print_r($storico_trimestrali);	?>
	<br>


	<div class="row-fluid">
		<div class="span12">
			<!-- BEGIN WIDGET ISCRIZIONI SCADUTE-->
			<div class="widget">
				<div class="widget-title">
					<h4><i class="icon-list"> </i>Iscrizioni, Annuali, Trimestrali: Scaduti negli ultimi 60 giorni</h4>
					<span class="tools">
								
					</span>							
				</div>
				<div class="widget-body">
					<div id="sample_1_wrapper" class="dataTables_wrapper form-inline" role="grid">
						<table class="table table-striped table-bordered" id="sample_1">
							<thead>
								<tr>
									<th>Socio</th>
									<th>Abbonamento</th>
									<th style="width:110px">Scadenza</th>
									<th class="hidden-phone" >Note</th>
									<th style="width:110px" class="hidden-phone" >Acquisto</th>
								</tr>
							</thead>
							<tbody>
							<?php foreach ($abbonamenti_scaduti as $abbonamenti_scaduti_item): ?>
							<tr class="odd gradeX">
								<td><a href="<?php echo base_url('index.php/soci').'/'.$abbonamenti_scaduti_item['id_socio'] ?>">
								 <?php echo $nome_soci[$abbonamenti_scaduti_item['id_socio']] ?></a></td>
								<td><?php echo $nome_abbonamenti[$abbonamenti_scaduti_item['codice_abbonamento']] ?></td>
								<td><?php if (strpos(($abbonamenti_scaduti_item['codice_abbonamento']),'T') !== false) {
									$mesi = array("Gennaio", "Febbraio", "Marzo", "Aprile", "Maggio", "Giugno", 
									"Luglio", "Agosto", "Settembre", "Ottobre","Novembre", "Dicembre");
									$mese_scadenza = date_format(date_create($abbonamenti_scaduti_item['scadenza']), 'n');
									$mese_scadenza -= 1;
									echo $mesi[$mese_scadenza].' - '.date_format(date_create($abbonamenti_scaduti_item['scadenza']), 'Y');
								 
								} else {
									echo date_format(date_create($abbonamenti_scaduti_item['scadenza']), 'Y-m-d');
								} ?>
								
								</td>
								
								<td class="hidden-phone" ><?php echo $abbonamenti_scaduti_item['note'] ?></td>
								<td class="hidden-phone" ><?php echo $abbonamenti_scaduti_item['data_acquisto'] ?></td>
							</tr>
							<?php endforeach ?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
			<!-- END WIDGET ISCRIZIONI SCADUTE-->
		</div>
	</div>
	
	<div class="row-fluid">
		<div class="span12">
			<!-- BEGIN INTERACTIVE CHART PORTLET-->
			<div class="widget">
				<div class="widget">
					<div class="widget-title">
						<h4><i class="icon-reorder"></i>Acquisti</h4>						
					</div>
					<div class="widget-body">
						<div id="site_statistics" class="chart"></div>
					</div>
				</div>
			</div>
		</div>
		<!-- END INTERACTIVE CHART PORTLET-->		
	</div>


	<div class="row-fluid">
		<div class="span3">

			<div class="widget">
				<div class="widget-title">
					<h4><i class="icon-reorder"></i>Numeri</h4>
					<span class="tools">
					</span>							
				</div>
				<div class="widget-body">
					<table class="table table-hover">
						<thead>
							<tr>
								<th>Attivi</th>
								<th>Totali</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>Iscritti</td>
								<td><?php echo $numero_iscritti_attivi?></td>
							</tr>
							<tr>
								<td>Annuali</td>
								<td><?php echo $numero_annuali_attivi?></td>
							</tr>
							<tr>
								<td>Trimestrali</td>
								<td><?php echo $numero_trimestrali_attivi?></td>
							</tr>
							<tr>
								<td>Mensili</td>
								<td><?php echo $numero_mensili_attivi?></td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>



							<!-- END NOTIFICATIONS PORTLET-->
						</div>
					</div>




		</div>
	</div>
	<!-- END ROW-->
	
	
</div>
</div>
<!-- END PAGE CONTAINER-->
</div>
<!-- END PAGE -->
</div>
<!-- END CONTAINER -->