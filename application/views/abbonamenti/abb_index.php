				<!-- BEGIN PAGE CONTENT-->
				<div id="page" class="dashboard">
				
				
				
				
					<div class="row-fluid">
						<div class="span12">
							<!-- BEGIN EXAMPLE TABLE PORTLET-->
							<div class="widget">
								<div class="widget-title">
									<h4><i class="icon-list"> </i>Socddi</h4>
									<span class="tools">
									<a href="javascript:;" class="icon-chevron-down"></a>
									<a href="#widget-config" data-toggle="modal" class="icon-wrench"></a>
									<a href="javascript:;" class="icon-refresh"></a>		
									</span>							
								</div>
								<div class="widget-body">
									<div id="sample_1_wrapper" class="dataTables_wrapper form-inline" role="grid">
										<div class="row-fluid"><div class="span6"><div id="sample_1_length" class="dataTables_length"><label><select size="1" name="sample_1_length" aria-controls="sample_1"><option value="10" selected="selected">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> soci per pagina</label></div></div><div class="span6"><div class="dataTables_filter" id="sample_1_filter"><label>Search: <input type="text" aria-controls="sample_1"></label></div></div></div>
										<table class="table table-striped table-bordered" id="sample_1">
											<thead>
												<tr>
												<th style="width: 50px;">Tessera</th>
												<th>Nome</th>
												<th>Cognome</th>
												<th>Data e Luogo di Nascita</th>
												<th class="hidden-phone">Email</th>
												<th class="hidden-phone">Telefono</th>
												<th class="hidden-phone">Note</th>
												<th>Actions</th>
												</tr>
											</thead>
											<tbody>
										
											<?php foreach ($abbonamenti as $abbonamenti_item): ?>
												<tr class="odd gradeX">
													<td><?php echo $soci_item['tessera'] ?></td>
													<td><a href="<?php echo $soci_item['slug'] ?>"><?php echo $soci_item['nome'] ?></a></td>
													<td><?php echo $soci_item['cognome'] ?></td>
													<td class="hidden-phone center"><?php echo $soci_item['data_nascita'].' | '.$soci_item['luogo_nascita'] ?></td>
													<td class="hidden-phone"><a href="mailto:<?php echo $soci_item['email'] ?>"><?php echo $soci_item['email'] ?></a></td>
													<td class="hidden-phone"><?php echo $soci_item['telefono'] ?></span></td>
													<td class="hidden-phone" style="max-width: 200px;"><?php echo $soci_item['note'] ?></span></td>
													<td class="center">
														<a href="<?php echo $soci_item['slug'] ?>" class="icon huge"><i class="icon-zoom-in"></i></a>&nbsp;	
														<a href="<?php echo $soci_item['slug'] // echo base_url('soci/')."/fff/".$soci_item['slug'] ?>" class="icon huge"><i class="icon-pencil"></i></a>&nbsp;
														<a href="#" class="icon huge"><i class="icon-remove"></i></a>&nbsp;		
													</td>
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