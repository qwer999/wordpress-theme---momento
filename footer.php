


 <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.transform.js" type="text/javascript"></script>



<script>
 

$(window).load( function() {
  $(".menuIcon").animate( {opacity:1,}, 700 ).addClass( "slide", 1200, "easeOutBounce"); 
  $(".slideDiv").animate( {opacity:1,}, 300 ).addClass( "slide", 700, "easeOutQuad");

});



$(window).load( function() {
  $(".text_hello").delay(650).removeClass("slide", 600, "easeOutQuad"); 
  $(".text_logo").delay(900).animate({'transform': 'rotate(80deg)', opacity:1, marginLeft:'180px',}, 1200, "easeOutQuad");
  $(".text_wordpress").delay(750).removeClass( "slide", 600, "easeOutQuad"); 
  $(".text_minimal").delay(800).removeClass( "slide", 800, "easeOutQuad"); 
  $(".menuIcon").delay(00).addClass( "slide2", 1200, "easeOutBounce"); 

});




$(".nav-previous a").click( function() {
  $(".slideBox").animate({ opacity: 0, marginLeft: "+=200", }, 300, 'easeOutQuad');
  $(".box").removeClass( "box2", 1000, "easeOutQuad");
});



$(".nav-next a").click( function() {
  $(".slideBox").animate({ opacity: 0, marginLeft: "-200", }, 300, 'easeOutQuad');
  $(".box").removeClass( "box2", 1000, "easeOutQuad");
});



</script>


<?php wp_footer(); ?>
</body>
</html>