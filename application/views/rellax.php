<!DOCTYPE html>
<html lang="en">
<head>

    <?php  echo link_tag('assets/css/style.css')?>

</head>
<body>
    
<div class="rellax dd1" >
  I’m slow and smooth
</div>

<div class="rellax dd2" data-rellax-speed="6">
  I’m slow and smooth
</div>
<img src="<?php echo base_url('assets/img/img1.jpg'); ?>" class="rellax" data-rellax-speed="4">

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