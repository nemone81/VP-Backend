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
                           
							<?php echo validation_errors(); ?>
							<?php echo form_open('soci/edit/'.$soci_item['slug']) ?>
						
                              <div class="control-group">
                                 <label class="control-label" for="nome">Nome</label>
                                 <div class="controls">
                                    <input type="text" class="span3" id="input1" name="nome" value="<?php echo $soci_item['nome']?>" />
                                 </div>
                              </div>
                                                            
                              <div class="control-group">
                                 <label class="control-label" for="cognome">Cognome</label>
                                 <div class="controls">
                                    <input type="text" class="span4" id="input1" name="cognome" value="<?php echo $soci_item['cognome']?>" />
                                 </div>
                              </div>
                              
                              <div class="control-group">
                                 <label class="control-label" for="tessera">Numero Tessera</label>
                                 <div class="controls">
                                    <input type="text" class="span1" id="input1" name="tessera" value="<?php echo $soci_item['tessera']?>" />
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
                                    <input class="input-small date-picker" size="16" type="text" name="data_nascita" data-date-format="yyyy-mm-dd" value="<?php echo $soci_item['data_nascita']?>"  />
                                 </div>
                              </div>

                              <div class="control-group">
                                 <label class="control-label" for="cognome">Luogo di Nascita</label>
                                 <div class="controls">
                                    <input type="text" class="span4" id="input1" name="luogo_nascita" value="<?php echo $soci_item['luogo_nascita']?>" />
                                 </div>
                              </div>
                              
                              <div class="control-group">
                                 <label class="control-label" for="cognome">Comune di Residenza</label>
                                 <div class="controls">
                                    <input type="text" class="span3" id="input1" name="comune_residenza" value="<?php echo $soci_item['comune_residenza']?>"/>
                                 </div>
                              </div>
                              
                              <div class="control-group">
                                 <label class="control-label" for="cognome">Indirizzo di Residenza</label>
                                 <div class="controls">
                                    <input type="text" class="span4" id="input1" name="indirizzo_residenza" value="<?php echo $soci_item['indirizzo_residenza']?>"/>
                                 </div>
                              </div>
                              
                              <div class="control-group">
                                 <label class="control-label" for="input7">Email</label>
                                 <div class="controls">
                                    <div class="input-prepend ">
                                       <span class="add-on">@</span><input class="input-medium span4" id="input7" type="text" placeholder="Indirizzo Email" name="email" value="<?php echo $soci_item['email']?>" />			 
                                    </div>
                                 </div>
                              </div>
                              
                              <div class="control-group">
                                 <label class="control-label" for="input6">Telefono</label>
                                 <div class="controls">
                                    <input type="text" class="span3" id="input6" name="telefono" value="<?php echo $soci_item['telefono']?>" />
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
			                        <input class="input-small date-picker" size="16" type="text" value="<?php echo $soci_item['certificato_medico']?>" name="certificato_medico" data-date-format="yyyy-mm-dd"/>
			                     </div>
			                  </div>
                              
                              
                              <div class="control-group">
                                 <label class="control-label" for="inputRemarks">Note</label>
                                 <div class="controls">
                                    <textarea class="span6" rows="3" id="inputRemarks" name="note" /><?php echo $soci_item['note']?></textarea>
                                 </div>
                              </div>

                              <input type="hidden" name="slug" value="<?php echo $soci_item['slug']?>" />
                              <input type="hidden" name="edit" value="casa" />
                              
                              <div class="form-actions">
                                 <button type="submit" class="btn btn-primary">Salva</button>
                                 <button type="button" class="btn" onclick="location.href='<?php echo base_url('index.php/soci/'.$soci_item['slug']) ?>'">Cancel</button>
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













