<?php echo validation_errors(); ?>
<form action="<?php echo base_url().'user/login'; ?>" method="post">
	<div class="form-group">
		<label for="username">Username</label>
		<input type="text" class="form-control" name="username" value="<?php echo set_value('username'); ?>" placeholder="Username">
	</div>
	<div class="form-group">
		<label for="password">Password</label>
		<input type="password" class="form-control" name="password" value="<?php echo set_value('password'); ?>" placeholder="Password">
	</div>
	<button class="btn btn-default" type="submit">login</button>
</form>