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
					<h4 class="text-center">Dados do Usuário</h4>
				</div>
			</div>					
			<div class="form-group row justify-content-center">
				<div class="col-md-2 px-0">											
					<label for="nome" class="d-inline-block text-center w-100 normal-font">Nome</label>
				</div>
				<div class="col-md-4 px-0">
					<input type="text" name="nome" id="name" class="form-control" placeholder="Nome completo">
				</div>
			</div>
			<div class="form-group row justify-content-center">
				<div class="col-md-2 px-0">											
					<label for="cpf" class="d-inline-block text-center w-100 normal-font">CPF</label>
				</div>
				<div class="col-md-4 px-0">
					<input type="text" name="cpf" id="cpf" class="form-control" placeholder="000.000.000-00">
				</div>
			</div>
			<div class="form-group row justify-content-center">
				<div class="col-md-2 px-0">
					<label for="nascimento" class="d-inline-block text-center w-100 normal-font">Nascimento</label>
				</div>
				<div class="col-md-4 px-0">								
					<input type="date" name="nascimento" id="birth" class="form-control" placeholder="dd/mm/aaaa">
				</div>
			</div>
			<div class="form-group row justify-content-center">
				<div class="col-md-2 px-0">
					<label for="email" class="d-inline-block text-center w-100 normal-font">Email</label>
				</div>	
				<div class="col-md-4 px-0">							
					<input type="email" name="email" id="email" class="form-control" placeholder="email@faeterj-rio.edu.br">
				</div>						
			</div>
			<div class="form-group row justify-content-center">
				<div class="col-md-2 px-0">
					<label for="senha" class="d-inline-block text-center w-100 normal-font">Senha</label>
				</div>	
				<div class="col-md-4 px-0">							
					<input type="password" name="senha" id="password" placeholder="********" class="form-control">
				</div>						
			</div>
			<div class="form-group row justify-content-center">
				<div class="col-md-6 px-0 d-flex justify-content-end">	
					<div class="col-md-8 px-0">
						<label class="dot"> Aluno
							<input type="radio" id="rdaluno" name="radio" checked>
							<span class="radiodot"></span>
						</label>
						<label class="dot"> Professor
							<input type="radio" id="rdprofessor" name="radio">
							<span class="radiodot"></span>
						</label>
						<label class="dot"> Funcionário
							<input type="radio" id="rdfuncionario" name="radio">
							<span class="radiodot"></span>
						</label>
					</div>
				</div>						
			</div>
			<div class="form-group row justify-content-center">
				<div class="col-md-6 px-0 d-flex justify-content-end">						
					<button type="button" name="button" id="button" class="col-md-8 btn btn-success" onclick="redirecionar()">Próximo Passo >></button>
				</div>
			</div>
		</form>				
	</div>
</section>

<?php $this->append('script'); ?>
<script>
	function redirecionar(){
		localStorage.setItem("nome", document.getElementById('name').value);
		localStorage.setItem("cpf", document.getElementById('cpf').value);
		localStorage.setItem("nascimento", document.getElementById('birth').value);
		localStorage.setItem("email", document.getElementById('email').value);
		localStorage.setItem("senha", document.getElementById('password').value);

		if (document.getElementById('rdaluno').checked) {
			window.location.href = "aluno.php";
		}
		if (document.getElementById('rdprofessor').checked) {
			window.location.href = "professor.php";
		}
		if (document.getElementById('rdfuncionario').checked) {
			window.location.href = "funcionario.php";
		}
	}
</script>
<?php $this->end(); ?>
<!-- Fim do formulário de cadastro -->