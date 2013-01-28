						<div style="float:left">
							<p><i class="fntsz14 icon-list-alt"> </i>Tessera n°: <?php echo $soci_item['tessera']?></p>
							<p><i class="fntsz14 icon-tag"> </i>Tipologia: <?php 
							$tipologia = array (1 => 'Standard', 2 => 'Universitario', 3 => 'Bambino'); // spostare?
							echo $tipologia[$soci_item['tipo']] ?></p>
							<p><i class="fntsz14 icon-calendar"> </i>
							<?php if ($soci_item['sesso'] == 'Maschio') {
								echo 'Nato';
								} else { 
								echo 'Nata';
								}?>
							il: <?php echo $soci_item['data_nascita'].' a '.$soci_item['luogo_nascita']?></p>
							<p><i class="fntsz14 icon-heart"> </i>Sesso: <?php echo $soci_item['sesso']?></p>
							<p><i class="fntsz14 icon-edit"> </i>Note: <?php echo $soci_item['note']?></p>
						</div>
						<div style="float:left; margin-left:100px">
							<p><i class="fntsz14 icon-envelope"> </i>Email: <a href="mailto:<?php echo $soci_item['email']?>"><?php echo $soci_item['email']?></a></p> 
							<p><i class="fntsz14 icon-phone"> </i>Tel: <?php echo $soci_item['telefono']?></p>
							<p><i class="fntsz14 icon-map-marker"> </i>Residenza: <?php echo $soci_item['indirizzo_residenza'].' - '.$soci_item['comune_residenza']?></p>
							<p><i class="fntsz14 icon-edit"> </i>Creazione scheda: <?php echo $soci_item['data_creazione']?></p>
							<p><i class="fntsz14 icon-pencil"> </i>Ultima modifica scheda: <?php echo $soci_item['data_modifica']?></p>
						</div>