<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Parallax Scrolling Effect</title>

  
 

<!-- <?php echo link_tag('assets/js/parallax.js')?> -->
<?php  echo link_tag('assets/css/style.css')?>

<style>
  div {
    color: blue;
  }
  p {
    color: green;
  }
  span {
    color: red;
    display: none;
  }
  </style>

</head>
<body>
  <div id="madi"></div>
<button id="clickme"> click ma
        
</button>
<img src="<?php echo base_url("assets/img/img1.jpg") ?>" id="book"
width="100" height="123" style="position: relative; left: 10px;"
>

<div>Try scrolling the iframe.</div>
<p>Paragraph - <span>Scroll happened!</span></p>

</body>
<script>

$("#clickme").click(function(){
  $("#book").animate({
    opaciry: 0.25,
    left: "+=50",
    height: "1000px"
  }, 1000, function(){

  });
});

$( "p" ).clone().appendTo( document.body );
$( "p" ).clone().appendTo( document.body );
$( "p" ).clone().appendTo( document.body );
// $( window ).scroll(function() {
//   $( "span" ).fadeIn("slow");

// });

$(document).ready(function(){
    $(window).bind('mousewheel', function(e){
        if(e.originalEvent.wheelDelta /120 > 0) {
            console.log('scrolling up !');
            $( "span" ).fadeOut("slow");
        }
        else{
            console.log('scrolling down !');
            $( "span" ).fadeIn("slow");
        }
    });
});

$(window).scroll(function(){
  $("#madi")
});


</script>


</html>