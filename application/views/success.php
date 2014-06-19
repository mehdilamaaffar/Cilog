<html>
<head>
	<title>success</title>
</head>
<body>
	<div class="container">
	<div class="row">
		<div class="col-xs-2"></div>
		<div class="col-xs-8">
			<div class="alert alert-success">
				<br><br><br>
				<h3><center><?php echo $message; ?></center></h3>
				<?php echo redirect($url); ?>
			</div>
		</div>
		<div class="col-xs-2"></div>
	</div>
	</div>	
</body>
</html>