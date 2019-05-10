<!DOCTYPE html>
<html lang="en">
<head>
    
    <?php echo link_tag('assets/css/banners-top.css');?>

</head>
<body>
    
<div class="banners-wrapper"> 
        <div class="banners">              
                <h1  class="text-top" data-text="Hi. My name is Chaitawat">Hi. My name is Chaitawat</h1>
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

