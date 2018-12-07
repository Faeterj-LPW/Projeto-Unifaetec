<!-- Formulário -->
<div class="container mt-5">
	<form action="" method="post">
		<div class="form-row form-group d-flex justify-content-center">
			<div class="col-md-3">
				<label for="user">Usuário</label>
				<input type="text" id="user" class="form-control" placeholder="Digite o usuário">
			</div>
			<div class="col-md-3">
				<label for="senha">Senha</label>
				<input type="password"  id="password" class="form-control" placeholder="Digite a senha">
			</div>
		</div>
		<div class="form-row form-group d-flex justify-content-center">
			<div class="col-md-6">
				<label for="tipoDoc">Tipo de Documento</label>
				<select id="tipoDoc" class="form-control">
					<option>Declaração</option>
					<option>Certificado de Conclusão de Curso</option>
					<option>Histórico</option>
					<option>Diploma</option>
					<option>Carteirinha</option>
				</select>
			</div>
		</div>
		<div class="form-row form-group d-flex justify-content-center">
			<div class="col-md-0">
				<button type="button" class="btn btn-success px-5">Gerar</button>
			</div>
		</div>
	</form>
</div>
<!-- Fim do formulário -->