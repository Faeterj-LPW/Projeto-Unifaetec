<!-- Ampliação das checkboxes da tabela -->
<style scoped>
	.form-check-input[type="checkbox"] {
		transform: scale(1.2);
	}
</style>

<!-- Formulário -->
<div class="container mt-4 pb-4">
	<form>			
		<div class="d-flex justify-content-center">
			<div class="form-group mb-3" style="width: 25rem;">
				<label for="evento">Selecione o Evento</label>
				<select class="form-control" id="evento" name="evento">
					<option>Evento 1</option>
					<option>Evento 2</option>
					<option>Evento 3</option>
					<option>Evento 4</option>
					<option>Evento 5</option>
				</select>
			</div>
		</div>
		<div class="d-flex justify-content-center">
			<div class="mb-3">
				<div class="card">
					<div class="card-header text-center">
						Evento: 2º Encontro dos Servidores
					</div>
					<div class="card-body">
						<h6 class="card-title">Descrição</h6>
						<p class="card-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
							the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley
							of type and scrambled it to make a type specimen book. </p>
						<table class="table table-hover text-center">
							<thead>
								<tr>
									<th scope="col">#</th>
									<th scope="col">NOME</th>
									<th scope="col">CARGO</th>
									<th scope="col">USER</th>
									<th scope="col">CONFIRMAR PRESENÇA</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<th scope="row">1</th>
									<td>Mark</td>
									<td>Diretor</td>
									<td>@mdo</td>
									<td>
										<div class="form-check">
											<input class="form-check-input position-static" type="checkbox" value="option1">
										</div>
									</td>
								</tr>
								<tr>
									<th scope="row">2</th>
									<td>Jacob</td>
									<td>Professor</td>
									<td>@fat</td>
									<td>
										<div class="form-check">
											<input class="form-check-input position-static" type="checkbox" value="option2">
										</div>
									</td>
								</tr>
								<tr>
									<th scope="row">3</th>
									<td>Vanessa</td>
									<td>Secretária</td>
									<td>@val</td>
									<td>
										<div class="form-check">
											<input class="form-check-input position-static" type="checkbox" value="option3">
										</div>
									</td>
								</tr>

							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
		<div class="d-flex justify-content-center">
			<div class="mb-3">
				<button type="button" class="btn btn-success" style="font-size:1.2em;width:220px;">Gravar Alterações</button>
			</div>
		</div>
	</form>
</div>
<!-- Fim do formulário -->