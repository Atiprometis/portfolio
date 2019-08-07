<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	
</head>
<body>
		<table>
		<?php foreach($results as $row){ ?>
			<tr>
				<td><?php echo $row->name?></td>
				
			</tr>
		<?php } ?>
		</table>
</body>
</html>
