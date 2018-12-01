<?php 

$this->Html->css('/css/font-awesome.min.css', ['block' => true]);

?>

<!-- Formulário de pesquisa -->
<br><br><br><br>
<div class="container mt-5">
	<form>
		<div class="form-row d-flex justify-content-center">
			<div class="col-md-3 mb-3">
				<label for="busca" class="normal-font">Consultar</label>
				<div class="input-group mb-2">
					<input type="text" class="form-control form-control-lg" id="autor" placeholder="Autor">
				</div>					
				<div class="input-group mb-2">
					<input type="text" class="form-control form-control-lg" id="titulo" placeholder="Título">
				</div>
			</div>
		</div>
		<div class="form-row d-flex justify-content-center">
			<div class="col-md-3 mb-3">
				<button type="button" class="btn btn-success btn-sm" style="font-size:1.2em;width:270px;">Pesquisar</button>
			</div>
		</div>
	</form>
</div>
<!-- Fim do formulário de pesquisa -->

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