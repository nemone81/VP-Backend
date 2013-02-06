<!-- BEGIN PAGE CONTENT-->
<div id="page" class="dashboard">
	<div class="row-fluid">
		<div class="span12">
			<!-- BEGIN EXAMPLE TABLE PORTLET-->
			<div class="widget">
				<div class="widget-title">
					<h4><i class="icon-list"> </i>Soci</h4>
					<span class="tools">
					<a href="<?php echo base_url('index.php/soci/get_csv_soci') ?>" target="_blank" data-toggle="modal" class="icon-download-alt popovers" data-trigger="hover" data-placement="left" data-content="Genera un export in formato csv della lista soci da poter importare in excel." data-original-title="Scarica Lista Soci"></a>									
					</span>							
				</div>
				<div class="widget-body">
				
									
								
				
				
				
				
				
				
				
				
				
					<div id="sample_1_wrapper" class="dataTables_wrapper form-inline" role="grid">
						<table class="table table-striped table-bordered" id="sample_1">
							<thead>
								<tr>
								<th style="width: 70px;">Azioni</th>
								<th style="width: 45px;">T n°</th>
								<th>Nome</th>
								<th>Cognome</th>
								<th class="hidden-phone">Tipologia</th>
								<th class="hidden-phone">Data e luogo di Nascita</th>
								<th class="hidden-phone">Email</th>
								<th class="hidden-phone">Note</th>
								</tr>
							</thead>
							<tbody>
							<?php krsort($soci);
							foreach ($soci as $soci_item): ?>
							<tr class="odd gradeX">
								<td class="center">
									<a href="<?php echo base_url('index.php/soci').'/'.$soci_item['id'] ?>" class="icon huge tooltips" data-placement="top" data-original-title="Visualizza scheda Socio"><i class="icon-zoom-in"></i></a>&nbsp;
									<a href="<?php echo base_url('index.php/soci/edit').'/'.$soci_item['id'] ?>" class="icon huge tooltips" data-placement="top" data-original-title="Modifica scheda Socio"><i class="icon-pencil"></i></a>&nbsp;
									<a href="#Delte_Modal<?php echo($soci_item['id']) ?>"  class="icon huge tooltips" data-placement="top" data-original-title="Elimina scheda Socio" data-toggle="modal"><i class="icon-remove"></i></a>&nbsp;		
									
									<div id="Delte_Modal<?php echo($soci_item['id']) ?>" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel3" aria-hidden="true" style="display: none;">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
											<h3 id="myModalLabel3">Elimina Socio</h3>
										</div>
										<div class="modal-body">
											<p>Una volta eliminato, le informazioni non saranno recuperabili.</p>
										</div>
										<div class="modal-footer">
											<button class="btn" data-dismiss="modal" aria-hidden="true">Annulla</button>
											<a href="<?php echo base_url('index.php/soci/delete_soci').'/'.$soci_item['id'] ?>" role="button" data-dismiss="modal" class="btn btn-primary">Conferma</a>
										</div>
									</div>
								</td>
								<td><?php echo $soci_item['tessera'] ?></td>
								<td><a href="<?php echo base_url('index.php/soci').'/'.$soci_item['id']?>"><?php echo $soci_item['nome'] ?></a></td>
								<td><?php echo $soci_item['cognome'] ?></td>
								<td class="hidden-phone"><?php 
								echo $tipologia[$soci_item['tipo']] ?></span></td>													
								<td class="hidden-phone center"><?php echo $soci_item['data_nascita'].' | '.$soci_item['luogo_nascita'] ?></td>
								<td class="hidden-phone"><a href="mailto:<?php echo $soci_item['email'] ?>"><?php echo $soci_item['email'] ?></a></td>
								<td class="hidden-phone" style="max-width: 200px;"><?php echo $soci_item['note'] ?></span></td>
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