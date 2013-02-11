<div id="sample_1_wrapper" class="dataTables_wrapper form-inline" role="grid">
	<div class="widget">
		<div class="widget-title">
			<h4><i class="icon-sign-blank"> </i> Scheda Socio</h4>
			<span class="tools">
			<a href="javascript:;" class="icon-chevron-down"></a>
			</span>							
		</div>
		<div class="widget-body">
		
		 	<?php if ($flash_socio == 'new_socio') 
		 	 	echo '<div class="alert alert-success"><button class="close" data-dismiss="alert">×</button><strong>Nuovo socio inserito</strong></div>';
		 	 	if ($flash_socio == 'edit_socio') 
		 	 	echo '<div class="alert alert-success"><button class="close" data-dismiss="alert">×</button><strong>Dati socio modificati</strong></div>';		 	 	
			?>		
		
			<div style="font-size:18px; margin-bottom:15px"><?php echo $soci_item['nome'].' '.$soci_item['cognome']; ?></div>
			<div style="float:left; margin-right:17%">
				<p><span style="color:grey"><i class="fntsz14 icon-list-alt"> </i>Tessera n°: </span><?php echo $soci_item['tessera']?></p>
				<p><span style="color:grey"><i class="fntsz14 icon-tag"> </i>Tipologia: </span><?php 
				echo $tipologia[$soci_item['tipo']] ?></p>
				<p><span style="color:grey"><i class="fntsz14 icon-calendar"> </i>
				<?php if ($soci_item['sesso'] == 'Maschio') {
					echo 'Nato il: ';
					} else { 
					echo 'Nata il: ';
					}?>
					</span><?php echo $soci_item['data_nascita'].' a '.$soci_item['luogo_nascita']?></p>
				<p><span style="color:grey"><i class="fntsz14 icon-heart"> </i>Sesso: </span><?php echo $soci_item['sesso']?></p>
				<p><span style="color:grey"><i class="fntsz14 icon-medkit"> </i>
					<?php if ($soci_item['certificato_medico'] == 0000-00-00) {
						echo 'Certificato Medico: Assente'; 
						} else {
						echo 'Scadenza Certificato: </span>'.$soci_item['certificato_medico'];
						};?>
				</p>
			</div>
			<div style="float:left">
				<p><span style="color:grey"><i class="fntsz14 icon-envelope"> </i>Email: <a href="mailto:<?php echo $soci_item['email']?>"><?php echo $soci_item['email']?></a></p> 
				<p><span style="color:grey"><i class="fntsz14 icon-phone"> </i>Tel: </span><?php echo $soci_item['telefono']?></p>
				<p><span style="color:grey"><i class="fntsz14 icon-map-marker"> </i> Residenza: </span><?php echo $soci_item['indirizzo_residenza'].' - '.$soci_item['comune_residenza']?></p>
				<p><span style="color:grey"><i class="fntsz14 icon-edit"> </i>Creazione scheda: </span><?php echo $soci_item['data_creazione']?></p>
				<p><span style="color:grey"><i class="fntsz14 icon-pencil"> </i>Ultima modifica scheda: </span><?php echo $soci_item['data_modifica']?></p>
			</div>
			
			<div style="clear:both">
				<p>
					<span style="color:grey"><i class="fntsz14 icon-align-right"> </i>Note:</span>						
					<span style="color: rgb(233, 123, 22)"><?php echo $soci_item['note'];?></span>	
				</p>					
			</div>

			<div style="fmargin-left:100px">			
				<button class="btn" onclick="location.href='<?php echo base_url('index.php/soci/edit/'.$soci_item['id']) ?>'"><i class="icon-pencil icon-white"></i> Modifica i dati </button>
			</div>
		</div>	
	</div>	
</div>	
					
<div class="widget">
	<div class="widget-title">
		<h4><i class="icon-sign-blank"> </i>Storico Abbonamenti di <?php echo $soci_item['nome'].' '.$soci_item['cognome']; ?></h4>
		<span class="tools">
		<a href="javascript:;" class="icon-chevron-down"></a>
		</span>
	</div>
	<div class="widget-body">
		<?php if ($flash_abbonamento == 'new_abbonamento') 
			echo '<div class="alert alert-success"><button class="close" data-dismiss="alert">×</button><strong>Nuovo abbonamento inserito</strong></div>';
			if ($flash_abbonamento == 'edit_abbonamento') 
			echo '<div class="alert alert-success"><button class="close" data-dismiss="alert">×</button><strong>Dati abbonamento modificati</strong></div>';
		?>		
		<div style="float:left; margin-bottom: 20px;">
			<button class="btn" onclick="location.href='<?php echo base_url('index.php/abbonamenti/create/'.$soci_item['id']) ?>'"><i class="icon-plus icon-white"></i> Aggiungi Abbonamento </button><span style="color:grey">		
		</div>	
		<div style="float:left; margin: 7px 0px 0px 10px;  
			<?php $scadenza_iscrizione = $ultima_iscrizione[0]['scadenza'];
				if (human_to_unix($scadenza_iscrizione) < now()) {
					echo('color: rgb(233, 123, 22)');
				}
			 ?>
			"><i class="fntsz14 icon-list-alt"> </i>Scadenza Iscrizione: 
			<?php echo substr($scadenza_iscrizione, 0, 10); ?>			
		</div>
		<div id="sample_1_wrapper" class="dataTables_wrapper form-inline" role="grid" style="clear:both">
			<table class="table table-striped table-bordered" id="sample_1">
				<thead>
					<tr>
						<th style="width: 50px;">Azioni</th>
						<th style="width: 100px;">Tipologia</th>
						<th style="width: 170px;">Abbonamento</th>
<!-- 						<th class="hidden-phone" style="width: 80px;">Codice</th> -->
						<th style="width: 120px;">Scadenza</th>
						<th class="hidden-phone">Note</th>
						<th class="hidden-phone" style="width: 120px;">Acquisto</th>
					</tr>
				</thead>
				<tbody> 		
				<?php krsort($abbonamenti);
					foreach ($abbonamenti as $abbonamenti_item):
					$nome_intero = $nome_abbonamenti[$abbonamenti_item['codice_abbonamento']];
					$nome_pezzi = explode("-", $nome_intero);
					?>
				<tr class="odd gradeX">
					<td class="center">
						<a href="<?php echo base_url('index.php/abbonamenti/edit/'.$abbonamenti_item['id'].'/'.$abbonamenti_item['id_socio']) ?>" class="icon huge tooltips" data-placement="top" data-original-title="Modifica Abbonamento"><i class="icon-pencil"></i></a>&nbsp;	
						<a href="#Delete_Modal<?php echo($abbonamenti_item['id_socio']) ?>"  class="icon huge tooltips" data-placement="top" data-original-title="Elimina  Abbonamento" data-toggle="modal"><i class="icon-remove"></i></a>&nbsp;		
						<div id="Delete_Modal<?php echo($abbonamenti_item['id_socio']) ?>" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel3" aria-hidden="true" style="display: none;">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
								<h3 id="myModalLabel3">Elimina Abbonamento</h3>
							</div>
							<div class="modal-body">
								<p>Una volta eliminato, le informazioni non saranno recuperabili.</p>
							</div>
							<div class="modal-footer">
								<button class="btn" data-dismiss="modal" aria-hidden="true">Annulla</button>
								<button onclick="location.href='<?php echo base_url('index.php/abbonamenti/delete_abbonamenti/'.$abbonamenti_item['id'].'/'.$abbonamenti_item['id_socio']) ?>'" data-dismiss="modal" class="btn btn-primary">Conferma Eliminazione</button>
								
							</div>
						</div>
					</td>
					<td><?php echo $nome_pezzi[0]; // piece1?></td>
					<td><?php echo $nome_pezzi[1]; // piece1?></td>
<!-- 					<td class="hidden-phone" ><?php echo $abbonamenti_item['codice_abbonamento'] ?></td> -->
					<td>
						<?php if (strpos(($abbonamenti_item['codice_abbonamento']),'M') !== false || strpos(($abbonamenti_item['codice_abbonamento']),'T') !== false) {
						$mesi = array("Gennaio", "Febbraio", "Marzo", "Aprile", "Maggio", "Giugno", 
						"Luglio", "Agosto", "Settembre", "Ottobre","Novembre", "Dicembre");
						$mese_scadenza = date_format(date_create($abbonamenti_item['scadenza']), 'n');
						$mese_scadenza -= 1;
						echo $mesi[$mese_scadenza].' - '.date_format(date_create($abbonamenti_item['scadenza']), 'Y');
					 	} else {
						echo date_format(date_create($abbonamenti_item['scadenza']), 'Y-m-d');
						} ?>
					</td>
					<td class="hidden-phone"><?php echo $abbonamenti_item['note'] ?></td>
					<td class="hidden-phone" ><?php echo $abbonamenti_item['data_creazione'] ?></td>
				</tr>
				<?php endforeach; ?>
				</tbody>
			</table>
		</div>
	</div>								
</div>								
				
				



