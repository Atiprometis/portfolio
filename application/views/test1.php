<!DOCTYPE html>
<html lang="en">
<head>
    
    
    <?php  echo link_tag('assets/css/styletest1.css')?>

</head>

<body>
    

<div id="pinContainer">
	<section class="panel blue">
		<b>ONE</b>
	</section>
	<section class="panel turqoise">
		<b>TWO</b>
	</section>
	<section class="panel green">
		<b>THREE</b>
	</section>
	<section class="panel bordeaux">
		<b>FOUR</b>
	</section>
</div>

<script>
	$(function () { // wait for document ready
		// init
		var controller = new ScrollMagic.Controller();

		// define movement of panels
		var wipeAnimation = new TimelineMax()
			.fromTo("section.panel.turqoise", 1, {x: "-100%"}, {x: "0%", ease: Linear.easeNone})  // in from left
			.fromTo("section.panel.green",    1, {x:  "100%"}, {x: "0%", ease: Linear.easeNone})  // in from right
			.fromTo("section.panel.bordeaux", 1, {y: "-100%"}, {y: "0%", ease: Linear.easeNone}); // in from top

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

<script type="text/javascript" src="<?php echo base_url("asset/js/tracking.js")?>"></script>

</body>
</html>