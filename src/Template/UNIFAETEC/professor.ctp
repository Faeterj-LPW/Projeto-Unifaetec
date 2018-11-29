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
					<h2>Dados do Professor</h2>
				</div>
			</div>					
			<div id="cntr-row-1" class="form-group row">
				<div class="col-md-3">											
					<label for="matricula" class="col-sm-2 col-form-label normal-font">Matrícula</label>
				</div>
				<div class="form-group">
					<input type="text" name="matricula" id="id" class="form-control form-control-lg" style="width:335px;" placeholder="0000000000000">
				</div>
			</div>
			<div id="cntr-row-1" class="form-group row">
				<div class="col-md-3">
					<label for="area" class="col-sm-2 col-form-label normal-font">Área</label>
				</div>
				<div class="form-group">
					<input type="text" name="atuacao" id="function" class="form-control form-control-lg" style="width:335px;" placeholder="Atuação">							
				</div>
			</div>
			<div id="cntr-row-1" class="form-group row">
				<div class="col-md-3">
					<label for="turno" class="col-sm-2 col-form-label normal-font">Unidade</label>
				</div>	
				<div class="form-group">							
					<select name="unidade" id="unit" class="form-control form-control-lg" style="width:335px;">
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
					<label for="lattes" class="col-sm-2 col-form-label normal-font">Lattes</label>
				</div>
				<div class="form-group">
					<input type="text" name="lattes" id="lattes" class="form-control form-control-lg" style="width:335px;" placeholder="Link para o currículo Lattes">							
				</div>
			</div>
			<div id="cntr-row-1" class="form-group row">
				<div class="col-md-3">
					<label for="enviar" class="col-sm-2 col-form-label">&nbsp;</label>
				</div>
				<div class="form-group">								
					<button type="button" name="button" id="button" class="btn btn-success" style="font-size:1.2em;width:335px;">Cadastrar</button>
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
	<br><br><br><br><br>
	<br><br><br><br><br>
</section>
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
<!-- Fim do formulário de cadastro -->