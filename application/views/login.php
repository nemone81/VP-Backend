<body>
  <!-- BEGIN LOGO -->
  <div id="logo" class="center">
    <img src="<?php echo base_url('assets/img/logo.png') ?>" alt="logo" class="center" /> 
  </div>
  <!-- END LOGO -->
  <!-- BEGIN LOGIN -->
  <div id="login">
    <!-- BEGIN LOGIN FORM -->
    
    <?php echo form_open('admin')?>
    
    <form id="loginform" class="form-vertical no-padding no-margin" action="http://www.eatvilla.co.uk/templates/conquer/index.html">
      <div class="control-group">
        <div class="controls">
          <div class="input-prepend">
				<?php echo form_label('', 'email_address')?>
				<span class="add-on"><i class="icon-mail"></i></span><?php echo form_input('email_address', '','placeholder="Email"','id="email_address"')?>          
				<?php echo form_error('email_address'); ?>	
         </div>
        </div>
      </div>
      <div class="control-group">
        <div class="controls">
          <div class="input-prepend">
				<?php echo form_label('', 'password')?>
				<span class="add-on"><i class="icon-lock"></i></span><?php echo form_password('password', '','placeholder="Password"','id="input-password"')?>    
				<?php echo form_error('password'); ?>			
          </div>
          <div class="clearfix space5"></div>
        </div>
      </div>
       <?php  $attributes = array('id' => 'login-btn', 'class' => 'btn btn-block btn-inverse', );
	       	echo form_submit('submit', 'Login', $attributes); ?>

    <!-- END LOGIN FORM -->        

    <?php echo form_close();?>
    <?php echo validation_errors(); ?>			

  </div>
  <!-- END LOGIN -->




	


		

