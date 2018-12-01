<!-- Formulário -->
<div class="container mt-5">
	<form>
		<div class="form-row d-flex justify-content-center">
			<div class="col-md-3 mb-3">
				<label for="Nome">Nome</label>
				<input type="text" class="form-control form-control-lg" name="Nome" placeholder="ex: Maria das Graças" required>
			</div>
			<div class="col-md-3 mb-3">
				<label for="CPF">CPF</label>
				<input type="text" class="form-control form-control-lg" name="CPF" placeholder="ex: 16030687221" required>
			</div>
			<div class="col-md-3 mb-3">
				<label for="DataNasc">Data de Nascimento</label>
				<input type="date" class="form-control" name="DataNasc" required>
			</div>
		</div>
		<div class="form-row d-flex justify-content-center">
			<div class="col-md-3 mb-3">
				<label for="matricula">Matrícula</label>
				<input type="text" class="form-control form-control-lg" name="matricula" placeholder="ex: 1610470400001" required>
			</div>
			<div class="col-md-3 mb-3">
				<label for="funcao">Função</label>
				<input type="text" class="form-control form-control-lg" name="funcao" placeholder="ex: diretor de projeto" required>
			</div>
			<div class="col-md-3 mb-3">
				<label for="cargo">Cargo</label>
				<select class="form-control form-control-lg" style="height:34px;" name="cargo" required>
					<option>Diretor</option>
					<option>Vice-diretor</option>
					<option>Secretária</option>
					<option>Professor</option>
					<option>Outro</option>
				</select>
			</div>
		</div>
		<div class="form-row d-flex justify-content-center">
			<div class="col-md-3 pt-2 pb-2 mb-3 border-top">
				<div class="input-group">
					<div class="input-group-prepend">
						<div class="input-group-text">
							<img src="img/user.png">
						</div>
					</div>
					<input type="text" class="form-control form-control-lg" placeholder="Username">
				</div>
			</div>
			<div class="col-md-3 pt-2 pb-2 mb-3 border-top">
				<div class="input-group">
					<div class="input-group-prepend">
						<div class="input-group-text">
							<img src="img/password.png">
						</div>
					</div>
					<input type="password" class="form-control form-control-lg" placeholder="Password">
				</div>
			</div>
		</div>
		<div class="form-row d-flex justify-content-center mb-5">
			<div class="col-md-0 mb-5">
				<button class="btn btn-primary" style="font-size:1.2em;width:270px;">Adicionar outro integrante</button>
			</div>
			<div class="col-md-0 mb-5">
				<button type="button" class="btn btn-success" style="font-size:1.2em;width:270px;">Cadastrar Equipe</button>
			</div>
		</div>
	</form>
	<br><br><br><br>
	<br><br><br>
</div>
<!--Fim Formulário-->

<!-- Rodapé -->
<!---Botão Voltar--->
<div id="btnbck">
	<a href="menu.php">
	<div class="imgbtn">
		<img style="width:40%;" src="img/voltar.png">
	</div>
	<div class="txtbtn">
		<small>Voltar ao Menu</small>
	</div>
	</a>
</div>		
<footer id="fix-footer" style="height:145px;">
	<div id="navfit" style="bottom:70px;">
		<small><strong>Faetec-RJ</strong> - Secretaria de Ciência, Tecnologia e Inovação.</small>			
	</div>
</footer>		
<!-- Fim do Rodapé -->