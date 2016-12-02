                                
<h3 class="text-center">Todos los Usuarios</h3>

<table class="table">
	<thead>
		<tr>
			<th>Nombre</th>
			<th>Apellido</th>
			<th>Email</th>
			<th>Username</th>
			<th>password</th>
			<th>telefono</th>
			<th>celular</th>
			<th>fax</th>
			<th>Mas Info</th>
			<th>config</th>


		</tr>
	</thead>
	<tbody>
		<?php 
      foreach ($Usuario as $user) {
      	
      	echo <<<filas

      	<tr>

         <td>{$user->nombre}</td> 
         <td>{$user->apellido}</td>
         <td>{$user->email}</td> 
         <td>{$user->username}</td>   	
         <td>{$user->password}</td>
         <td>{$user->telefono}</td>
         <td>{$user->celular}</td> 
         <td>{$user->fax}</td>
         <td>{$user->mas_info}</td> 
           <td>
           <a href="" class="btn btn-danger btn-sm">Eliminar</a>
         </td>   
         <tr>	
         
filas;
      }

		 ?>
	</tbody>
</table>