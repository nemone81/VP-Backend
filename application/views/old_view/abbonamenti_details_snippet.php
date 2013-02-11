<div style="float:left; margin-rigth:100px">
	<p><i class="icon-list-alt"> </i>Socio: <?php echo $nome_soci[$abbonamenti_item['id_socio']]?></p>
	<p><i class="icon-list-alt"> </i>Abbonamento: <?php echo $nome_abbonamenti[$abbonamenti_item['codice_abbonamento']] ?></p>
	<p><i class="icon-edit"> </i>Note: <?php echo $abbonamenti_item['note']?></p>
</div>
<div style="float:left; ">
	<p><i class="icon-calendar"> </i>Scadenza: <?php echo substr($abbonamenti_item['scadenza'],0,10)?></p>
	<p><i class="icon-edit"> </i>Data Acquisto: <?php echo $abbonamenti_item['data_acquisto']?></p>
	<p><i class="icon-pencil"> </i>Ultima modifica: <?php echo $abbonamenti_item['data_modifica']?></p>
</div>