<!-- footer -->
	<div class="footer">
		<div class="container">
			<div class="w3ls_footer_grid">
				<div class="col-md-6 w3ls_footer_grid_left">
					<div class="w3ls_footer_grid_left1">
						<h2>Subscribe to us</h2>
						<div class="w3ls_footer_grid_left1_pos">
							<form action="#" method="post">
								<input type="email" name="email" placeholder="Your email..." required="">
								<input type="submit" value="Send">
							</form>
						</div>
					</div>
				</div>
				<div class="col-md-6 w3ls_footer_grid_right">
					<a href="index.html"><h2>One<span>Movies</span></h2></a>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="col-md-5 w3ls_footer_grid1_left">
				<p>&copy; 2016 One Movies. All rights reserved | Design by <a href="http://w3layouts.com/">W3layouts</a></p>
			</div>
			<div class="col-md-7 w3ls_footer_grid1_right">
				<ul>
					<li>
						<a href="genres.html">Movies</a>
					</li>
					<li>
						<a href="faq.html">FAQ</a>
					</li>
					<li>
						<a href="horror.html">Action</a>
					</li>
					<li>
						<a href="genres.html">Adventure</a>
					</li>
					<li>
						<a href="comedy.html">Comedy</a>
					</li>
					<li>
						<a href="icons.html">Icons</a>
					</li>
					<li>
						<a href="contact.html">Contact Us</a>
					</li>
				</ul>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
<!-- //footer -->
<!-- Bootstrap Core JavaScript -->
<script src="<?php bloginfo('template_url') ?>/js/bootstrap.min.js"></script>
<script>
$(document).ready(function(){
    $(".dropdown").hover(            
        function() {
            $('.dropdown-menu', this).stop( true, true ).slideDown("fast");
            $(this).toggleClass('open');        
        },
        function() {
            $('.dropdown-menu', this).stop( true, true ).slideUp("fast");
            $(this).toggleClass('open');       
        }
    );
});
</script>
<!-- //Bootstrap Core JavaScript -->
<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>
<!-- //here ends scrolling icon -->

<script type="text/javascript">
	//  Función para buscar la clase en el elemento
HTMLElement.prototype.hasClass = function ( className ) {
  var rgx = new RegExp('(\\s|^)' + className + '(\\s|$)');
  var match = this.className.match( rgx );
  return ( match != null );
}
 
// Agrega una clase CSS al elemento
// @className es el nombre de la clase
HTMLElement.prototype.addClass = function( className ) {
    if (!this.hasClass(className))
      this.className += " " + className;
};
 
// Quita una clase CSS al elemento
// @className es el nombre de la clase
HTMLElement.prototype.removeClass = function( className ) {
  if (this.hasClass(className)) {
    var reg = new RegExp('(\\s|^)' + className + '(\\s|$)');
    this.className = this.className.replace(reg,' ');
  }
};

var a = document.getElementById('top-menu');
a.addClass( 'nav navbar-nav' );

var b = document.getElementById('menu-item-33');
b.addClass( 'active dropdown' );

$('.menu-item-has-children').addClass('dropdown-menu');
$('.dropdown-menu a').addClass('dropdown-toggle" data-toggle =" dropdown ');

$('sub-menu').addClass('dropdown-toggle');

var c = document.getElementsByClassName('menu-item-has-children');
c.addClass('dropdown-menu multi-column columns-3');
</script>

</body>
</html>