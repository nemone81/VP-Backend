<div style="font-size:18px; margin-bottom:15px"><?php echo $soci_item['nome'].' '.$soci_item['cognome']; ?></div>
<div style="float:left; margin-right:17%">
	<p><span style="color:grey"><i class="fntsz14 icon-list-alt"> </i>Tessera n°: </span><?php echo $soci_item['tessera']?></p>
	<p><span style="color:grey"><i class="fntsz14 icon-tag"> </i>Tipologia: </span><?php 
	echo $tipologia[$soci_item['tipo']] ?></p>
	<p><span style="color:grey"><i class="fntsz14 icon-calendar"> </i>
	<?php if ($soci_item['sesso'] == 'Maschio') {
		echo 'Nato';
		} else { 
		echo 'Nata';
		}?>
	il: </span><?php echo $soci_item['data_nascita'].' a '.$soci_item['luogo_nascita']?></p>
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