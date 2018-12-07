<!-- Formulário -->
<div class="container mt-5 pb-4">
	<form>
		<div class="form-group d-flex justify-content-center">
			<div class="col-md-4">
				<label for="atividade" class="normal-font">Atividade</label>
				<input type="text" class="form-control" id="atividade" placeholder="name@example.com">
			</div>
			<div class="col-md-4">					
				<label for="status" class="normal-font">Status</label>
				<select class="form-control" id="status">
					<option>Em aberto</option>
					<option>Encerrado</option>
					<option>?</option>
					<option>??</option>
					<option>???</option>
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
				<button type="button" class="btn btn-success w-100">Consultar</button>
			</div>
			<div class="col-md-3">
				<button type="button" class="btn btn-success w-100">Inserir</button>
			</div>
		</div>
	</form>
</div>
<!-- Fim do formulário -->