<!-- Formulário -->
<div class="container mt-5 pb-4">
	<form>
		<div class="form-group d-flex justify-content-center">
			<div class="col-md-4">
				<label for="atividade" class="normal-font">Atividade</label>
				<input type="text" class="form-control" id="atividade" placeholder="Ex: Limpeza de sala...">
			</div>
			<div class="col-md-4">					
				<label for="status" class="normal-font">Setor</label>
				<select class="form-control" id="setor">
					<option value="1">Recursos humanos</option>
					<option value="2">Serviços Gerais</option>
					<option value="3">Administração</option>
					<option value="4">Desenvolvimento</option>
				</select>
			</div>
		</div>
		<div class="form-group d-flex justify-content-center">
			<div class="col-md-8">
				<label for="descriAtividade" class="normal-font">Descrição da Atividade</label>
				<textarea class="form-control" id="descriAtividade" rows="7"></textarea>
			</div>
		</div>
		<div class="form-group d-flex justify-content-center">
			<div class="col-md-3">
				<label for="prevInicio" class="normal-font">Previsão de Inicio</label>
				<input type="date" class="form-control" id="prevInicio" placeholder="name@example.com">
			</div>
			<div class="col-md-3">
				<label for="prevTermino" class="normal-font">Previsão de termino</label>
				<input type="date" class="form-control" id="prevTermino" placeholder="name@example.com">
			</div>
		</div>
		<div class="form-group d-flex justify-content-center">
			<div class="col-md-3">
				<button type="button" class="btn btn-success w-100">Inserir</button>
			</div>
		</div>
	</form>
	<table class="table table-responsive-md table-hover">
		<thead>
			<tr>
				<th scope="col">Atividade</th>
				<th scope="col">Descrição</th>
				<th scope="col">Setor</th>
				<th scope="col">Data de Início</th>
				<th scope="col">Data de Fim</th>
				<th scope="col">Finalizado</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<th scope="row">Limpeza de sala</th>
				<td>Limpar salas H1, H2 e H3</td>
				<td>Serviços Gerais</td>
				<td>10/10/2018</td>
				<td>12:00</td>
				<td>
					<div class="form-check">
						<input class="form-check-input position-static" type="checkbox" value="1">
					</div>
				</td>
			</tr>
			<tr>
				<th scope="row">Atividade 123</th>
				<td>Calcular Pontos função de trabalho...</td>
				<td>Desenvolvimento</td>
				<td>20/02/2018</td>
				<td>12:00</td>
				<td>
					<div class="form-check">
						<input class="form-check-input position-static" type="checkbox" value="1">
					</div>
				</td>
			</tr>
			<tr>
				<th scope="row">Cadastramento de eventos</th>
				<td>Cadastrar planilha de eventos no...</td>
				<td>Administração</td>
				<td>12/01/2018</td>
				<td>12:00</td>
				<td>
					<div class="form-check">
						<input class="form-check-input position-static" type="checkbox" value="1">
					</div>
				</td>
			</tr>
		</tbody>
	</table>
</div>
<!-- Fim do formulário -->