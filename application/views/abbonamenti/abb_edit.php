<!-- BEGIN PAGE CONTENT-->
<div id="page">
   <div class="row-fluid">
      <div class="span12">
         <!-- BEGIN SAMPLE FORM PORTLET-->	
         <div class="widget">
            <div class="widget-title">
               <h4><i class="icon-edit"> </i>Modifica dati: <?php //echo $soci_item['nome'].' '.$soci_item['cognome']; ?></h4>
            </div>
            <div class="widget-body form">
                          
               <!-- BEGIN FORM-->
               
             <?php echo validation_errors(); 
             		$attributes = array('class' => 'form-horizontal');
             		echo form_open('abbonamenti/edit/'.$abbonamenti_item['id'].'/'.$abbonamenti_item['id_socio'], $attributes); ?>						
		
			<p style="font-size: 15px;margin-left: 124px;"> Socio &nbsp &nbsp 
			 	<?php echo $soci_item['nome'].' '.$soci_item['cognome']?>
			 </p>
			
			 <p style="font-size: 15px;margin-left: 103px;"> Tipologia &nbsp  &nbsp
			 	<?php echo $tipologia[$soci_item['tipo']]?>
			 </p>
			 
			<div class="control-group">
			 <label class="control-label" >Abbonamento</label>
			 <div class="controls">
			    <select class="span2" id="abbonamento" data-placeholder="Scegli Abbonamento" tabindex="1" name="abbonamento">
						<option value="M">Mensile</option>
						<option value="T">Trimestrale</option>
						<option value="A">Annuale</option>
						<option value="K">Carnet</option>
						<option value="I">Iscrizione</option>
				</select>
			 </div>
			</div>
			
			<div class="control-group" id="corso" style="display:none">
			 <label class="control-label" >Modalità</strong>
			</label>
			 <div class="controls">
			    <select class="span2" id="tipologia" data-placeholder="Scegli Tipologia" tabindex="1" name="tipologia">
						<option value="N">Senza Corso</option>
						<option value="C">Con Corso</option>
				</select>
			 </div>
			</div>
						
			<div class="control-group">
			 <label class="control-label" >Scadenza</label>
			 <div class="controls">
			    <select class="span2" id="data_scadenza_mese" data-placeholder="Scegli Tipologia" tabindex="1" name="data_scadenza_mese">
					<option value="01-31">Gennaio</option>
					<option value="02-29">Febbraio</option>
					<option value="03-31">Marzo</option>
					<option value="04-30">Aprile</option>
					<option value="05-31">Maggio</option>
					<option value="06-30">Giugno</option>
					<option value="07-31">Luglio</option>
					<option value="08-31">Agosto</option>
					<option value="09-30">Settembre</option>
					<option value="10-31">Ottobre</option>
					<option value="11-30">Novembre</option>
					<option value="12-31">Dicembre</option>
				</select>
				<input style="width: 40px;text-align: center;" size="16" type="text" value="<?php echo substr($abbonamenti_item['scadenza'], 0, 4)?>" name="data_scadenza_anno" data-date-format="yyyy-mm-dd"/>
			 </div>
		      <div style="clear:float;clear: both;margin-bottom: 17px;"></div>
			<div class="control-group">
			 <label class="control-label" >Data di acquisto</label>
			 <div class="controls">
			    <input class="input-small date-picker" maxlength="4" size="16" type="text" value="<?php echo $abbonamenti_item['data_acquisto']?>" name="data_acquisto" data-date-format="yyyy-mm-dd"/>
			 </div>
			</div>			
			
			<div class="control-group">
			 <label class="control-label" for="inputRemarks">Note</label>
			 <div class="controls">
			    <textarea class="span6" rows="3" id="inputRemarks" name="note"><?php echo $abbonamenti_item['note']?></textarea>
			 </div>
			</div>



				<div class="form-actions">
				 <button type="submit" class="btn btn-primary">Salva</button>
                 <button type="button" class="btn" onclick="location.href='<?php echo base_url('index.php/soci/'.$soci_item['id']) ?>'">Cancel</button>

				</div>
                
				<input type="hidden" name="id_socio" value="<?php echo $soci_item['id']?>" />
                <input type="hidden" name="tipo" value="<?php echo $soci_item['tipo']?>" />


		    
		
			</form>
		   <!-- END FORM-->				
</div>
<!-- END SAMPLE FORM PORTLET-->
</div>
      </div>

   </form>
   <!-- END FORM-->
</div>
</div>
<!-- END VALIDATION STATES-->


</div>
</div>





</div>






<!-- END PAGE CONTENT-->			
</div>
<!-- END PAGE CONTAINER-->
</div>
<!-- END PAGE -->  
</div>
<!-- END CONTAINER -->






