<!-- Submit Ad -->
  <div class="submit-ad main-grid-border">
    <div class="container">
      <h2 class="w3-head">Publicar Anuncio</h2>
      <div class="post-ad-form">
        <form action="<?php echo base_url('Anuncio/guardar'); ?>" method="get"  id="form_anuncio" >

          <label> Titulo<span>*</span></label>
          <input type="text" class="phone" name="titulo" placeholder="" required>
          <div class="clearfix"></div>
          <label>Direccion <span>*</span></label>
          <input type="text" class="phone" name="direccion" placeholder="" required>
          <div class="clearfix"></div>
          <label>Tipo<span>*</span></label>
          <select class="" name="tipo"required>
            <option>Casa</option>
            <option>Apartamento</option>
            <option>Cabaña</option>
            <option>Hotel</option>
            <option>PentHouse</option>
            <option>Construccion</option>
            <option>Finca</option>
            <option>Hotel</option>
          </select>
          
          <div class="clearfix"></div>
          <label>Precio<span>*</span></label>
          <input type="text" class="phone" name="precio" placeholder="" required>
          <div class="clearfix"></div>
          <label>Accion<span>*</span></label>
          <select name="accion">
            <option>Vender</option>
            <option>Alquilar</option>
          </select>
          
          <div class="clearfix"></div>
          <label>Descripcion<span>*</span></label>
          <textarea class="mess" placeholder="describir el inmobiliario" name="descripcion"></textarea>
          <div class="clearfix"></div>

          <label>File: <span>*</span></label>

          <input type="file"  id="img" name="imagen" >
         <input type="text" id="ig">
            <div class="clearfix"></div>
             <label>Laptitud: <span>*</span></label>
             <input type="text" id="lat" name="latitud" readonly value="">
              <label>Longitud: <span>*</span></label>
          <input type="text" id="long" name="longitud" readonly value="">
          <div class="clearfix"></div>
            <div id="map" style="width:100%;height:500px;"></div>



<script>

 var imagen = document.getElementById("img").src;
  document.getElementById("ig").value=imagen;
function myMap() {
  var mapCanvas = document.getElementById("map");
  var myCenter=new google.maps.LatLng(18.474399059267128,-69.91973876953125);
  var mapOptions = {center: myCenter, zoom: 5};
  var map = new google.maps.Map(mapCanvas, mapOptions);
  google.maps.event.addListener(map, 'click', function(event) {
    placeMarker(map, event.latLng);
  });
}

function placeMarker(map, location) {
  var marker = new google.maps.Marker({
    position: location,
    map: map
  });
  var infowindow = new google.maps.InfoWindow({
    content: 'Latitude: ' + location.lat() + '<br>Longitude: ' + location.lng()
  });
  infowindow.open(map,marker);

  document.getElementById("lat").value=location.lat();
  document.getElementById("long").value=location.lng();

}
</script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCj0YmlmqequAb_wg2MzOB3-Crih3ylTiA&callback=myMap"></script>


         







          <br><br><div class="col col-md-offset-6">

          
            <button type="submit" class="btn btn-info btn-ms">Guardar</button>
          </div>
        
          </form>
          </div>
      </div>
    </div>  
  </div>
