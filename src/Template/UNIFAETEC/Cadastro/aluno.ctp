<!-- Centralização vertical dos rótulos -->
<style scoped>
	label.w-100 {
		font-size: 1rem;
		padding: 0.4rem 0;
	}
</style>

<!-- Formulário de cadastro -->
<section>
	<div class="container mt-5 pb-5">
		<!-- Feedback do que ocorreu -->
		<!-- Menssagem enviada -->
		<div id="sendmessage"></div>
		<!-- Erro de envio -->
		<div id="errormessage"></div>				
		<form class="container-fluid" action="usuario.php" method="post">
			<div class="form-group row justify-content-center">
				<div class="col-md-4 px-0">
					<h4 class="text-center">Dados do Aluno</h4>
				</div>
			</div>					
			<div class="form-group row justify-content-center">
				<div class="col-md-2 px-0">
					<label for="turno" class="d-inline-block text-center w-100 normal-font">Turno</label>
				</div>	
				<div class="col-md-4 px-0">							
					<select name="turno" id="shift" class="form-control" required>
						<option value="" disabled selected>Selecione o turno</option>
						<option value="1">Manhã</option>
						<option value="2">Tarde</option>
						<option value="3">Noite</option>
					</select>
				</div>						
			</div>
			<div class="form-group row justify-content-center">
				<div class="col-md-2 px-0">
					<label for="curso" class="d-inline-block text-center w-100 normal-font">Curso</label>
				</div>	
				<div class="col-md-4 px-0">								
					<select name="curso" id="degree" class="form-control" required>
						<option value="" disabled selected>Selecione o curso</option>
						<option value="1">Informática</option>
						<option value="2">Eletrônica</option>
						<option value="3">Administração</option>
						<option value="4">Moda</option>
					</select>
				</div>						
			</div>
			<div class="form-group row justify-content-center">
				<div class="form-group d-flex justify-content-center">
					<button type="submit" class="btn btn-success px-5">Cadastrar</button>
				</div>
			</div>
			<div>
			<input type="text" name="nome" id="nome" hidden>
			<input type="password" name="idfuncional" id="idfuncional" hidden>
			<input type="text" name="unidade" id="unidade" hidden>
			<input type="text" name="cpf" id="cpf" hidden>
			<input type="date" name="nascimento" id="nascimento" hidden>
			<input type="email" name="email" id="email" hidden>
			<input type="password" name="senha" id="senha" hidden>
			</div>
		</form>
	</div>
</section>

<?php $this->append('script'); ?>
<script>
	function pegarDados() {
		document.getElementById("nome").value = localStorage.getItem("nome");
		document.getElementById("idfuncional").value = localStorage.getItem("id");
		document.getElementById("unidade").value = localStorage.getItem("unidade");
		document.getElementById("cpf").value = localStorage.getItem("cpf");
		document.getElementById("nascimento").value = localStorage.getItem("nascimento");
		document.getElementById("email").value = localStorage.getItem("email");
		document.getElementById("senha").value = localStorage.getItem("senha");
	}
	window.onload = pegarDados;
</script>
<?php $this->end(); ?>
<!-- Fim do formulário de cadastro -->