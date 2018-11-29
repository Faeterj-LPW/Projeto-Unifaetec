<!-- Seção de Login -->
<section class="text-center">
	<div class="container">
		<div class="mx-auto text-center">
			<img src="img/faetec.jpg" class="img-responsive mx-auto d-block">
		</div>	
		<!--Feedback do que ocorreu-->
		<!--Menssagem enviada-->
		<div id="sendmessage"></div>
		<!--Menssagem de erro-->
		<div id="errormessage"></div>
		<br><br>			
		<!--Formulário-->
		<h2>Entrar no Sistema</h2>
		<form action="" method="post">
			<div class="form-group">
				<input type="text" name="email" id="email" class="form-control form-control-lg" style="width:220px;margin:0 auto;" placeholder="Email">
			</div>
			<div class="form-group">
				<input type="password" name="senha" id="password" class="form-control form-control-lg" style="width:220px;margin:0 auto;" placeholder="Senha">
			</div>
			<div class="form-group">
				<label class="mark" style="background-color: transparent;">
					<input type="checkbox" checked="checked"> Lembrar-se de mim
					<span class="checkmark"></span>
				</label>
			</div>
			<div class="form-group">
				<button class="btn btn-success" name="button" type="button" style="font-size:1.2em;width:220px;margin-top:-8px;">Entrar</button>
			</div>
			<div>
				<a id="simple" href="cadastro.php">Cadastrar-se</a>
			</div>
		</form>
	</div>
	<br><br><br><br>
</section>
<!-- Fim da Seção Login -->