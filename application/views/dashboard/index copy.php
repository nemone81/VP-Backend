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


<div class="row-fluid">
						<div class="span8">
							<!-- BEGIN SITE VISITS PORTLET-->
							<div class="widget">
								<div class="widget-title">
									<h4><i class="icon-signal"></i>Site Visits</h4>
									<span class="tools">
									<a href="javascript:;" class="icon-chevron-down"></a>
									<a href="#widget-config" data-toggle="modal" class="icon-wrench"></a>
									<a href="javascript:;" class="icon-refresh"></a>		
									<a href="javascript:;" class="icon-remove"></a>
									</span>							
								</div>
								<div class="widget-body">
									<div id="site_statistics_loading" style="display: none;">
										<img src="assets/img/loading.gif" alt="loading">
									</div>
									<div id="site_statistics_content" class="hide" style="display: block;">
										<div class="btn-toolbar no-top-space clearfix">
											<div class="btn-group" data-toggle="buttons-radio">
												<button class="btn btn-mini">Asia</button><button class="btn btn-mini">Europe</button><button class="btn btn-mini">USA</button>		
											</div>
											<div class="btn-group pull-right" data-toggle="buttons-radio">
												<button class="btn btn-mini active">Sales</button><button class="btn btn-mini">
												<span class="visible-phone">In</span>
												<span class="hidden-phone">Income</span>
												</button><button class="btn btn-mini">Stock</button>		
											</div>
										</div>
										<div id="site_statistics" class="chart" style="padding: 0px; position: relative;"><canvas class="base" width="681" height="300"></canvas><canvas class="overlay" width="681" height="300" style="position: absolute; left: 0px; top: 0px;"></canvas><div class="tickLabels" style="font-size:smaller"><div class="xAxis x1Axis" style="color:#545454"><div class="tickLabel" style="position:absolute;text-align:center;left:25px;top:280px;width:42px">2</div><div class="tickLabel" style="position:absolute;text-align:center;left:70px;top:280px;width:42px">4</div><div class="tickLabel" style="position:absolute;text-align:center;left:115px;top:280px;width:42px">6</div><div class="tickLabel" style="position:absolute;text-align:center;left:160px;top:280px;width:42px">8</div><div class="tickLabel" style="position:absolute;text-align:center;left:205px;top:280px;width:42px">10</div><div class="tickLabel" style="position:absolute;text-align:center;left:250px;top:280px;width:42px">12</div><div class="tickLabel" style="position:absolute;text-align:center;left:295px;top:280px;width:42px">14</div><div class="tickLabel" style="position:absolute;text-align:center;left:340px;top:280px;width:42px">16</div><div class="tickLabel" style="position:absolute;text-align:center;left:385px;top:280px;width:42px">18</div><div class="tickLabel" style="position:absolute;text-align:center;left:430px;top:280px;width:42px">20</div><div class="tickLabel" style="position:absolute;text-align:center;left:476px;top:280px;width:42px">22</div><div class="tickLabel" style="position:absolute;text-align:center;left:521px;top:280px;width:42px">24</div><div class="tickLabel" style="position:absolute;text-align:center;left:566px;top:280px;width:42px">26</div><div class="tickLabel" style="position:absolute;text-align:center;left:611px;top:280px;width:42px">28</div><div class="tickLabel" style="position:absolute;text-align:center;left:656px;top:280px;width:42px">30</div></div><div class="yAxis y1Axis" style="color:#545454"><div class="tickLabel" style="position:absolute;text-align:right;top:265px;right:663px;width:18px">0</div><div class="tickLabel" style="position:absolute;text-align:right;top:246px;right:663px;width:18px">10</div><div class="tickLabel" style="position:absolute;text-align:right;top:226px;right:663px;width:18px">20</div><div class="tickLabel" style="position:absolute;text-align:right;top:207px;right:663px;width:18px">30</div><div class="tickLabel" style="position:absolute;text-align:right;top:188px;right:663px;width:18px">40</div><div class="tickLabel" style="position:absolute;text-align:right;top:168px;right:663px;width:18px">50</div><div class="tickLabel" style="position:absolute;text-align:right;top:149px;right:663px;width:18px">60</div><div class="tickLabel" style="position:absolute;text-align:right;top:130px;right:663px;width:18px">70</div><div class="tickLabel" style="position:absolute;text-align:right;top:110px;right:663px;width:18px">80</div><div class="tickLabel" style="position:absolute;text-align:right;top:91px;right:663px;width:18px">90</div><div class="tickLabel" style="position:absolute;text-align:right;top:71px;right:663px;width:18px">100</div><div class="tickLabel" style="position:absolute;text-align:right;top:52px;right:663px;width:18px">110</div><div class="tickLabel" style="position:absolute;text-align:right;top:33px;right:663px;width:18px">120</div><div class="tickLabel" style="position:absolute;text-align:right;top:13px;right:663px;width:18px">130</div><div class="tickLabel" style="position:absolute;text-align:right;top:-6px;right:663px;width:18px">140</div></div></div><div class="legend"><div style="position: absolute; width: 85px; height: 44px; top: 9px; right: 9px; background-color: rgb(255, 255, 255); opacity: 0.85;"> </div><table style="position:absolute;top:9px;right:9px;;font-size:smaller;color:#545454"><tbody><tr><td class="legendColorBox"><div style="border:1px solid #ccc;padding:1px"><div style="width:4px;height:0;border:5px solid rgb(209,38,16);overflow:hidden"></div></div></td><td class="legendLabel">Unique Visits</td></tr><tr><td class="legendColorBox"><div style="border:1px solid #ccc;padding:1px"><div style="width:4px;height:0;border:5px solid rgb(55,183,243);overflow:hidden"></div></div></td><td class="legendLabel">Page Views</td></tr></tbody></table></div></div>
									</div>
								</div>
							</div>
							<!-- END SITE VISITS PORTLET-->
						</div>
						<div class="span4">
							<!-- BEGIN NOTIFICATIONS PORTLET-->


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
								<td class="hidden-phone"></td>
								<td><span class="label label-success"></span></td>
							</tr>
							<tr>
								<td>Annuali</td>
								<td><?php echo $numero_annuali_attivi?></td>
								<td class="hidden-phone"></td>
								<td><span class="label label-info"></span></td>
							</tr>
							<tr>
								<td>Trimestrali</td>
								<td><?php echo $numero_trimestrali_attivi?></td>
								<td class="hidden-phone"></td>
								<td><span class="label label-warning"></span></td>
							</tr>
							<tr>
								<td>Mensili</td>
								<td><?php echo $numero_mensili_attivi?></td>
								<td class="hidden-phone"></td>
								<td><span class="label label-danger"></span></td>
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