<?php echo validation_errors(); ?>
<form action="<?php echo base_url().'user/register'; ?>" method="post">
	<div class="form-group">
		<label for="username">Username</label>
		<input type="text" class="form-control" name="username" placeholder="Username">
	</div>
	<div class="form-group">
		<label for="email">Email</label>
		<input type="text" class="form-control" name="email" placeholder="Email">
	</div>
	<div class="form-group">
		<label for="password">Password</label>
		<input type="password" class="form-control" name="password" placeholder="Password">
	</div>
	<button class="btn btn-default" type="submit">login</button>
</form>