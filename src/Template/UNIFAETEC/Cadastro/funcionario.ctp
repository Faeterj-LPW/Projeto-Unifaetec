<!-- Centralização vertical dos rótulos -->
<style scoped>
	label.w-100 {
		font-size: 1rem;
		padding: 0.4rem 0;
	}
</style>

<!-- Formulário de cadastro -->
<section>
	<div class="container mt-5 pb-4">
		<!-- Feedback do que ocorreu -->
		<!-- Menssagem enviada -->
		<div id="sendmessage"></div>
		<!-- Erro de envio -->
		<div id="errormessage"></div>				
		<form class="container-fluid" action="" method="post">
			<div class="form-group row justify-content-center">
				<div class="col-md-2 px-0">
					<h4 class="text-center">Dados do Funcionário</h4>
				</div>
			</div>			
			<div class="form-group row justify-content-center">
				<div class="col-md-2 px-0">											
					<label for="matricula" class="col-sm-2 col-form-label normal-font">Telefone</label>
				</div>
				<div class="col-md-4 px-0">	
					<input type="text" name="telefone" id="telefone" class="form-control" placeholder="(00)0000-0000" required>
				</div>
			</div>
			<div class="form-group row justify-content-center">
				<div class="col-md-2 px-0">											
					<label for="matricula" class="col-sm-2 col-form-label normal-font">Celular</label>
				</div>
				<div class="col-md-4 px-0">	
					<input type="text" name="celular" id="celular" class="form-control" placeholder="(00)00000-0000" required>
				</div>
			</div>
			<div class="form-group row justify-content-center">
				<div class="col-md-2 px-0">
					<label for="curso" class="col-sm-2 col-form-label normal-font">Setor</label>
				</div>	
				<div class="col-md-4 px-0">									
					<select name="setor" id="setor" class="form-control" required>
						<option value="" disabled selected>Selecione o setor</option>
						<option value="1">Recursos humanos</option>
						<option value="2">Serviços gerais</option>
						<option value="3">Administração</option>
						<option value="4">Desenvolvimento</option>								
					</select>
				</div>						
			</div>		
			<div class="form-group row justify-content-center">
				<div class="col-md-2 px-0">
					<label for="cargo" class="col-sm-2 col-form-label normal-font">Cargo</label>
				</div>
				<div class="col-md-4 px-0">	
					<select name="cargo" id="cargo" class="form-control" required onchange="prof();">
						<option value="" disabled selected>Selecione o cargo</option>
						<option value="1">Secretário</option>
						<option value="2">Auxiliar de Serviços Gerais</option>
						<option value="3">Professor</option>
						<option value="4">Cozinheiro</option>								
					</select>
				</div>
			</div>
			<div class="form-group row justify-content-center">
				<div class="col-md-2 px-0">
					<label for="cargo" class="col-sm-2 col-form-label normal-font">Função</label>
				</div>
				<div class="col-md-4 px-0">	
					<input type="text" name="funcao" id="funcao" class="form-control" placeholder="Função" required>							
				</div>
			</div>
			<div class="form-group row justify-content-center">
				<div class="col-md-2 px-0">
					<label for="curso" class="col-sm-2 col-form-label normal-font">Vínculo</label>
				</div>	
				<div class="col-md-4 px-0">									
					<select name="vinculo" id="vinculo" class="form-control" required>
						<option value="" disabled selected>Selecione o vínculo</option>
						<option value="1">Concursado</option>
						<option value="2">Contratado</option>
						<option value="3">Nomeado</option>
						<option value="4">Tercearizado</option>																			
					</select>
				</div>						
			</div>						
			<div class="form-group row justify-content-center">
				<div class="col-md-2 px-0">
					<label for="funcao" class="col-sm-2 col-form-label normal-font">Colaborador</label>
				</div>	
				<div class="col-md-4 px-0"  id="colaborador" required>																	    
						<label >Sim
							<input type="radio" name="colaborador" value="1"  onclick="show();">
						</label>
						<label>Não
							<input type="radio" name="colaborador" value="0"  onclick="hide();"  checked="checked" >								
						</label>												
				</div>						
			</div>	
			<div id="colaboracao" class="form-group row justify-content-center" hidden>
				<div class="col-md-2 px-0">
					<label for="cargo" class="col-sm-2 col-form-label normal-font">Colaboração</label>
				</div>
				<div class="col-md-4 px-0">	
					<textarea type="text" name="colaboracao" id="colaboracao" value="" class="form-control" placeholder="Area de colaborção"></textarea>							
				</div>
			</div>
			<div id="dados_prof" hidden>
				<div class="form-group row justify-content-center">
					<div class="col-md-2 px-0">
						<label for="area" class="col-sm-2 col-form-label normal-font">Área</label>
					</div>	
					<div class="col-md-4 px-0">								
						<select name="area" id="area" class=" form-control" required>
							<option value="" disabled selected>Selecione a área de formação</option>
							<option value="1">Português</option>
							<option value="2">Matemática</option>
							<option value="3">Informática</option>
							<option value="4">Geografia</option>
						</select>
					</div>						
				</div>
				<div class="form-group row justify-content-center">
					<div class="col-md-2 px-0">
						<label for="turno" class="col-sm-2 col-form-label normal-font">Formação</label>
					</div>	
					<div class="col-md-4 px-0">								
						<select name="formacao" id="formacao" class=" form-control" required>
							<option value="" disabled selected>Selecione a formação acadêmica</option>
							<option value="1">Médio</option>
							<option value="2">Superior</option>
							<option value="3">Especialização</option>
							<option value="4">Mestrado</option>
							<option value="5">Doutorado</option>
							<option value="6">Pós-doutorado</option>
						</select>
					</div>						
				</div>
				<div class="form-group row justify-content-center">
					<div class="col-md-2 px-0">
						<label for="lattes" class="col-sm-2 col-form-label normal-font">Lattes</label>
					</div>
					<div class="col-md-4 px-0">	
						<input type="text" name="lattes" id="lattes" class="form-control" placeholder="Link para o currículo Lattes" required>							
					</div>
				</div>
			</div>
			<div class="form-group row justify-content-center">
				<div class="col-md-6 px-0 d-flex justify-content-end">						
					<button type="button" name="button" id="button" class="col-md-8 btn btn-success">Cadastrar</button>
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
	function show(){
					document.getElementById('colaboracao').hidden=false;
				}
				function hide(){
					document.getElementById('colaboracao').hidden=true;
				}
				function prof(){
					if(document.getElementById('cargo').value == 3)
					{
						document.getElementById('dados_prof').hidden=false;
					}
					else{
						document.getElementById('dados_prof').hidden=true;
					}
				}

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