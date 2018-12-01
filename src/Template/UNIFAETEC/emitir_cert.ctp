<!--Formulário-->
<div class="container mt-5">
	<br><br><br><br>
	<form>
		<div class="form-row d-flex justify-content-center">
			<div class="col-md-3 mb-3">
				<label for="DataEvento">Data do Evento</label>
				<input type="date" class="form-control form-control-lg" name="DataEvento" required>
			</div>
			<div class="col-md-3 mb-3">
				<label for="Nome">Nome do Servidor</label>
				<input type="text" class="form-control form-control-lg" name="Nome" placeholder="ex: Maria das Graças" required>
			</div>
			<div class="col-md-3 mb-3">
				<label for="Evento">Selecionar o Evento</label>
				<select class="form-control form-control-lg" style="height:34px;" name="Evento" required>
					<option>Evento 01</option>
					<option>Evento 02</option>
					<option>Evento 03</option>
					<option>Evento 04</option>
				</select>
			</div>
		</div>
		<div class="form-row d-flex justify-content-center">
			<div class="col-md-0 mb-3">
				<!--Botão-->
				<button type="button" class="btn btn-success" style="font-size:1.2em;width:140px;">Gerar PDF</button>
			</div>
		</div>
	</form>
</div>
<!--Fim do Formulário-->

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