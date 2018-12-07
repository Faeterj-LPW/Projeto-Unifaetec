<?= $this->element('/UNIFAETEC/pushmenu') ?>

<style scoped>
	/* Tamanho dos ícones */
	a.d-flex .fa, a.d-flex .fas, a.d-flex .far {
		font-size: 3rem;
		color: #00a885;
	}

	/* Cor dos ícones */
	a.d-flex {
		color: #337ab7;
		text-decoration: none;
	}

	a.d-flex:hover, a.d-flex:focus {
		color: #337ab7;
		filter: brightness(65%);
	}
</style>

<!-- Estatística -->
<section id="features" class="features">			
	<div class="container mt-5 py-4">
		<div class="row">
			<a href="estatisticas_nsa.php" class="col-md-4 d-flex pb-4">
				<div class="d-flex pr-3">
					<i class="fas fa-users align-self-center"></i>
				</div>
				<div class="d-flex">
					<h6 class="m-0 align-self-center">Número de Servidores Atendidos</h6>
				</div>
			</a>
			<a href="estatisticas_lre.php" class="col-md-4 d-flex pb-4">
				<div class="d-flex pr-3">
					<i class="fas fa-globe align-self-center"></i>
				</div>
				<div class="d-flex">
					<h6 class="m-0 align-self-center">Locais de Realizações de Eventos</h6>
				</div>
			</a>
			<a href="estatisticas_tac.php" class="col-md-4 d-flex pb-4">
				<div class="d-flex pr-3">
					<i class="fas fa-graduation-cap align-self-center"></i>
				</div>
				<div class="d-flex">
					<h6 class="m-0 align-self-center">Trabalhos Acadêmicos Cadastrados</h6>
				</div>
			</a>
		</div>						
	</div>
</section>
<!-- Fim da Estatística -->

