<!-- Formulário -->
<div class="container mt-5 pb-4">
	<form>				
		<div class="form-group d-flex justify-content-center">
			<!--Nome-->
			<div class="col-md-4">
				<label for="nomeAtv">Nome</label>
				<input type="text" class="form-control" id="nomeAtv" placeholder="Nome da atividade">
			</div>
			<!--Local-->
			<div class="col-md-4">
				<label for="localAtv">Local</label>
				<input type="text" class="form-control" id="localAtv" placeholder="Local">
			</div>
		</div>
		<div class="form-group d-flex justify-content-center">
			<!--Tipo-->
			<div class="col-md-8">
				<label for="tipoEvento">Tipologia do Evento</label>
				<select class="form-control" id="tipoEvento">
					<option>Palestra</option>
					<option>Workshop</option>
					<option>Reunião</option>
					<option>Debate</option>
					<option>Outro</option>
				</select>
			</div>
		</div>
		<div class="form-group d-flex justify-content-center">
			<!--Data-->
			<div class="col-md-4">
				<label for="data" class="normal-font">Data</label>
				<input type="date" class="form-control" id="data">
			</div>
			<!--Hora-->
			<div class="col-md-4">
				<label for="hora">Horário</label>
				<input type="datetime" class="form-control" id="hora">
			</div>
		</div>
		<div class="form-group d-flex justify-content-center">
			<!--Detalhes Atv-->
			<div class="col-md-8">
				<label for="detAtividade">Mais informações sobre a atividade</label>
				<textarea class="form-control" id="detAtividade"></textarea>
			</div>
		</div>
		<!--Botões-->
		<div class="form-group d-flex justify-content-center">
			<button type="button" class="btn btn-success px-5">Cadastrar</button>
		</div>
	</form>
</div>
<!-- Fim do formulário -->