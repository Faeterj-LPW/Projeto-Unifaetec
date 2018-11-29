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
					<h2>Dados do Funcionário</h2>
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
					<label for="cargo" class="col-sm-2 col-form-label normal-font">Cargo</label>
				</div>
				<div class="form-group">
					<input type="text" name="cargo" id="function" class="form-control form-control-lg" style="width:335px;" placeholder="Função">							
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
					<label for="enviar" class="col-sm-2 col-form-label">&nbsp;</label>
				</div>
				<div class="form-group">								
					<button type="button" name="button" id="button" class="btn btn-success" style="font-size:1.2em;width:335px;">Cadastrar</button>
				</div>
			</div>
		</form>
		<br><br><br><br><br><br>
		<br><br><br><br><br><br>
	</div>				
</section>
<!-- Fim do formulário de cadastro -->