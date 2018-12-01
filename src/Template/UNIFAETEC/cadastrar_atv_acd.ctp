<?php 

$this->Html->script('/main.js', ['block' => true]);

?>

<!-- Formulário -->
<div class="container mt-5">
	<br><br>
	<form>				
		<div class="form-row d-flex justify-content-center">
			<!--Nome-->
			<div class="col-md-3 mb-3">
				<label for="nomeAtv" class=" normal-font">Nome</label>
				<input type="text" class="form-control form-control-lg" id="nomeAtv" placeholder="Nome da atividade">
			</div>
			<!--Local-->
			<div class="col-md-3 mb-3">
				<label for="localAtv" class=" normal-font">Local</label>
				<input type="text" class="form-control form-control-lg" id="localAtv" placeholder="Local">
			</div>
		</div>
		<div class="form-row d-flex justify-content-center">
			<!--Tipo-->
			<div class="col-md-6 mb-3">
				<label for="tipoEvento" class=" normal-font">Tipologia do Evento</label>
				<select class="form-control form-control-lg" id="tipoEvento">
					<option>Palestra</option>
					<option>Workshop</option>
					<option>Reunião</option>
					<option>Debate</option>
					<option>Outro</option>
				</select>
			</div>
		</div>
		<div class="form-row d-flex justify-content-center">
			<!--Data-->
			<div class="col-md-3 mb-3">
				<label for="data" class=" normal-font">Data</label>
				<input type="date" class="form-control form-control-lg" id="data">
			</div>
			<!--Hora-->
			<div class="col-md-3 mb-3">
				<label for="hora" class=" normal-font">Horário</label>
				<input type="datetime" class="form-control form-control-lg" id="hora">
			</div>
		</div>
		<div class="form-row d-flex justify-content-center">
			<!--Detalhes Atv-->
			<div class="col-md-6 mb-3">
				<label for="detAtividade" class=" normal-font">Mais informações sobre a atividade</label>
				<textarea class="form-control form-control-lg" id="detAtividade"></textarea>
			</div>
		</div>
		<!--Botões-->
		<div class="form-row d-flex justify-content-center">
			<div class="col-md-2 mb-3">
				<button type="button" class="btn btn-success" style="font-size:1.2em;width:200px;">Cadastrar</button>
			</div>
		</div>
	</form>
	<br><br><br><br>
	<br><br><br>
</div>
<!-- Fim do formulário -->

<!-- Rodapé -->
<!---Botão Voltar--->
<div id="btnbck">
	<a href="menu.php">
	<div class="imgbtn">
		<img style="width:40%;" src="img/voltar.png">
	</div>
	<div class="txtbtn">
		<small>Voltar ao Menu</small>
	</div>
	</a>
</div>		
<footer id="fix-footer" style="height:145px;">
	<div id="navfit" style="bottom:70px;">
		<small><strong>Faetec-RJ</strong> - Secretaria de Ciência, Tecnologia e Inovação.</small>			
	</div>
</footer>		
<!-- Fim do Rodapé -->