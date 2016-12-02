<h3 class="text-center">Todos los Anuncio</h3>

<table class="table">
	<thead>
		<tr>
			<th>Titulo</th>
			<th>Direccion</th>
			<th>tipo</th>
			<th>precio</th>
			<th>accion</th>
			<th>Descripcion</th>
			<th>imagen</th>
			<th>latitud</th>
			<th>logintud</th>
			<th>config</th>


		</tr>
	</thead>
	<tbody>
		<?php 
      foreach ($Anuncio as $anuncio) {

      	$linkdel= base_url("");
      	
      	echo <<<filas

      	<tr>

         <td>{$anuncio->titulo}</td> 
         <td>{$anuncio->direccion}</td>
         <td>{$anuncio->tipo}</td> 
         <td>{$anuncio->precio}</td>   	
         <td>{$anuncio->accion}</td>
         <td>{$anuncio->descripcion}</td>
         <td>{$anuncio->imagen}</td> 
         <td>{$anuncio->latitud}</td>
         <td>{$anuncio->longitud}</td> 

           <td>
           <a href="" class="btn btn-danger btn-sm">Editar</a>
         </td>   
         <tr>	
         
filas;
      }

		 ?>
	</tbody>
</table>