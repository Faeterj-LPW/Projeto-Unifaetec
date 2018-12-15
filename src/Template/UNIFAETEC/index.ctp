<!-- Seção de Login -->
<section class="text-center">
	<div class="container-fluid pb-5">
		<div class="row">
			<div class="col-md-10 mx-auto text-center">
				<img src="img/faetec.jpg" class="img-fluid">
			</div>	
		</div>
		<!--Feedback do que ocorreu-->
		<!--Menssagem enviada-->
		<div id="sendmessage"></div>
		<!--Menssagem de erro-->
		<div id="errormessage"></div>
		<br><br>			
		<!--Formulário-->
		<h5>Entrar no Sistema</h5>
		<!-- Método GET para permitir acesso ao menu temporariamente -->
		<form action="menu.php" method="post">
			<div class="form-row form-group">
				<div class="col-xs-3 mx-auto">
					<input type="text" name="email" id="email" class="form-control" placeholder="Email">
				</div>
			</div>
			<div class="form-row form-group mb-3">
				<div class="col-xs-3 mx-auto">
					<input type="password" name="senha" id="password" class="form-control" placeholder="Senha">
				</div>
			</div>
			<label class="mark" style="background-color: transparent;">
				<input class="ml-1" type="checkbox" checked="checked">Lembrar-se de mim
				<span class="checkmark"></span>
			</label>
			<div class="form-row form-group mt-2">
				<div class="col-xs-3 mx-auto">
					<button class="btn btn-success px-5" name="button" type="submit">Entrar</button>
				</div>
			</div>
			<a class="p-0" id="simple" href="cadastro.php">Cadastrar-se</a>
		</form>
	</div>
</section>
<!-- Fim da Seção Login -->