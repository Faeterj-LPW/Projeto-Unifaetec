<?php 

$this->Html->css('/css/font-awesome.min.css', ['block' => true]);

?>

<!-- Formulário -->
<div class="container mt-5">
	<form action="" method="post">
		<div class="form-row d-flex justify-content-center">
			<div class="col-md-3 mb-3">
				<label for="user">Usuário</label>
				<input type="text" id="user" class="form-control form-control-lg" placeholder="Digite o usuário">
			</div>
			<div class="col-md-3 mb-3">
				<label for="senha">Senha</label>
				<input type="password"  id="password" class="form-control form-control-lg" placeholder="Digite a senha">
			</div>
		</div>
		<div class="form-row d-flex justify-content-center">
			<div class="col-md-6 mb-3">
				<label for="tipoDoc">Tipo de Documento</label>
				<select id="tipoDoc" class="form-control form-control-lg">
					<option>Declaração</option>
					<option>Certificado de Conclusão de Curso</option>
					<option>Histórico</option>
					<option>Diploma</option>
					<option>Carteirinha</option>
				</select>
			</div>
		</div>
		<div class="form-row d-flex justify-content-center">
			<div class="col-md-0 mb-3">
				<button type="button" class="btn btn-success btn-lg" style="font-size:1.2em;width:150px;">Gerar</button>
			</div>
		</div>
	</form>
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