<!-- sign up form -->
	 <section>
		<div id="agileits-sign-in-page" class="sign-in-wrapper">
			<div class="agileinfo_signin">
			<h3>Resgistar</h3>
				<form  action="<?php echo base_url('Propietario/guardar');?>" method="post">

					<input type="text" name="nombre" placeholder="Nombre" required>
                    <input type="text" name="apellido" placeholder="Apellido" required>
					<input type="email" name="email" placeholder="E-mail"> 
					<input type="text" name="username" placeholder="Username">
					<input type="password" name="password" placeholder="Password">
					<input type="tel" name="telefono" placeholder="Telefono"> 
					<input type="tel" name="celular" placeholder="Celular"> 
					<input type="tel" name="fax" placeholder="Fax"> 
					<input type="text" name="mas_info" placeholder="Mas Informacion"> 
					<div class="signin-rit">
						<span class="agree-checkbox">
							<label class="checkbox"><input type="checkbox" >Estoy de Acuerdo<a class="w3layouts-t" href="<?php base_url('Site/privacy');?>" target="_blank">Terminos</a> and <a class="w3layouts-t" href="<?php base_url('Site/privacy');?>" target="_blank">Politica de Privacidad</a></label>
						</span>
					</div>
					<div class="col col-md-offset-4">
					<button type="submit" class="btn btn-info">Crear Cuenta</button>
				    </div>
				</form>
			</div>
		</div>
	</section>
	<!-- //sign up form -->

<script type="text/javascript">
 function enviarUsuario(){

    $.post("<?php echo base_url('Propietario/guardar');  ?>",{

            // igual
    id_roles: 1  //paso el id del rol


  });
}

</script>

<script type="text/javascript">
 function enviarAdmin(){

    $.post("<?php echo base_url('Propietario/guardar');  ?>",{

           // igual
    id_roles: 2  //paso el id del rol


  });
}

</script>