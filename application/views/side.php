		<div class="col-xs-4">
			<div class="">
				<div class="well">
                <h4>Blog Search</h4>
                <form action="<?php echo base_url() . 'home/search/'. $this->input->post('data'); ?>" method="post">
                    <div class="input-group">
                        <input type="text" name="data" class="form-control" palceholder="insert the word">
                    </div>
                    <div class="input-group">
                        <button type="submit" name="search" class="btn btn-default">Search</button>
                    </div>
                </form>
                </div>
			</div>
			<div class="">
				<h2>Recent posts</h2>
                <ul>
                    <?php foreach($recent_posts as $post): ?>
                    <li><a href="<?php echo base_url().'home/post/' . $post['id']; ?>"><?php echo $post['name']; ?></a></li>
                    <?php endforeach; ?>
                </ul>
			</div>
			</div>