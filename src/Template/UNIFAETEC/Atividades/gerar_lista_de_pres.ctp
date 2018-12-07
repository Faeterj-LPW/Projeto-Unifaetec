<!-- Formulário -->
<div class="container mt-5 pb-5">
	<form>
		<div class="form-row form-group form-group d-flex justify-content-center">
			<div class="col-md-3">
				<label for="status" class="font-weight-bold">Selecione a Atividade</label>
				<select class="form-control" id="atv">
					<option>Atividade 01</option>
					<option>Atividade 02</option>
					<option>Atividade 03</option>
					<option>Atividade 04</option>
				</select>
			</div>
		</div>
		<div class="form-row form-group d-flex justify-content-center">
			<div class="col-md-5">
				<div class="card">
					<div class="card-body">
						<h5 class="card-title">Atividade 02</h5>
						<p class="card-text font-weight-bold">Descrição da atividade</p>
					</div>
					<table class="table text-center">
						<thead>
							<tr>
								<th scope="col">#</th>
								<th scope="col">Nome</th>
								<th scope="col">Presença</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<th scope="row">1</th>
								<td>Mark</td>
								<td>
									<label class="dot">
										<input type="radio" name="radio" checked>
										<span class="radiodot"></span>
									</label>
								</td>
							</tr>
							<tr>
								<th scope="row">2</th>
								<td>Jacob</td>
								<td>
									<label class="dot">
										<input type="radio" name="radio">
										<span class="radiodot"></span>
									</label>
								</td>
							</tr>
							<tr>
								<th scope="row">3</th>
								<td>Larry</td>
								<td>
									<label class="dot">
										<input type="radio" name="radio">
										<span class="radiodot"></span>
									</label>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
		<div class="form-row form-group d-flex justify-content-center">
			<div class="col-md-5 text-center">
				<button type="button" class="btn btn-success w-100">Gerar PDF</button>
			</div>
		</div>
	</form>        
</div>
<!-- Fim do formulário -->