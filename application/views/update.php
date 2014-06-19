<?php 
$login = ($this->session->userdata('login') == true) ? '' : redirect(base_url());
echo validation_errors(); 
?>


<html>
<head>
	<title>add post</title>
	<link rel="stylesheet" href="<?php echo css_url('bootstrap.min'); ?>"/>
</head>
<body>
	<div class="container">
		<?php echo validation_errors(); ?>
		<form action="<?php echo base_url().'home/update/'. $posts['id']; ?>" method="post" role="form">
			<legend>Update Form</legend>
			<div class="form-group">
				<label for="Name">Name</label>
				<input type="text" name="name" class="form-control" value="<?php echo $posts['name']; ?>" placeholder="Name">
			</div>
			<div class="form-group">
				<label for="Author">Author</label>
				<input type="text" name="author" class="form-control" value="<?php echo $posts['author']; ?>" placeholder="Author">
			</div>
			<div class="form-group">
				<label for="Content">Content</label>
				<input type="text" name="content" class="form-control" value="<?php echo $posts['content']; ?>" placeholder="Content">
			</div>
			<div class="form-group">
				<label for="Tag">Tag</label>
				<input type="text" name="tag" class="form-control" value="<?php echo $posts['tag']; ?>" placeholder="Tag">
			</div>
			<button type="submit" name="submit" class="btn btn-primary">Submit</button>
		</form>
	</div>
</body>
</html>