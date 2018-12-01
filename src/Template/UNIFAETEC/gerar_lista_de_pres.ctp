<!-- Formulário -->
<div class="container mt-4">
	<form>
		<div class="form-row d-flex justify-content-center">
			<div class="col-md-3 mb-3">
				<label for="status">Selecione a Atividade</label>
				<select class="form-control form-control-lg" id="atv">
					<option>Atividade 01</option>
					<option>Atividade 02</option>
					<option>Atividade 03</option>
					<option>Atividade 04</option>
				</select>
			</div>
		</div>
		<div class="form-row d-flex justify-content-center">
			<div class="col-md-0 mb-3">
				<div class="card" style="width:27rem;">
					<div class="card-body">
						<h5 class="card-title">Atividade 02</h5>
						<p class="card-text"><b>Descrição da atividade</b></p>
					</div>
					<table class="table text-center">
						<thead>
							<tr>
								<th scope="col">#</th>
								<th scope="col">Nome</th>
								<th scope="col">Presença</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<th scope="row">1</th>
								<td>Mark</td>
								<td>
									<label class="dot">
										<input type="radio" name="radio" checked="checked">
										<span class="radiodot"></span>
									</label>
								</td>
							</tr>
							<tr>
								<th scope="row">2</th>
								<td>Jacob</td>
								<td>
									<label class="dot">
										<input type="radio" name="radio">
										<span class="radiodot"></span>
									</label>
								</td>
							</tr>
							<tr>
								<th scope="row">3</th>
								<td>Larry</td>
								<td>
									<label class="dot">
										<input type="radio" name="radio">
										<span class="radiodot"></span>
									</label>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
		<div class="form-row d-flex justify-content-center">
			<div class="col-md-0 mb-3">
				<button type="button" class="btn btn-success" style="font-size:1.2em;width:270px;">Gerar PDF</button>
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