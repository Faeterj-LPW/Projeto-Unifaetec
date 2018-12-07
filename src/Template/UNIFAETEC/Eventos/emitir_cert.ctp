<!-- Alinhamento vertical responsivo -->
<style scoped>
	.valign {
		right:0;
		margin-top:-2rem;
	}

	.container {
		min-height: 22rem;
	}
</style>

<!--Formulário-->
<div class="container">
	<form class="valign w-100">
		<div class="form-group d-flex justify-content-center">
			<div class="col-md-6">
				<label for="Nome">Nome do Servidor</label>
				<input type="text" class="form-control" name="Nome" placeholder="ex: Maria das Graças" required>
			</div>
		</div>
		<div class="form-group d-flex justify-content-center">
			<div class="col-md-3">
				<label for="DataEvento">Data do Evento</label>
				<input type="date" class="form-control" name="DataEvento" required>
			</div>
			<div class="col-md-3">
				<label for="Evento">Evento</label>
				<select class="form-control" name="Evento" required>
					<option>Evento 01</option>
					<option>Evento 02</option>
					<option>Evento 03</option>
					<option>Evento 04</option>
				</select>
			</div>
		</div>
		<div class="form-group d-flex justify-content-center">
			<button type="button" class="btn btn-success px-4">Gerar PDF</button>
		</div>
	</form>
</div>
<!--Fim do Formulário-->