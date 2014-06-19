<h2>welcome <?php echo '<a href="'. $session['session_id'] .'">'. $session["name"] .'</a>'; ?> to control panel</h2><hr>
<a href="<?php echo base_url().'home/add'; ?>" class="btn btn-primary"><div class="glyphicon glyphicon-plus"></div> Add post</a>
<a href="<?php echo base_url().'home/users'; ?>" class="btn btn-primary"><div class="glyphicon glyphicon-user"></div> Show users</a>
<a href="<?php echo base_url().'user/logout'; ?>" class="btn btn-primary"><div class="glyphicon glyphicon-off"></div> Logout</a><hr>
<div class="panel panel-default">
		<table class="table table-hover">
			<thead>
				<tr class="active">
					<td>Name</td>
					<td>Date</td>
					<td>Tag</td>
					<td>Action</td>
				</tr>
			</thead>
			<tbody>
			<?php foreach($posts as $post): ?>
			<tr>
				<td><a href="<?php echo base_url().'home/update/'.$post['id']; ?>"><?php echo  mb_substr($post['name'], 0, 100, 'utf-8').'...'; ?></a></td>
				<td><?php echo $post['date']; ?></td>
				<td><?php echo $post['tag']; ?></td>
				<td><a href="<?php echo base_url().'home/update/'.$post['id']; ?>"><div class="glyphicon glyphicon-pencil"></div></a><a href="<?php echo base_url().'home/delete/'.$post['id']; ?>"><div class="glyphicon glyphicon-remove"></div></a></td>
			</tr>
			<?php endforeach; ?>
			</tbody>
		</table>
</div>
</div>