<!DOCTYPE html>
<html lang="en">
<head>
  
   
<?php echo link_tag('assets/css/aboutme.css');?>
</head>
<body>

<div class="wrapper-aboutme d-flex">
    <div class="wrapper-introduce d-flex align-items-center ">
        <div class="d-flex align-items-center justify-content-center introduce ">
            <div class="rellax  flex-column   text-introduce">
                    <h2>Hi, I'm Chaitawat,</h2>
                    <p>Web developer in Thailand,</p>
                    <p>I create a website with my style concept.</p>
            </div>
        </div>
        
        <div class="rellax introduce-img  "></div>
        <!-- <img src="<?php echo base_url('assets/img/camera1.png'); ?>" class="rellax  image-introduce-img" data-rellax-speed="1"> -->
        
    </div>
</div>
<div class="about-skill d-flex align-items-end justify-content-end">
    <div class="spac-skill"></div>
    <div class="rellax text-skill justify-content-start">
        <span>Skill</span>
        <p>I have knowledge about designand coding</p>
    </div>
</div>
<div class="rellax line-bot-skill "></div>

    <div class="rellax all-skills d-flex flex-column align-items-start justify-content-end">
        
        <span>HTML / CSS / JAVASCRIPT / JQUERY / PHP / MYSQL   </span>
        <span>Adobe Photoshop / Adobe Illustrator / Adobe after effects / Adobe XD</span>
        <span>REACT / C# / VUE / FIREBASE </span>
        <span>3Ds max / Sketchup / Unity</span>
    </div>
<div class="rellax line-bot-all-skill"></div>

 <script type="text/javascript" src="<?php echo base_url("assets/js/rellax.js")?>"></script> 
<script>
    //  rellax js   
    	var rellax = new Rellax('.rellax', {
        // center: true
        rellax.destroy();
        // callback: function(position) {
        //     // callback every position change
        //     console.log(position);
        // }
      });

</script>

</body>
</html>