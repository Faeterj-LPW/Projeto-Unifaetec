<!-- Formulário -->
<div class="container mt-5 pb-4">
	<form method="post" action="cadastrar_atv_acd.php">				
		<div class="form-group d-flex justify-content-center">
			<!--Nome-->
			<div class="col-md-4">
				<label for="nomeAtv">Nome</label>
				<input type="text" class="form-control" name="nomeAtv" id="nomeAtv" placeholder="Nome da atividade">
			</div>
			<!--Local-->
			<div class="col-md-4">
				<label for="localAtv">Local</label>
				<input type="text" class="form-control" name="localAtv" id="localAtv" placeholder="Local">
			</div>
		</div>
		<div class="form-group d-flex justify-content-center">
			<!--Tipo-->
			<div class="col-md-8">
				<label for="tipoEvento">Tipologia do Evento</label>
				<select class="form-control" name="tipoEvento" id="tipoEvento">
					<option value="" selected disabled>Selecione uma tipologia</option>
					<option value="1">Palestra</option>
					<option value="2">Workshop</option>
					<option value="3">Reunião</option>
					<option value="4">Debate</option>
					<option value="5">Outro</option>
				</select>
			</div>
		</div>
		<div class="form-group d-flex justify-content-center">
			<!--Data-->
			<div class="col-md-4">
				<label for="data" class="normal-font">Data</label>
				<input type="date" class="form-control" name="data" id="data">
			</div>
			<!--Hora-->
			<div class="col-md-4">
				<label for="hora">Horário</label>
				<input type="time" class="form-control" name="hora" id="hora">
			</div>
		</div>
		<div class="form-group d-flex justify-content-center">
			<!--Detalhes Atv-->
			<div class="col-md-8">
				<label for="detAtividade">Mais informações sobre a atividade</label>
				<textarea class="form-control" name="detAtividade" id="detAtividade"></textarea>
			</div>
		</div>
		<!--Botões-->
		<div class="form-group d-flex justify-content-center">
			<button type="submit" class="btn btn-success px-5">Cadastrar</button>
		</div>
	</form>
</div>
<!-- Fim do formulário -->