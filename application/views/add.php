<?php 
$login = ($this->session->userdata('login') == true) ? '' : redirect(base_url());
echo validation_errors(); 
?>

		<form class="form-horizontal" role="form" action="<?php echo base_url();?>home/add" method="post">
			<div class="form-group">
				<label class="control-label" for="Name">Name</label>
				<input type="text" class="form-control" name="name" value="<?php echo set_value('name'); ?>" placeholder="name">
			</div>
			<div class="form-group">
			<label class="control-label" for="Content">Content</label>
			<textarea id="editor" name="content" class="form-control" rows="3" value="<?php echo set_value('content'); ?>" placeholder="content"></textarea>
			</div>
			<div class="form-group">
				<label class="control-label" for="Tag">Tag</label>
				<input type="text" class="form-control" name="tag" value="<?php echo set_value('tag'); ?>" placeholder="tag">
			</div>
			<div class="form-group">
		      <button type="submit" class="btn btn-default">POST IT!</button>
		  </div>
		</form>
	</div>
	<script type="text/javascript" src="<?php echo base_url().'assets\ckeditor\ckeditor.js'; ?>"></script>
	<script>CKEDITOR.replace( 'editor' );</script>
