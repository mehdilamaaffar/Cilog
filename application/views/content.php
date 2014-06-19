			<div class="col-xs-8">
				<?php foreach ($posts as $row):?>
					<div class="">
						<h2><a href="<?php echo base_url().'home/post/'.$row['id']; ?>"><?php echo $row['name'] ?></a></h2>
						<strong>by</strong> : <a href="<?php echo base_url().'user/id/1'; ?>"><?php echo $row['author']; ?></a>
						<p><span class="glyphicon glyphicon-time"></span> Posted on <?php  echo $row['date']; ?></p>
						<p><?php  echo $row['content']; ?></p>
						<small>Tag : <div class="label label-default"><?php  echo $row['tag']; ?></div></small>
					</div>
					<br>
					<a href="" class="btn btn-default btn-sm">Read more...</a>
					<hr>
					<br>
				<?php endforeach; ?>
				<center>
					<?php echo $pagination; ?>
				</center>
			</div>