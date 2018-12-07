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

<!-- Formulário de pesquisa -->
<div class="container">
	<form class="valign w-100">
		<div class="form-group d-flex justify-content-center mb-2">
			<div class="col-md-4">
				<label for="busca" class="normal-font">Consultar</label>
				<div class="input-group mb-2">
					<input type="text" class="form-control" id="autor" placeholder="Autor">
				</div>					
				<div class="input-group mb-2">
					<input type="text" class="form-control" id="titulo" placeholder="Título">
				</div>
			</div>
		</div>
		<div class="form-group d-flex justify-content-center">
			<div class="col-md-4 mb-3">
				<button type="button" class="btn btn-success w-100">Pesquisar</button>
			</div>
		</div>
	</form>
</div>
<!-- Fim do formulário de pesquisa -->