<!--single-page-->

<?php 
$titulo=$_GET['titulo'];
$direccion=$_GET['direccion'];

$precio=$_GET['precio'];
$accion=$_GET['accion'];
$descripcion=$_GET['descripcion'];
$latitud=$_GET['latitud'];
$longitud=$_GET['longitud'];
$imagen=$_GET['imagen'];

?>
	<div class="single-page main-grid-border">
		<div class="container">
			<div class="product-desc">
				<div class="col-md-7 product-view">
					<h2><?php echo $titulo ?></h2>
					<p> <i class="glyphicon glyphicon-map-marker"></i><a href="#">Estado</a>, <a href="#">Direccion</a>| <?php echo $direccion ?></p>
					<div class="flexslider">
						<ul class="slides">
							<li data-thumb="<?php echo base_url("images/$imagen");?>">
								<img src="<?php echo base_url("images/$imagen");?>"/>
							</li>
							<li data-thumb="<?php echo base_url("images/$imagen");?>">
								<img src="<?php echo base_url("images/$imagen");?>" />
							</li>
							<li data-thumb="<?php echo base_url('');?>images/P13.jpg">
								<img src="<?php echo base_url('');?>images/P13.jpg" />
							</li>
							<li data-thumb="<?php echo base_url('');?>images/P6.jpg">
								<img src="<?php echo base_url('');?>images/P6.jpg" />
							</li>
						</ul>
					</div>
					
					  <script defer src="js/jquery.flexslider.js"></script>

						<script>
					
					$(window).load(function() {
					  $('.flexslider').flexslider({
						animation: "slide",
						controlNav: "thumbnails"
					  });
					});
					</script>
					
					<div class="product-details">
						
						<h4><span class="w3layouts-agileinfo">Resumen</span> :<p><?php echo $descripcion ?></p><div class="clearfix"></div></h4>
					
					</div>
				</div>
				<div class="col-md-5 product-details-grid">
					<div class="item-price">
						<div class="product-price">
							<p class="p-price">Precio</p>
							<h3 class="rate">$<?php echo $precio ?></h3>
							<div class="clearfix"></div>
						</div>
						<div class="condition">
							<p class="p-price">Accion</p>
							<h4><?php echo $accion ?></h4>
							<div class="clearfix"></div>
						</div>
						
					</div>
					<div class="interested text-center">
						<h4>¿Interesado?<small> Contacta el vendedor!</small></h4>
						<p><i class="glyphicon glyphicon-earphone"></i>829-567-1062</p>
					</div>
						
				</div>
				<div id="map" style="width:100%;height:500px"></div>

<script>
function myMap() {
  var mapCanvas = document.getElementById("map");
  var myCenter = new google.maps.LatLng(<?php echo $latitud ?>,<?php echo $longitud?>); 
  var mapOptions = {center: myCenter, zoom: 5};
  var map = new google.maps.Map(mapCanvas,mapOptions);
  var marker = new google.maps.Marker({
    position: myCenter,
    animation: google.maps.Animation.BOUNCE
  });
  marker.setMap(map);
}
</script>

				

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCj0YmlmqequAb_wg2MzOB3-Crih3ylTiA&callback=myMap"></script>
			<div class="clearfix"></div>
			</div>
		</div>
	</div>
	

