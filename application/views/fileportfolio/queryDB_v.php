<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>QueryDB</title>
</head>
<body>
    
<?php foreach($query AS $rs) ?>

<?php echo "<br/>".$rs['name'] ?>

<?php endforeach; ?>



</body>
</html>