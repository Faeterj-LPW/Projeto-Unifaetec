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
	<table class="table table-hover">
		<thead>
			<tr>
				<th scope="col">Usuário</th>
				<th scope="col">Atividade</th>
				<th scope="col">Data</th>
				<th scope="col">Local</th>
				<th scope="col">Gerar Certificado</th>
			</tr>
		</thead>
		<tbody>
    		<tr>
				<th scope="row">José da Silva</th>
				<td>Palestra ABC</td>
				<td>10/10/2018</td>
				<td>Rua AML, 542 - Centro</td>
				<td>
					<button type="button" class="btn btn-success px-4">Participação</button>
					<button type="button" class="btn btn-success px-4">Comparecimento</button>
				</td>
			</tr>
			<tr>
				<th scope="row">José da Silva</th>
				<td>Projeto 123</td>
				<td>10/12/2018</td>
				<td>Rua AML, 542 - Centro</td>
				<td>
					<button type="button" class="btn btn-success px-4">Participação</button>
					<button type="button" class="btn btn-success px-4">Comparecimento</button>
				</td>
			</tr>
			<tr>
				<th scope="row">José da Silva</th>
				<td>Aula Set</td>
				<td>03/10/2018</td>
				<td>Rua AML, 542 - Centro</td>
				<td>
					<button type="button" class="btn btn-success px-4" disabled>Participação</button>
					<button type="button" class="btn btn-success px-4">Comparecimento</button>
				</td>
			</tr>
		<tbody>
	</table>
</div>
<!--Fim do Formulário-->