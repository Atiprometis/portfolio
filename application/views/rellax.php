<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <?php  echo link_tag('assets/css/style.css')?>

</head>
<body>
    
<div class="rellax dd1" >
  I’m slow and smooth
</div>

<div class="rellax dd2" data-rellax-speed="6">
  I’m slow and smooth
</div>


<div class="rellax dd2" data-rellax-speed="2">gor ma di kub</div>

<script type="text/javascript" src="<?php echo base_url("assets/js/rellax.js")?>"></script> 
<script>
    //  rellax js   
    	var rellax = new Rellax('.rellax', {
        // center: true
        callback: function(position) {
            // callback every position change
            console.log(position);
        }
      });

</script>


</body>
</html>