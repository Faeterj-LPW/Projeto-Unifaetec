<?php 

$this->Html->css(['/css/font-awesome.min.css', '/css/bootstrap.css'], ['block' => true]);
$this->Html->script('/ckeditor/ckeditor.js', ['block' => true]);

?>

<style scoped>
	#navfit {
		padding-top:10px;
	}
</style>

<!-- Formulário de Cadastro -->
<section>
	<div class="container">
		<!-- Feedback do que ocorreu -->
		<!-- Menssagem enviada -->
		<div id="sendmessage"></div>
		<!-- Erro de envio -->
		<div id="errormessage"></div>
		<br>
		<form action="" method="post">
			<div style="text-align:center;width:100%;">
				<table class="table no-border" width="100%">
					<tr>
						<th class="rightlevel righttext normal-font" style="vertical-align:top;" width="10%">Título</th>
						<td class="lefttext">
							<div>
								<input type="text" name="titulo" id="title" class="form-control form-control-lg" placeholder="Título do artigo">
							</div>
						</td>
					</tr>
					<tr>
						<th class="rightlevel righttext normal-font" style="vertical-align:top;">Palavras-chave</th>
						<td class="lefttext">
							<div>
								<input type="text" name="descricao" id="description" class="form-control form-control-lg" placeholder="Descrição do artigo">
							</div>
						</td>
					</tr>
					<tr>
						<th class="rightlevel righttext normal-font" style="vertical-align:top;">Texto</th>
						<td class="lefttext">
							<div>
								<textarea type="text" name="editor1" id="editor1" class="form-control"></textarea>
							</div>
						</td>
					</tr>
					<tr>
						<td></td>
						<td>
							<div id="page-top">
								<table class="table no-border" width="100%">
									<tr>
										<td class="lefttext">
											<ul class="list-inline">
												<li style="font-size:1em;">
													<a href="#"><img src="img/upload.png" border="0" height="35" width="35" data-toggle="tooltip"
														 data-placement="right" title="Submeter artigo"></a>
												</li>
											</ul>
										</td>
										<td class="righttext">
											<button type="button" name="button" id="button" class="btn btn-success" style="font-size:1.2em;width:150px;">Cadastrar</button>
										</td>
									</tr>
								</table>
							</div>
						</td>
					</tr>
				</table>
			</div>
		</form>
	</div>
	<br><br><br><br><br><br>
</section>
<!-- Fim do formulário de Cadastro -->

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

<?php $this->append('script'); ?>
<!-- Script do ckeditor -->
<script type="text/javascript">
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
