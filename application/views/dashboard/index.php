<!-- BEGIN PAGE CONTENT-->
<div id="page" class="dashboard">
	<div class="row-fluid">
		<div class="span12">
			<!-- BEGIN EXAMPLE TABLE PORTLET-->
			<div class="widget">
				<div class="widget-title">
					<h4><i class="icon-list"> </i>Abbonamenti Scaduti</h4>
					<span class="tools">
					<a href="javascript:;" class="icon-chevron-down"></a>
					<a href="#widget-config" data-toggle="modal" class="icon-wrench"></a>
					<a href="http://localhost/VP-Backend/index.php/soci/get_dump_soci" target="_blank" data-toggle="modal" class="icon-download-alt popovers" data-trigger="hover" data-placement="left" data-content="Genera un export in formato csv della lista soci da poter importare in excel." data-original-title="Scarica Lista Soci"></a>									
					</span>							
				</div>
				<div class="widget-body">
					<?php // echo 'abbonamenti scaduti:'; print_r($abbonamenti_scaduti) ?>
					<div id="sample_1_wrapper" class="dataTables_wrapper form-inline" role="grid">
						<table class="table table-striped table-bordered" id="sample_1">
							<thead>
								<tr>
									<th>Socio ID</th>
									<th>Codice Abbonamento</th>
									<th>Data Scadenza</th>
									<th>Note</th>
									<th>Data Acquisto</th>
								</tr>
							</thead>
							<tbody>
							<?php foreach ($abbonamenti_scaduti as $abbonamenti_scaduti_item): ?>
							<tr class="odd gradeX">
								<td><?php echo $abbonamenti_scaduti_item['id_socio'] ?></td>
								<td><?php echo $abbonamenti_scaduti_item['id_abbonamento'] ?></td>
								<td><?php echo $abbonamenti_scaduti_item['scadenza'] ?></td>
								<td><?php echo $abbonamenti_scaduti_item['note'] ?></td>
								<td><?php echo $abbonamenti_scaduti_item['data_creazione'] ?></td>
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