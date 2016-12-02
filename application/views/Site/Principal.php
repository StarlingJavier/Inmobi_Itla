
	<!-- Real estates -->
	
				<div class="clearfix"></div>
			</div>
			<div class="ads-grid">
				<div class="side-bar col-md-3">
					<div class="search-hotel">
					<h3 class="agileits-sear-head">Buscar Inmobiliario</h3>
					<form>
						<input type="text" value="Product name..." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Product name...';}" required="">
						<input type="submit" value=" ">
					</form>
				</div>
				
				<div class="range">
					<h3 class="agileits-sear-head">Precio</h3>
							<ul class="dropdown-menu6">
								<li>
									                
									<div id="slider-range"></div>							
										<input type="text" id="amount" style="border: 0; color: #ffffff; font-weight: normal;" />
									</li>			
							</ul>
							<!---->
							<script type="text/javascript" src="<?php echo base_url('js/jquery-ui.js');?>"></script>
							<script type='text/javascript'>//<![CDATA[ 
							$(window).load(function(){
							 $( "#slider-range" ).slider({
										range: true,
										min: 0,
										max: 10000000,
										values: [ 10000, 10000000 ],
										slide: function( event, ui ) {  $( "#amount" ).val( "$" + ui.values[ 0 ] + " - $" + ui.values[ 1 ] );
										}
							 });
							$( "#amount" ).val( "RD$" + $( "#slider-range" ).slider( "values", 0 ) + " - RD$" + $( "#slider-range" ).slider( "values", 1 ) );

							});//]]>  

							</script>
							
				</div>
				<div class="w3-brand-select">
					<h3 class="agileits-sear-head">Categoria</h3>
					  <select class="selectpicker" data-live-search="">
					  <option data-tokens="All">Todos</option>
					  <option data-tokens="Rent">Casa</option>
					  <option data-tokens="Sale">Apartamento</option>
					  <option data-tokens="Sale">Finca</option>
					  <option data-tokens="Sale">Cabaña</option>


					</select>
				</div>
			  <div class="clearfix"></div>
				</div>
				<div class="agileinfo-ads-display col-md-9">
					<div class="wrapper">					
					<div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
					  <ul id="myTab" class="nav nav-tabs nav-tabs-responsive" role="tablist">
						<li role="presentation" class="active">
						  <a href="#home" id="home-tab" role="tab" data-toggle="tab" aria-controls="home" aria-expanded="true">
							<span class="text">Inmobiliario</span>
						  </a>
						</li>
					  </ul>
					  <div id="myTabContent" class="tab-content">
						<div role="tabpanel" class="tab-pane fade in active" id="home" aria-labelledby="home-tab">
						   <div>
								<div id="container">
								<div class="view-controls-list" id="viewcontrols">
									<label>Vista:</label>
									<a class="gridview"><i class="glyphicon glyphicon-th"></i></a>
									<a class="listview active"><i class="glyphicon glyphicon-th-list"></i></a>
								</div>
								<div class="sort">
								   <div class="sort-by">
										<label>Action: </label>
										<select>
														<option value="">Todos</option>
														<option value="">Alquiler</option>
														<option value="">Venta</option>
										</select>
									   </div>
									 </div>


                                      
								

								<div class="clearfix"></div>



							<?php 

                            foreach ($Anuncio as $anuncio) {



                            	echo <<<filas


                            	 <ul class="list">
									<li>
									<img   src= " images/$anuncio->imagen"  title="imagen" alt="" />
									<section class="list-left">
									<h5 class="title">{$anuncio->titulo}</h5>
									<span class="adprice"><span>RD$</span>{$anuncio->precio}</span>
									<p class="catpath">{$anuncio->descripcion}</p>
									</section>
									<section class="list-right">
									<span class="date">{$anuncio->accion}</span>
									<span class="cityname">{$anuncio->direccion}</span>
									<button onclick='window.open("Anuncio/VerAnuncio/?titulo=$anuncio->titulo&direccion=$anuncio->direccion&precio=$anuncio->precio&accion=$anuncio->accion&descripcion=$anuncio->descripcion&latitud=$anuncio->latitud&longitud=$anuncio->longitud&imagen=$anuncio->imagen")' class="btn btn-default btn-sm right" style="margin-top: 20px"; >Mas Infomacion </button>
									</section>
									<div class="clearfix"></div>
									</li> 
									
							
								
							</ul>
filas;
                            	
                            }


						 ?>
						</div>
						<script type="text/javascript">

						



									

							
							function abrirVentana(titulo){
								var ventana=window.open("Anuncio/VerAnuncio/?titulor=titulo");
								

     //obtenemos el valor del campo con id pass

    $.post("<?php echo base_url('Anuncio/verAnuncio');  ?>",{


     titulo: titulo, //pasamos esos datos con los valores
     direccion: direccion, 
      tipo:tipo,
       precio: precio,
        accion: accion,
         descripcion: descripcion
             


  },window.open());
    


}


									
									//);

							
						</script>

						
							</div>
						</div>
						<ul class="pagination pagination-sm">
							<li><a href="#">Prev</a></li>
							<li><a href="#">1</a></li>
							<li><a href="#">2</a></li>
							<li><a href="#">3</a></li>
							<li><a href="#">4</a></li>
							<li><a href="#">5</a></li>
							<li><a href="#">6</a></li>
							<li><a href="#">7</a></li>
							<li><a href="#">8</a></li>
							<li><a href="#">Next</a></li>
						</ul>
					  </div>
					</div>
				</div>
				</div>
                  

				
                                      	
				<div class="clearfix"></div>
			</div>
		</div>	
	</div>
	<!-- // Real estates -->
	           <table class="table">
					<thead>
						<tr>
							<th>Titulo</th>
							<th>Direccion</th>
							 <th>tipo</th>
							 <th>precio</th>
							 <th>accion</th>
							 <th>descripcion</th>
							 <th>imagen</th>
						</tr>

					</thead>

					<tbody>
						
					</tbody>

				</table>
