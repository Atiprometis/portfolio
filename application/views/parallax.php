<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Parallax Scrolling Effect</title>

<?php  echo link_tag('assets/css/style.css')?>

</head>
<body>

<div id="container" class="container">
		<div id="scene" class="scene">
    
			<div data-depth="1.00"><img src="<?php echo base_url("/assets/img/img1.jpg")?>"></div>
			<div data-depth="0.80"><img src="<?php echo base_url("/assets/img/layer2.png")?>"></div>
			<div data-depth="0.60"><img src="<?php echo base_url("/assets/img/layer3.png")?>"></div>
			<div data-depth="0.40"><img src="<?php echo base_url("/assets/img/layer4.png")?>"></div>
			<div data-depth="0.20"><img src="<?php echo base_url("/assets/img/layer5.png")?>"></div>
			<div data-depth="0.00"><img src="<?php echo base_url("/assets/img/layer6.png")?>"></div>
		</div>
  </div>

  <script>

	// Pretty simple huh?
	var scene = document.getElementById('scene');
	var parallax = new Parallax(scene);
  </script>
  
</body>

</html>