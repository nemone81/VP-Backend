<!-- BEGIN PAGE CONTENT-->
<div id="page">
   <div class="row-fluid">
      <div class="span12">
         <!-- BEGIN SAMPLE FORM PORTLET-->	
         <div class="widget">
            <div class="widget-title">
               <h4><i class="icon-plus"> </i>Aggiungi Socio</h4>
            </div>
            <div class="widget-body form">
             <!-- BEGIN FORM-->
              <?php $attributes = array('class' => 'form-horizontal');
	              echo form_open('soci/create', $attributes); ?>
			
                  <div class="control-group">
                     <label class="control-label" for="nome">Nome</label>
                     <div class="controls">
                        <input type="text" class="span3" id="input1" name="nome" placeholder="Obbligatorio"/>
                     </div>
                     <div class="control-group error">
            	         <?php echo form_error('nome','<span class="help-inline">','</span>'); ?>
            	     </div>
                  </div>
                                                
                  <div class="control-group">
                     <label class="control-label" for="cognome">Cognome</label>
                     <div class="controls">
                        <input type="text" class="span4" id="input1" name="cognome" placeholder="Obbligatorio"/>
                     </div>
                     <div class="control-group error">
                     <?php echo form_error('cognome','<span class="help-inline">','</span>'); ?>
            	     </div>
                  </div>
                  
                  <div class="control-group">
                     <label class="control-label" for="tessera">Numero Tessera</label>
                     <div class="controls">
                     	<input type="text" class="span1 popovers" id="input3" data-trigger="hover" data-content="Il campo è prepolato con il numero della prima tessera disponibile." data-original-title="Numero Tessera" name="tessera" value=" <?php  echo($Ntessera + 1); ?>" />
                     </div>
                  </div>

                  <div class="control-group">
                     <label class="control-label" >Tipologia</label>
                     <div class="controls">
                        <select class="span2" data-placeholder="Scegli" tabindex="1" name="tipo">
                           <option value="S">Standard</option>
                           <option value="U">Universitario</option>
                           <option value="B">Bambino</option>
                        </select>
                     </div>
                  </div>
                  
                  <div class="control-group">
                     <label class="control-label" >Data di Nascita</label>
                     <div class="controls">
                        <input class="input-medium date-picker" size="16" type="text" value="1981-12-12" name="data_nascita" data-date-format="yyyy-mm-dd"/>
                     </div>
                  </div>
                  

                  <div class="control-group">
                     <label class="control-label" for="cognome">Luogo di Nascita</label>
                     <div class="controls">
                        <input type="text" class="span4" id="input1" name="luogo_nascita"/>
                     </div>
                  </div>
                  
                  <div class="control-group">
                     <label class="control-label" for="cognome">Comune di Residenza</label>
                     <div class="controls">
                        <input type="text" class="span3" id="input1" name="comune_residenza"/>
                     </div>
                  </div>
                  
                  <div class="control-group">
                     <label class="control-label" for="cognome">Indirizzo di Residenza</label>
                     <div class="controls">
                        <input type="text" class="span4" id="input1" name="indirizzo_residenza"/>
                     </div>
                  </div>
                  
                  <div class="control-group">
                     <label class="control-label" for="input7">Email</label>
                     <div class="controls">
                        <div class="input-prepend ">
                           <span class="add-on">@</span><input class="input-medium span12" id="input7" type="text" placeholder="Indirizzo Email" name="email"/>			 
                        </div>
                     </div>
                  </div>
                  
                                                
                  <div class="control-group">
                     <label class="control-label" for="input6">Telefono</label>
                     <div class="controls">
                        <input type="text" class="span3" id="input6" name="telefono"/>
                     </div>
                  </div>
                  
                  <div class="control-group">
                     <label class="control-label" >Sesso</label>
                     <div class="controls">
                        <select class="span2" data-placeholder="Scegli" tabindex="1" name="sesso"/>
                           <option value="Maschio">Maschio</option>
                           <option value="Femmina">Femmina</option>
                        </select>
                     </div>
                  </div>
                  
                  <div class="control-group">
                     <label class="control-label" >Certificato Medico</label>
                     <div class="controls">
                        <input class="input-medium date-picker" size="16" type="text" value="" placeholder="Data di scadenza" name="certificato_medico" data-date-format="yyyy-mm-dd"/>
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
                     <button type="button" class="btn" onclick="location.href='<?php echo base_url('index.php/soci/') ?>'">Cancel</button>
                  </div>
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













