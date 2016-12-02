<!-- sign in form -->
	 <section>
		<div id="agileits-sign-in-page" class="sign-in-wrapper">
			<div class="agileinfo_signin">
			<h3>Iniciar Seccion</h3>
				<form action="<?php echo base_url('login/iniciar');?>" method="post">
					<input type="text" name="username" placeholder="Usuario" required> 
					<input type="password" name="password" placeholder="Password" required> 
					<br><br>
					<div class="col col-md-offset-4">
					<button type="submit" class="btn btn-info">Iniciar Seccion</button>
					</div>
					<div class="forgot-grid">
						<div class="forgot">
							<a href="#" data-toggle="modal" data-target="#myModal2">Olvidaste tu contrasena?</a>
						</div>
					
						<div class="clearfix"> </div>
					</div>
				</form>
				<h6> Registrate Ya? <a href="<?php echo base_url('Login/registrar');?>">Registar</a> </h6>
			</div>
		</div>
	</section>
	<!-- //sign in form -->