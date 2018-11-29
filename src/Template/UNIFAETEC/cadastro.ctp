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
				<div class="col-md-4">
					<label for="titulo" class="col-sm-2 col-form-label">&nbsp;</label>
				</div>
				<div class="form-group">
					<h2>Dados do Usuário</h2>
				</div>
			</div>					
			<div id="cntr-row-2" class="form-group row">
				<div class="col-md-4">											
					<label for="nome" class="col-sm-2 col-form-label normal-font">Nome</label>
				</div>
				<div class="form-group">
					<input type="text" name="nome" id="name" class="form-control form-control-lg" style="width:320px;" placeholder="Nome completo">
				</div>
			</div>
			<div id="cntr-row-2" class="form-group row">
				<div class="col-md-4">											
					<label for="cpf" class="col-sm-2 col-form-label normal-font">CPF</label>
				</div>
				<div class="form-group">
					<input type="text" name="cpf" id="cpf" class="form-control form-control-lg" style="width:320px;" placeholder="000.000.000-00">
				</div>
			</div>
			<div id="cntr-row-2" class="form-group row">
				<div class="col-md-4">
					<label for="nascimento" class="col-sm-2 col-form-label normal-font">Nascimento</label>
				</div>
				<div class="form-group">								
					<input type="date" name="nascimento" id="birth" class="form-control form-control-lg" style="width:320px;" placeholder="dd/mm/aaaa">
				</div>
			</div>
			<div id="cntr-row-2" class="form-group row">
				<div class="col-md-4">
					<label for="email" class="col-sm-2 col-form-label normal-font">Email</label>
				</div>	
				<div class="form-group">							
					<input type="email" name="email" id="email" class="form-control form-control-lg" style="width:320px;" placeholder="email@faeterj-rio.edu.br">
				</div>						
			</div>
			<div id="cntr-row-2" class="form-group row">
				<div class="col-md-4">
					<label for="senha" class="col-sm-2 col-form-label normal-font">Senha</label>
				</div>	
				<div class="form-group">							
					<input type="password" name="senha" id="password" placeholder="********" class="form-control form-control-lg" style="width:320px;">
				</div>						
			</div>
			<div id="cntr-row-2" class="form-group row">
				<div class="col-md-4">
					<label for="funcao" class="col-sm-2 col-form-label normal-font">&nbsp;</label>
				</div>	
				<div class="form-group">												    
					<label class="dot"> Aluno
						<input type="radio" name="radio" checked="checked">
						<span class="radiodot"></span>
					</label>
					<label class="dot"> Professor
						<input type="radio" name="radio">
						<span class="radiodot"></span>
					</label>
					<label class="dot"> Funcionário
						<input type="radio" name="radio">
						<span class="radiodot"></span>
					</label>
				</div>						
			</div>
			<div id="cntr-row-2" class="form-group row">
				<div id="page-top" class="col-md-4">
					<label for="enviar" class="col-sm-2 col-form-label">&nbsp;</label>
				</div>
				<div class="form-group">								
					<button type="button" name="button" id="button" class="btn btn-success" style="font-size:1.2em;width:320px;">Próximo Passo >></button>
				</div>
			</div>
		</form>				
	</div>
	<br><br>
	<br><br><br>
</section>
<!-- Fim do formulário de cadastro -->