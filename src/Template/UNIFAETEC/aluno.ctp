<!-- Formulário de cadastro -->
<section>
	<div class="container">
		<br><br>
		<!-- Feedback do que ocorreu -->
		<!-- Menssagem enviada -->
		<div id="sendmessage"></div>
		<!-- Erro de envio -->
		<div id="errormessage"></div>				
		<form action="" method="post">
			<div id="cntr-row-1" class="form-group row">
				<div class="col-md-3">
					<label for="titulo" class="col-sm-2 col-form-label">&nbsp;</label>
				</div>
				<div class="form-group">
					<h2>Dados do Aluno</h2>
				</div>
			</div>					
			<div id="cntr-row-1" class="form-group row">
				<div class="col-md-3">											
					<label for="matricula" class="col-sm-2 col-form-label normal-font">Matrícula</label>
				</div>
				<div class="form-group">
					<input type="text" name="matricula" id="id" class="form-control form-control-lg" style="width:320px;" placeholder="0000000000000">
				</div>
			</div>
			<div id="cntr-row-1" class="form-group row">
				<div class="col-md-3">
					<label for="unidade" class="col-sm-2 col-form-label normal-font">Unidade</label>
				</div>
				<div class="form-group">								
					<select name="unidade" id="branch" class="form-control form-control-lg" style="width:320px;">
						<option value="" disabled selected>Selecione a unidade</option>
						<option value="">Campos Goytacazes</option>
						<option value="">Duque de Caxias</option>
						<option value="">Rio de Janeiro</option>
						<option value="">Três Rios</option>
					</select>
				</div>
			</div>
			<div id="cntr-row-1" class="form-group row">
				<div class="col-md-3">
					<label for="turno" class="col-sm-2 col-form-label normal-font">Turno</label>
				</div>	
				<div class="form-group">							
					<select name="turno" id="shift" class="form-control form-control-lg" style="width:320px;">
						<option value="" disabled selected>Selecione o turno</option>
						<option value="">Manhã</option>
						<option value="">Tarde</option>
						<option value="">Noite</option>
					</select>
				</div>						
			</div>
			<div id="cntr-row-1" class="form-group row">
				<div class="col-md-3">
					<label for="curso" class="col-sm-2 col-form-label normal-font">Curso</label>
				</div>	
				<div class="form-group">								
					<select name="curso" id="degree" class="form-control form-control-lg" style="width:320px;">
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
			<div id="cntr-row-1" class="form-group row">
				<div id="page-top" class="col-md-3">
					<label for="email" class="col-sm-2 col-form-label">&nbsp;</label>
				</div>
				<div class="form-group">								
					<button type="button" name="button" id="button" class="btn btn-success" style="font-size:1.2em;width:320px;">Cadastrar</button>
				</div>
			</div>
		</form>
	</div>
	<br><br><br><br>
	<br><br><br><br><br>
</section>
<!-- Fim do formulário de cadastro -->