<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <?php echo link_tag('assets/css/banners-top.css');?>

</head>
<body>
    
<div class="banners-wrapper"> 
    
        <div class="banners">
                <span class="text">chaitawat</span>               
                <span class="gradient"></span>
                <span class="dot"></span>
        </div>
    
</div>


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

