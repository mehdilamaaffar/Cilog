<?php 
$login = ($this->session->userdata('login') == true) ? '' : redirect(base_url());
echo validation_errors(); 
?>


<p class="alert alert-warning">
	do you want delete this post ?
	<a class="btn btn-default" href="<?php echo base_url().'home/delete/'.$id.'/confirmed'; ?>">Yes</a>
	<a class="btn btn-default" href="<?php echo base_url().'home/delete/'.$id.'/unconfirmed'; ?>">No</a>
</p>