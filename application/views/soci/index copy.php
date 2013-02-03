		<!-- BEGIN PAGE -->
		<div id="body">
			<!-- BEGIN PAGE CONTAINER-->			
			<div class="container-fluid">
				<!-- BEGIN PAGE HEADER-->
				<div class="row-fluid">
					<div class="span12">
			<!-- BEGIN PAGE TITLE & BREADCRUMB-->
                  <h3 class="page-title">
                     Nuovo socio
                     <small>inserisci tutti dati per creare una nuova scheda socio</small>
                  </h3>
                  <ul class="breadcrumb">
                     <li>
                        <i class="icon-home"></i>
                        <a href="index.html">Home</a> <span class="divider">/</span>
                     </li>
                     <li><a href="#">Form Stuff</a></li>
                  </ul>
                  <!-- END PAGE TITLE & BREADCRUMB-->
               </div>
            </div>
            <!-- END PAGE HEADER-->




				<!-- BEGIN PAGE CONTENT-->
				<div id="page" class="dashboard">
					<div class="row-fluid">
						<div class="span12">
							<!-- BEGIN EXAMPLE TABLE PORTLET-->
							<div class="widget">
								<div class="widget-title">
									<h4><i class="icon-reorder"></i>Soci Table</h4>
									<span class="tools">
									<a href="javascript:;" class="icon-chevron-down"></a>
									<a href="#widget-config" data-toggle="modal" class="icon-wrench"></a>
									<a href="javascript:;" class="icon-refresh"></a>		
									</span>							
								</div>
								<div class="widget-body">
									<table class="table table-striped table-bordered" id="sample_1">
										<thead>
											<tr>
											<th>Tessera</th>
											<th>Nome</th>
											<th>Cognome</th>
											<th>Data di Nascita</th>
											<th class="hidden-phone">Abbonamento </th>
											<th class="hidden-phone">Scandenza Abbonamento</th>
											<th class="hidden-phone">Scandenza Iscrizione</th>
											<th>Actions</th>
											</tr>
										</thead>
										<tbody>
										
									
										<?php foreach ($soci as $soci_item): ?>

											<tr class="odd gradeX">
												<td>01</td>
												<td><?php echo $soci_item['nome'] ?></td>
												<td><?php echo $soci_item['cognome'] ?></td>
												<td class="hidden-phone center">12.02.2011</td>
												<td class="hidden-phone">Annuale Corso </td>
												<td class="hidden-phone"><span class="label label-success">14/03/2013</span></td>
												<td class="hidden-phone"><span class="label label-success">14/03/2013</span></td>
												<td class="center">
													<a href="#" class="icon huge"><i class="icon-zoom-in"></i></a>&nbsp;	
													<a href="#" class="icon huge"><i class="icon-pencil"></i></a>&nbsp;
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