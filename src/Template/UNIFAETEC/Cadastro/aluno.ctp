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
		<form class="container-fluid" action="" method="post">
			<div class="form-group row justify-content-center">
				<div class="col-md-4 px-0">
					<h4 class="text-center">Dados do Aluno</h4>
				</div>
			</div>					
			<div class="form-group row justify-content-center">
				<div class="col-md-2 px-0">											
					<label for="matricula" class="d-inline-block text-center w-100 normal-font">Matrícula</label>
				</div>
				<div class="col-md-4 px-0">
					<input type="text" name="matricula" id="id" class="form-control" placeholder="0000000000000">
				</div>
			</div>
			<div class="form-group row justify-content-center">
				<div class="col-md-2 px-0">
					<label for="unidade" class="d-inline-block text-center w-100 normal-font">Unidade</label>
				</div>
				<div class="col-md-4 px-0">								
					<select name="unidade" id="branch" class="form-control">
						<option value="" disabled selected>Selecione a unidade</option>
						<option value="">Campos Goytacazes</option>
						<option value="">Duque de Caxias</option>
						<option value="">Rio de Janeiro</option>
						<option value="">Três Rios</option>
					</select>
				</div>
			</div>
			<div class="form-group row justify-content-center">
				<div class="col-md-2 px-0">
					<label for="turno" class="d-inline-block text-center w-100 normal-font">Turno</label>
				</div>	
				<div class="col-md-4 px-0">							
					<select name="turno" id="shift" class="form-control">
						<option value="" disabled selected>Selecione o turno</option>
						<option value="">Manhã</option>
						<option value="">Tarde</option>
						<option value="">Noite</option>
					</select>
				</div>						
			</div>
			<div class="form-group row justify-content-center">
				<div class="col-md-2 px-0">
					<label for="curso" class="d-inline-block text-center w-100 normal-font">Curso</label>
				</div>	
				<div class="col-md-4 px-0">								
					<select name="curso" id="degree" class="form-control">
						<option value="" disabled selected>Selecione o curso</option>
						<option value="">Análise de Sistemas Informatizados</option>
						<option value="">Educação no Campo</option>
						<option value="">Logística</option>
						<option value="">Pedagogia</option>
						<option value="">Processos Gerenciais</option>
						<option value="">Surdez e Letramento Infantil</option>
					</select>
				</div>						
			</div>
			<div class="form-group row justify-content-center">
				<div class="col-md-6 px-0 d-flex justify-content-end">						
					<button type="button" name="button" id="button" class="col-md-8 btn btn-success">Cadastrar</button>
				</div>
			</div>
			<div>
				<input type="text" name="nome" id="name" hidden>
				<input type="text" name="cpf" id="cpf" hidden>
				<input type="date" name="nascimento" id="birth" hidden>
				<input type="email" name="email" id="email" hidden>
				<input type="password" name="senha" id="password" hidden>
			</div>
		</form>
	</div>
</section>

<?php $this->append('script'); ?>
<script>
	function pegarDados() {
		document.getElementById("name").value = localStorage.getItem("nome");
		document.getElementById("cpf").value = localStorage.getItem("cpf");
		document.getElementById("birth").value = localStorage.getItem("nascimento");
		document.getElementById("email").value = localStorage.getItem("email");
		document.getElementById("password").value = localStorage.getItem("senha");
	}
	window.onload = pegarDados;
</script>
<?php $this->end(); ?>
<!-- Fim do formulário de cadastro -->