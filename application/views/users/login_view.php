<h2>Login Form</h2>

<?php // Open the form and close it on the login view page ?>

<?php $attributes = array('id' => 'login_form', 'class' => 'form_horizontal') ?>

<?php if($this->session->flashdata('errors')): ?>

<?php echo $this->session->flashdata('errors');?>

<?php endif; ?>

<?php echo form_open('users/login', $attributes); ?>


<div class="form-group">
	<?php echo form_label("Username"); ?>

	<?php  
		$data = array(
			'class' => 'form-control',
			'name' => 'username',
			'placeholder' => 'Enter Username',
			);
	
	// Apply values to form
	 echo form_input($data); 


	 ?>

</div>

<div class="form-group">
	<?php echo form_label("Password"); ?>

	<?php  
		$data = array(
			'class' => 'form-control',
			'name' => 'password',
			'placeholder' => 'Enter Password',
			);
	
	// Apply values to form
	 echo form_password($data); 


	 ?>

</div>


<div class="form-group">


	<?php  
		$data = array(
			'class' => 'btn btn-primary',
			'name' => 'submit',
			'value' => 'Login',
			);
	
	// Apply values to form
	 echo form_submit($data); 


	 ?>

</div>










<?php echo form_close(); ?>

















