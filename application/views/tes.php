<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<?php foreach ($data->result() as $row) { ?>
		<h5><?= $row->nama?></h5>
		<h5><?= $row->nama_icon?></h5>
	<?php }?>
</body>
</html>
