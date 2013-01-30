<!-- BEGIN PAGE CONTENT-->
<div id="page" class="dashboard">
	<div class="row-fluid">
		<div class="span12">
			<!-- BEGIN EXAMPLE TABLE PORTLET-->
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
					<?php // print_r($nome_soci); ?>
					<?php // echo 'abbonamenti scaduti:'; print_r($abbonamenti_scaduti) ?>
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
								<td><?php echo $nome_soci[$abbonamenti_scaduti_item['id_socio']] ?></td>
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
			<!-- END EXAMPLE TABLE PORTLET-->
		</div>
	</div>
</div>
<!-- END PAGE CONTAINER-->
</div>
<!-- END PAGE -->
</div>
<!-- END CONTAINER -->