<?php 

// Preloader do menu incompatível com versões mais recentes do jQuery
$this->Html->script(['/lib/jquery/jquery-1.11.2.min.js', '/js/asset.js'], ['block' => true]);

?>

<!-- Preloader -->
<div id="loading">
	<div id="loading-center">
		<div id="loading-center-absolute">
			<div class="object" id="object_one"></div>
			<div class="object" id="object_two"></div>
			<div class="object" id="object_three"></div>
			<div class="object" id="object_four"></div>
		</div>
	</div>
</div>
<!--Fim do Preloader -->

<style scoped>
	/* Estilo dos ícones */
	a.fa, a .fas, a .far {
		font-size: 2.5rem;
		color: #00a885;
	}

	/* Estilo dos links */
	a {
		color: #337ab7;
		text-decoration: none;
	}

	a:hover, a:focus {
		color: #337ab7;
		filter: brightness(65%);
	}

	/* Tamanho dos textos */
	h5 {
		font-size: 0.9rem;
	}

	p.h6 {
		font-size: 0.9rem;
	}	
</style>

<!-- Itens do Menu -->
<section id="features" class="features">			
	<div class="container mt-5 pb-5">
		<!-- Primeira Linha -->
		<div class="row">
			<a href="cadastrar_atv_acd.php" class="col-lg-3 d-flex pb-5">
				<div class="d-flex pr-3 pt-2">
					<i class="fas fa-university"></i>
				</div>
				<div class="d-flex flex-column">
					<h5 class="m-0 mb-2 font-weight-bold">Cadastrar Atividade Acadêmica</h5>
					<p class="m-0 h6">Cadastramento de atividades a serem realizadas.</p>
				</div>
			</a>
			<a href="cadastrar_equipe.php" class="col-lg-3 d-flex pb-5">
				<div class="d-flex pr-3 pt-2">
					<i class="fas fa-users"></i>
				</div>
				<div class="d-flex flex-column">
					<h5 class="m-0 mb-2 font-weight-bold">Cadastrar Equipe</h5>
					<p class="m-0 h6">Cadastramento de atividades a serem realizadas.</p>
				</div>
			</a>
			<a href="cad_part_ev_ext.php" class="col-lg-3 d-flex pb-5">
				<div class="d-flex pr-3 pt-2">
					<i class="fas fa-external-link-alt"></i>
				</div>
				<div class="d-flex flex-column">
					<h5 class="m-0 mb-2 font-weight-bold">Cadastrar Participação em Evento Externo</h5>
					<p class="m-0 h6">Cadastramento de atividades a serem realizadas.</p>
				</div>
			</a>
			<a href="trabalhos.php" class="col-lg-3 d-flex pb-5">
				<div class="d-flex pr-3 pt-2">
					<i class="fas fa-database"></i>
				</div>
				<div class="d-flex flex-column">
					<h5 class="m-0 mb-2 font-weight-bold">Cadastro de Trabalhos acadêmicos</h5>
					<p class="m-0 h6">Cadastramento de atividades a serem realizadas.</p>
				</div>
			</a>
		</div>		
		<!-- Segunda Linha -->
		<div class="row justify-content-center">
			<a href="conf_presenca.php" class="col-lg-3 d-flex pb-5">
				<div class="d-flex pr-3 pt-2">
					<i class="far fa-id-card"></i>
				</div>
				<div class="d-flex flex-column">
					<h5 class="m-0 mb-2 font-weight-bold">Confirmar Presença de Servidores</h5>
					<p class="m-0 h6">Cadastramento de atividades a serem realizadas.</p>
				</div>
			</a>
			<a href="consultar_bibl_virt.php" class="col-lg-3 d-flex pb-5">
				<div class="d-flex pr-3 pt-2">
					<i class="fas fa-book"></i>
				</div>
				<div class="d-flex flex-column">
					<h5 class="m-0 mb-2 font-weight-bold">Consultar Biblioteca Virtual</h5>
					<p class="m-0 h6">Cadastramento de atividades a serem realizadas.</p>
				</div>
			</a>
			<a href="consultar_historico_atv.php" class="col-lg-3 d-flex pb-5">
				<div class="d-flex pr-3 pt-2">
					<i class="fas fa-history"></i>
				</div>
				<div class="d-flex flex-column">
					<h5 class="m-0 mb-2 font-weight-bold">Consultar Histórico de Atividades</h5>
					<p class="m-0 h6">Cadastramento de atividades a serem realizadas.</p>
				</div>
			</a>
			<a href="controle_de_agenda.php" class="col-lg-3 d-flex pb-5">
				<div class="d-flex pr-3 pt-2">
					<i class="fas fa-calendar-alt"></i>
				</div>
				<div class="d-flex flex-column">
					<h5 class="m-0 mb-2 font-weight-bold">Controle de Agenda de Atividades</h5>
					<p class="m-0 h6">Cadastramento de atividades a serem realizadas.</p>
				</div>
			</a>
		</div>	
		<!-- Terceira Linha -->
		<div class="row justify-content-center">
			<a href="emitir_cert.php" class="col-lg-3 d-flex pb-5">
				<div class="d-flex pr-3 pt-2">
					<i class="fas fa-certificate"></i>
				</div>
				<div class="d-flex flex-column">
					<h5 class="m-0 mb-2 font-weight-bold">Emitir Certificado de Participação</h5>
					<p class="m-0 h6">Cadastramento de atividades a serem realizadas.</p>
				</div>
			</a>
			<a href="estatisticas.php" class="col-lg-3 d-flex pb-5">
				<div class="d-flex pr-3 pt-2">
					<i class="fas fa-chart-bar"></i>
				</div>
				<div class="d-flex flex-column">
					<h5 class="m-0 mb-2 font-weight-bold">Estatísticas</h5>
					<p class="m-0 h6">Cadastramento de atividades a serem realizadas.</p>
				</div>
			</a>
			<a href="gerar_decl_comp.php" class="col-lg-3 d-flex pb-5">
				<div class="d-flex pr-3 pt-2">
					<i class="far fa-file"></i>
				</div>
				<div class="d-flex flex-column">
					<h5 class="m-0 mb-2 font-weight-bold">Gerar Declaração de Comparecimento</h5>
					<p class="m-0 h6">Cadastramento de atividades a serem realizadas.</p>
				</div>
			</a>
			<a href="gerar_doc.php" class="col-lg-3 d-flex pb-5">
				<div class="d-flex pr-3 pt-2">
					<i class="fas fa-file-alt"></i>
				</div>
				<div class="d-flex flex-column">
					<h5 class="m-0 mb-2 font-weight-bold">Gerar Documento</h5>
					<p class="m-0 h6">Cadastramento de atividades a serem realizadas.</p>
				</div>
			</a>
		</div>	
		<!-- Quarta Linha -->
		<div class="row justify-content-center">
			<a href="gerar_lista_de_pres.php" class="col-lg-3 d-flex pb-5">
				<div class="d-flex pr-3 pt-2">
					<i class="far fa-address-book"></i>
				</div>
				<div class="d-flex flex-column">
					<h5 class="m-0 mb-2 font-weight-bold">Gerar Lista de Presença</h5>
					<p class="m-0 h6">Cadastramento de atividades a serem realizadas.</p>
				</div>
			</a>
			<a href="inscricao_em_ativ_acad.php" class="col-lg-3 d-flex pb-5">
				<div class="d-flex pr-3 pt-2">
					<i class="fas fa-user-plus"></i>
				</div>
				<div class="d-flex flex-column">
					<h5 class="m-0 mb-2 font-weight-bold">Inscrição em Atividade Acadêmica</h5>
					<p class="m-0 h6">Cadastramento de atividades a serem realizadas.</p>
				</div>
			</a>
			<a href="index.php" class="col-lg-3 d-flex pb-5">
				<div class="d-flex pr-3 pt-2">
					<i class="fas fa-sign-out-alt"></i>
				</div>
				<div class="d-flex flex-column">
					<h5 class="m-0 mb-2 font-weight-bold">Sair</h5>
					<p class="m-0 h6">Cadastramento de atividades a serem realizadas.</p>
				</div>
			</a>
		</div>
	</div>	
</section>
<!-- Fim de Itens do Menu -->