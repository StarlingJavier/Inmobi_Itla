

<footer>
			<div class="agileits-footer-bottom text-center">
				<div class="container">
					
						<h1><a href="index.html"><span> INMOBI_ITLA</span></a></h1>
					
					<div class="w3-footer-social-icons">
						<ul>
							<li><a class="facebook" href="https://www.facebook.com/"><i class="fa fa-facebook" aria-hidden="true"></i><span>Facebook</span></a></li>
							<li><a class="twitter" href="https://twitter.com/"><i class="fa fa-twitter" aria-hidden="true"></i><span>Twitter</span></a></li>
							<li><a class="googleplus" href="https://plus.google.com/u/0/102761518872558408362"><i class="fa fa-google-plus" aria-hidden="true"></i><span>Google+</span></a></li>
							
						</ul>
					</div>
					<div class="copyrights">
						<p> © Informatik . All Rights Reserved | Design by  <a href="http://w3layouts.com/"> TEAM Bonao</a></p>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</footer>
        <!--footer section end-->
</body>
		<!-- Navigation-JavaScript -->
			<script src="<?php echo base_url('js/classie.js'); ?>"></script>
			<script src="<?php echo base_url('js/main.js'); ?>"></script>
		<!-- //Navigation-JavaScript -->
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
			<!-- start-smoth-scrolling -->
			<script type="text/javascript" src=" <?php echo base_url('js/move-top.js'); ?>"></script>
			<script type="text/javascript" src=" <?php echo base_url('js/easing.js'); ?>"></script>
			<script type="text/javascript" src="<?php echo base_url('js/imagenes.js');?>"></script>
			<script type="text/javascript">
				jQuery(document).ready(function($) {
					$(".scroll").click(function(event){		
						event.preventDefault();
						$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
					});
				});
			</script>
			<!-- start-smoth-scrolling -->
		<!-- //here ends scrolling icon -->
</html>


