<!DOCTYPE html>
<html lang="en">
<head>
    
    <?php echo link_tag('assets/css/banners-top.css');?>
    <!-- <?php  echo link_tag('assets/css/examples.css');?> -->

</head>
<body>
  
<div id="example-wrapper">
    <div  class="scrollContent">
        <section id="section-wipes">
        <div id="pinContainer">
            <section class="panel bb">
                <div class="banners-wrapper">    
                            <div class="banners" >        
                                    <h1  class="text-top " data-text="Hi. My name is Chaitawat">Hi. My name is Chaitawat</h1>   
                            </div>
                </div>
            </section>
            <section class="panel banner">
                <div class="banners-wrapper">    
                            <div class="banners " >        
                                    <h1  class="text-top " data-text="i don't know what to do">i don't know what to do </h1>   
                            </div>
                </div>
            </section>
           
        </div>
        </section>
    </div>
</div>




<script>
						$(function () { // wait for document ready
							// init
							var controller = new ScrollMagic.Controller();

							// define movement of panels
							var wipeAnimation = new TimelineMax()
								 // in from left
                                 
                                  .fromTo("section.panel.banner", 1, {x: "100%",opacity: "1"}, {x: "0%", ease: Linear.easeNone,opacity: "1"})
                                  .fromTo("section.panel.loadbg", 1, {x: "0%",opacity: "0"}, {x: "0%", ease: Power3.easeOut,opacity: "1"});
								

							// create scene to pin and link animation
							new ScrollMagic.Scene({
									triggerElement: "#pinContainer",
									triggerHook: "onLeave",
									duration: "300%"
								})
								.setPin("#pinContainer")
								.setTween(wipeAnimation)
								.addIndicators() // add indicators (requires plugin)
								.addTo(controller);
						});
</script>



<script type="text/javascript" src="<?php echo base_url("assets/js/tracking.js")?>"></script>
<!-- <script type="text/javascript" src="<?php echo base_url("assets/js/rellax.js")?>"></script>  -->
</body>
</html>

