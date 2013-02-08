            <!-- BEGIN PAGE CONTENT-->
            <div id="page">
               <div class="row-fluid">
                  <div class="span12">
                     <!-- BEGIN SAMPLE FORM PORTLET-->	
                     <div class="widget">
                        <div class="widget-title">
                           <h4><i class="icon-edit"> </i><?php
                                $value = (is_array($soci_item) && isset($soci_item['nome']) ? "Modifica dati:" : "Aggiungi Socio:");
                                echo($value);                                    
                            	?>
                            </h4>
                        </div>
                        <div class="widget-body form">
                           <!-- BEGIN FORM-->
                           
								<?php $attributes = array('class' => 'form-horizontal');
									if (is_array($soci_item) && isset($soci_item['nome'])) {
											echo form_open('soci/edit/'.$soci_item['id'], $attributes); // Edit
										} else {
											echo form_open('soci/create', $attributes); // Create
										};
								?>

                              <div class="control-group">
                                 <label class="control-label" for="nome">Nome</label>
                                 <div class="controls">
                                    <input type="text" class="span3" id="input1" name="nome" value="<?php
	                                    $value = (is_array($soci_item) && isset($soci_item['nome']) ? ($soci_item['nome']) : "");
	                                    echo($value);                                    
                                    	?>" />
                                 </div>
			                     <div class="control-group error">
			            	         <?php echo form_error('nome','<span class="help-inline">','</span>'); ?>
			            	     </div>
                              </div>
                                                            
                              <div class="control-group">
                                 <label class="control-label" for="cognome">Cognome</label>
                                 <div class="controls">
                                    <input type="text" class="span4" id="input1" name="cognome" value="<?php
	                                    $value = (is_array($soci_item) && isset($soci_item['cognome']) ? ($soci_item['cognome']) : "");
	                                    echo($value);
                                    	?>" />
                                   </div>
			                     <div class="control-group error">
				                     <?php echo form_error('cognome','<span class="help-inline">','</span>'); ?>
			            	     </div>                                 
                              </div>
                              
			                  <div class="control-group">
			                     <label class="control-label" for="tessera">Numero Tessera</label>
			                     <div class="controls">
			                     	<input type="text" class="<?php 
	                                    $class = (is_array($soci_item) && isset($soci_item['tessera']) ? 'span1' : 'span1 popovers');
	                                    echo($class);
                                    	?>" id="input3" data-trigger="hover" data-content="Il campo è prepolato con il numero della prima tessera disponibile." data-original-title="Numero Tessera" name="tessera" value="<?php 
	                                    $value = (is_array($soci_item) && isset($soci_item['tessera']) ? ($soci_item['tessera']) : ($Ntessera + 1));
	                                    echo($value);
                                    	?>" /> 	
			                     </div>			                     
			                  </div>                              
                              
                              <div class="control-group">
                                 <label class="control-label" >Tipo</label>
                                 <div class="controls">
                                    <select class="span2" data-placeholder="Scegli" tabindex="1" name="tipo" id="tipo">
                                       <option value="S">Standard</option>
                                       <option value="U">Universitario</option>
                                       <option value="B">Bambino</option>
                                    </select>
                                 </div>
                              </div>
                              
                              <div class="control-group">
                                 <label class="control-label" >Data di Nascita</label>
                                 <div class="controls">
                                    <input class="input-small date-picker" size="16" type="text" name="data_nascita" data-date-format="yyyy-mm-dd" value="<?php 
	                                    $value = (is_array($soci_item) && isset($soci_item['data_nascita']) ? ($soci_item['data_nascita']) : "");
	                                    echo($value);                                    
	                                    ?>"  />
                                 </div>
                              </div>

                              <div class="control-group">
                                 <label class="control-label" for="cognome">Luogo di Nascita</label>
                                 <div class="controls">
                                    <input type="text" class="span4" id="input1" name="luogo_nascita" value="<?php 
	                                    $value = (is_array($soci_item) && isset($soci_item['luogo_nascita']) ? ($soci_item['luogo_nascita']) : "");
	                                    echo($value);                                    
	                                    ?>"  />                                    
                                 </div>
                              </div>
                              
                              <div class="control-group">
                                 <label class="control-label" for="cognome">Comune di Residenza</label>
                                 <div class="controls">
                                    <input type="text" class="span3" id="input1" name="comune_residenza" value="<?php 
	                                    $value = (is_array($soci_item) && isset($soci_item['comune_residenza']) ? ($soci_item['comune_residenza']) : "");
	                                    echo($value);                                    
	                                    ?>"  />                                        
                                 </div>
                              </div>
                              
                              <div class="control-group">
                                 <label class="control-label" for="cognome">Indirizzo di Residenza</label>
                                 <div class="controls">
                                    <input type="text" class="span4" id="input1" name="indirizzo_residenza" value="<?php 
	                                    $value = (is_array($soci_item) && isset($soci_item['indirizzo_residenza']) ? ($soci_item['indirizzo_residenza']) : "");
	                                    echo($value);                                    
	                                    ?>"  />                                        
                                 </div>
                              </div>
                              
                              <div class="control-group">
                                 <label class="control-label" for="input7">Email</label>
                                 <div class="controls">
                                    <div class="input-prepend ">
                                       <span class="add-on">@</span><input class="input-medium span12" id="input7" type="text" placeholder="Indirizzo Email" name="email" value="<?php 
	                                    $value = (is_array($soci_item) && isset($soci_item['email']) ? ($soci_item['email']) : "");
	                                    echo($value);                                    
	                                    ?>"  />                                           		 
                                    </div>
                                 </div>
                              </div>
                              
                              <div class="control-group">
                                 <label class="control-label" for="input6">Telefono</label>
                                 <div class="controls">
                                    <input type="text" class="span3" id="input6" name="telefono" value="<?php 
	                                    $value = (is_array($soci_item) && isset($soci_item['telefono']) ? ($soci_item['telefono']) : "");
	                                    echo($value);                                    
	                                    ?>"  />                                        
                                 </div>
                              </div>
                              
                              <div class="control-group">
                                 <label class="control-label" >Sesso</label>
                                 <div class="controls">
                                    <select class="span2" data-placeholder="Scegli" tabindex="1" name="sesso" id="sesso"/>
                                       <option value="Maschio">Maschio</option>
                                       <option value="Femmina">Femmina</option>
                                    </select>
                                 </div>
                              </div>
                              
			                  <div class="control-group">
			                     <label class="control-label" >Certificato Medico</label>
			                     <div class="controls">
			                        <input class="input-small date-picker" size="16" type="text" value="<?php 
	                                    $value = (is_array($soci_item) && isset($soci_item['certificato_medico']) ? ($soci_item['certificato_medico']) : "");
	                                    echo($value);                                    
	                                    ?>" name="certificato_medico" data-date-format="yyyy-mm-dd"/>
			                     </div>
			                  </div>
                              
                              
                              <div class="control-group">
                                 <label class="control-label" for="inputRemarks">Note</label>
                                 <div class="controls">
                                    <textarea class="span6" rows="3" id="inputRemarks" name="note" /><?php 
	                                    $value = (is_array($soci_item) && isset($soci_item['luogo_nascita']) ? ($soci_item['luogo_nascita']) : "");
	                                    echo($value);                                    
	                                    ?></textarea>
                                 </div>
                              </div>

                              <div class="form-actions">
                                 <button type="submit" class="btn btn-primary">Salva</button>
                                  <button type="button" class="btn" onclick="location.href='<?php
									if (is_array($soci_item) && isset($soci_item['nome'])) {
											echo base_url('index.php/soci/'.$soci_item['id']); // Edit
										} else {
											echo base_url('index.php/soci/'); // Create
										};
								?>'">Cancel</button>
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













