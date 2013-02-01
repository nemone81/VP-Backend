


<!-- BEGIN PAGE CONTENT-->


<div id="page">
   <div class="row-fluid">
      <div class="span12">
         <!-- BEGIN SAMPLE FORM PORTLET-->	
         <div class="widget">
            <div class="widget-title">
               <h4><i class="icon-plus"> </i>Aggiungi abbonamento</h4>
            </div>
            <div class="widget-body form">
				<!-- BEGIN FORM-->
				
				             <?php echo validation_errors(); 
             		$attributes = array('class' => 'form-horizontal');
             		echo form_open('abbonamenti/create', $attributes); ?>


				 <p style="font-size: 15px;margin-left: 132px;"> Socio &nbsp 
				 	<?php echo ($_GET['nome']).' '.($_GET['cognome'])?>
				 </p>
				
				 <p style="font-size: 15px;margin-left: 112px;"> Tipologia &nbsp
				 	<?php echo $tipologia[$_GET['tipo']] ?>
				 </p>

				<div class="control-group">
				 <label class="control-label" >Abbonamento</label>
				 <div class="controls">
				    <select class="span2" id="abbonamento" data-placeholder="Scegli Abbonamento" tabindex="1" name="abbonamento">
						<option value="I">Iscrizione</option>
						<option value="K">Carnet</option>
						<option value="M">Mensile</option>
						<option value="T">Trimestrale</option>
						<option value="A">Annuale</option>
					</select>
				 </div>
				</div>
				
				<div class="control-group" id="corso" style="display:none">
				 <label class="control-label" >Modalità</strong>
				</label>
				 <div class="controls">
				    <select class="span2" data-placeholder="Scegli Tipologia" tabindex="1" name="tipologia">
						<option value="N">Senza Corso</option>
						<option value="C">Con Corso</option>
					</select>
				 </div>
				</div>
				
				<input type="hidden" name="slug" value="<?php //echo $soci_item['tipo']?>" />
				

				<div class="control-group">
				 <label class="control-label" >Scadenza</label>
				 <div class="controls">
				    <select class="span2" data-placeholder="Scegli Tipologia" tabindex="1" name="data_scadenza_mese">
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
					<input class="input-small" size="16" type="text" value="<?php echo date('Y', time());?>" name="data_scadenza_anno" data-date-format="yyyy"/>
				 </div>
                  
				<div class="control-group">
				 <label class="control-label" >Data di acquisto</label>
				 <div class="controls">
				    <input class="input-small date-picker" size="16" type="text" value="<?php echo date('Y-m-d', time());?>" name="data_acquisto" data-date-format="yyyy-mm-dd"/>
				 </div>
				</div>			
				
				<div class="control-group">
				 <label class="control-label" for="inputRemarks">Note</label>
				 <div class="controls">
				    <textarea class="span6" rows="3" id="inputRemarks" name="note"></textarea>
				 </div>
				</div>
				                      
				<div class="form-actions">
				 <button type="submit" class="btn btn-primary">Salva</button>
                 <button type="button" class="btn" onclick="location.href='<?php echo base_url('index.php/soci/'.($_GET['slug']))?>'">Cancel</button>
				</div>
                
                <input type="hidden" name="id_socio" value="<?php echo ($_GET['id_socio'])?>" />
                <input type="hidden" name="tipo" value="<?php echo ($_GET['tipo'])?>" />

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













