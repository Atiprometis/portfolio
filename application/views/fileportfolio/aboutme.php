<!DOCTYPE html>
<html lang="en">
<head>
  
   
<?php echo link_tag('assets/css/aboutme.css');?>
</head>
<body>
 <div class="container">
<div class="wrapper-aboutme">
    <div class=" d-flex wrapper-introduce">
        <div class="d-flex align-items-center introduce">
            <div class="text-introduce d-flex p-3 flex-column">
                    <p>Hi, I'm Chaitawat,</p>
                    <p>Web developer in Thailand,</p>
                    <p>I create a website with my style concept.</p>
            </div>
        </div>
        <div class="d-flex align-items-center p-3 introduce-img rellax">
            <img src="<?php echo base_url("assets/img/img1.jpg")?>" class="rellax" data-rellax-speed="6">
        </div>
    </div>
 </div>
 </div>

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