<h2>Login Form</h2>

<?php // Open the form and close it on the login view page ?>

<?php $attributes = array('id' => 'login_form', 'class' => 'form_horizontal') ?>
<?php echo form_open('users/login_view', $attributes); ?>


<div class="form-group">
	<?php echo form_label("Username"); ?>

	<?php form_input(); ?>
	
</div>










<?php echo form_close(); ?>

















