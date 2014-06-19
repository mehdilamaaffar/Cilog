<html>
<head>
	<title>cilog.com</title>
	<link rel="stylesheet" href="<?php echo css_url('bootstrap.min'); ?>"/>
</head>
<body>
	<div class="container">
		<div class="col-xl-12">
				<div class="">
					<h2><?php $post['name']; ?></h2>
					<small>date: <?php echo $post['date']; ?> - author: <div class="label label-default"><?php echo $post['author']; ?></div></small>
					<p><?php echo $post['content']; ?></p>
					<small><?php echo $post['tag']; ?></small>
				</div>
		</div>
	</div>
</body>
</html>