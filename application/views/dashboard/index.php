<!-- BEGIN PAGE CONTENT-->
<div id="page" class="dashboard">
	<!-- BEGIN ROW-->
	<div class="row-fluid">
		<div class="span12">
			<!-- BEGIN WIDGET ISCRIZIONI SCADUTE-->
			<div class="widget">
				<div class="widget-title">
					<h4><i class="icon-list"> </i>Iscrizioni, Abbonamenti Annuali, Trimestrali: Scaduti negli ultimi 60 giorni</h4>
					<span class="tools">
					<a href="javascript:;" class="icon-chevron-down"></a>
					<a href="#widget-config" data-toggle="modal" class="icon-wrench"></a>
					<a href="http://localhost/VP-Backend/index.php/soci/get_dump_soci" target="_blank" data-toggle="modal" class="icon-download-alt popovers" data-trigger="hover" data-placement="left" data-content="Genera un export in formato csv della lista soci da poter importare in excel." data-original-title="Scarica Lista Soci"></a>									
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
	<!-- END ROW-->
	
	<!-- BEGIN ROW-->
	<div class="row-fluid">
		<div class="span6">
			<!-- BEGIN SAMPLE TABLE PORTLET-->
			<div class="widget">
				<div class="widget-title">
					<h4><i class="icon-reorder"></i>Numeri</h4>
					<span class="tools">
					<a href="javascript:;" class="icon-chevron-down"></a>
					<a href="#widget-config" data-toggle="modal" class="icon-wrench"></a>
					<a href="javascript:;" class="icon-refresh"></a>		
					<a href="javascript:;" class="icon-remove"></a>
					</span>							
				</div>
				<div class="widget-body">
					<table class="table table-hover">
						<thead>
							<tr>
								<th>Attivi</th>
								<th>Totali</th>
								<th class="hidden-phone">Username</th>
								<th>Status</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>Iscritti</td>
								<td><?php echo $numero_iscritti_attivi?></td>
								<td class="hidden-phone">makr124</td>
								<td><span class="label label-success">Approved</span></td>
							</tr>
							<tr>
								<td>Annuali</td>
								<td><?php echo $numero_annuali_attivi?></td>
								<td class="hidden-phone">jac123</td>
								<td><span class="label label-info">Pending</span></td>
							</tr>
							<tr>
								<td>Trimestrali</td>
								<td><?php echo $numero_trimestrali_attivi?></td>
								<td class="hidden-phone">lar</td>
								<td><span class="label label-warning">Suspended</span></td>
							</tr>
							<tr>
								<td>Mensili</td>
								<td><?php echo $numero_mensili_attivi?></td>
								<td class="hidden-phone">sanlim</td>
								<td><span class="label label-danger">Blocked</span></td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
			<!-- END SAMPLE TABLE PORTLET-->
		</div>
		<div class="span6">
			<!-- BEGIN CONDENSED TABLE PORTLET-->
			<div class="widget">
				<div class="widget-title">
					<h4><i class="icon-reorder"></i>Condensed Table</h4>
					<span class="tools">
					<a href="javascript:;" class="icon-chevron-down"></a>
					<a href="#widget-config" data-toggle="modal" class="icon-wrench"></a>
					<a href="javascript:;" class="icon-refresh"></a>		
					<a href="javascript:;" class="icon-remove"></a>
					</span>							
				</div>
				<div class="widget-body">
					<table class="table table-condensed table-hover">
						<thead>
							<tr>
								<th>#</th>
								<th>First Name</th>
								<th>Last Name</th>
								<th class="hidden-phone">Username</th>
								<th>Status</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>1</td>
								<td>Mark</td>
								<td>Otto</td>
								<td class="hidden-phone">makr124</td>
								<td><span class="label label-success">Approved</span></td>
							</tr>
							<tr>
								<td>2</td>
								<td>Jacob</td>
								<td>Nilson</td>
								<td class="hidden-phone">jac123</td>
								<td><span class="label label-info">Pending</span></td>
							</tr>
							<tr>
								<td>3</td>
								<td>Larry</td>
								<td>Cooper</td>
								<td class="hidden-phone">lar</td>
								<td><span class="label label-warning">Suspended</span></td>
							</tr>
							<tr>
								<td>3</td>
								<td>Sandy</td>
								<td>Lim</td>
								<td class="hidden-phone">sanlim</td>
								<td><span class="label label-danger">Blocked</span></td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
			<!-- END CONDENSED TABLE PORTLET-->
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