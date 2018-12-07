<?php 

// Carregamento de script do CKEditor
$this->Html->script('/lib/ckeditor/ckeditor.js', ['block' => true]);

?>

<!-- Formulário de Cadastro -->
<div class="container mt-5 pb-4">
	<form class="form">
		<div class="forn-row form-group">
			<div class="col-md-10 mx-auto">
				<label for="Nome">Título</label>
				<input type="text" name="titulo" id="titulo" class="form-control" 
						placeholder="Título do artigo" required>
			</div>
		</div>
		<div class="forn-row form-group">
			<div class="col-md-10 mx-auto">
				<label for="CPF">Palavras-chave</label>
				<input type="text" name="descricao" id="description" class="form-control" 
						placeholder="Descrição do artigo" required>
			</div>
		</div>
		<div class="forn-row form-group">
			<div class="col-md-10 mx-auto">
				<label for="DataNasc">Texto</label>
				<textarea type="text" name="editor1" id="editor1" class="form-control" required></textarea>
			</div>
		</div>
		<div class="forn-row form-group">
			<div class="col-md-10 mx-auto mt-4">
				<i class="fas fa-file-upload pl-2" style="font-size: 2rem;" data-toggle="tooltip" title="Submeter artigo"></i>
				<button type="button" name="button" id="button" class="btn btn-success px-4 float-right">Cadastrar</button>
			</div>
		</div>
	</form>
</div>
<!-- Fim do formulário de Cadastro -->

<?php $this->append('script'); ?>
<!-- Script do ckeditor -->
<script>
	window.onload = function () {
		CKEDITOR.replace('editor1');
	};
</script>
<!-- Script da tooltip -->
<script>
	$(document).ready(function () {
		$('[data-toggle="tooltip"]').tooltip();
	});
</script>
<?php $this->end(); ?>
