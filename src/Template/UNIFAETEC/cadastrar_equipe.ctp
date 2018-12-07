<!-- Espaçamento entre elementos responsivo -->
<style scoped>
	.form-group {
		margin-bottom: 0.5rem;
	}
	.col-md-5, .col-md-4 {
		margin-bottom: 0.5rem;
	}

	.border-top {
		padding-top: 1rem;
	}
</style>

<!-- Formulário -->
<div class="container mt-5 pb-4">
	<form>
		<div class="form-group row d-flex justify-content-center">
			<div class="col-md-5">
				<label for="Nome">Nome</label>
				<input type="text" class="form-control" name="Nome" placeholder="ex: Maria das Graças" required>
			</div>
			<div class="col-md-4">
				<label for="CPF">CPF</label>
				<input type="text" class="form-control" name="CPF" placeholder="ex: 16030687221" required>
			</div>
		</div>
		<div class="form-group row d-flex justify-content-center">
			<div class="col-md-5">
				<label for="funcao">Função</label>
				<input type="text" class="form-control" name="funcao" placeholder="ex: diretor de projeto" required>
			</div>
			<div class="col-md-4">
				<label for="matricula">Matrícula</label>
				<input type="text" class="form-control" name="matricula" placeholder="ex: 1610470400001" required>
			</div>
		</div>
		<div class="form-group row d-flex justify-content-center">
			<div class="col-md-5">
				<label for="cargo">Cargo</label>
				<select class="form-control" name="cargo" required>
					<option>Diretor</option>
					<option>Vice-diretor</option>
					<option>Secretária</option>
					<option>Professor</option>
					<option>Outro</option>
				</select>
			</div>
			<div class="col-md-4">
				<label for="DataNasc">Data de Nascimento</label>
				<input type="date" class="form-control" name="DataNasc" required>
			</div>
		</div>
		<div class="form-group row d-flex justify-content-center">
			<div class="col-md-4 border-top">
				<div class="input-group">
					<div class="input-group-prepend">
						<div class="input-group-text">
							<i class="fas fa-user"></i>
						</div>
					</div>
					<input type="text" class="form-control" placeholder="Usuário">
				</div>
			</div>
			<div class="col-md-4 border-top">
				<div class="input-group">
					<div class="input-group-prepend">
						<div class="input-group-text">
							<i class="fas fa-lock"></i>
						</div>
					</div>
					<input type="password" class="form-control" placeholder="Senha">
				</div>
			</div>
		</div>
		<div class="form-group row d-flex justify-content-center">
			<div class="col-md-4">
				<button class="btn btn-primary w-100">Adicionar outro integrante</button>
			</div>
			<div class="col-md-4">
				<button type="button" class="btn btn-success w-100">Cadastrar Equipe</button>
			</div>
		</div>
	</form>
</div>
<!--Fim Formulário-->