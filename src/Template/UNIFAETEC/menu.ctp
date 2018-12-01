<?php 

$this->Html->css(['/css/font-awesome.min.css', '/css/bootstrap.css'], ['block' => true]);
$this->Html->script(['/js/jquery-1.11.2.min.js', '/js/asset.js'], ['block' => true]);

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
	#navfit {
		padding-top:10px;
	}
</style>

<!-- Itens do Menu -->
<section>
	<div class="container">
		<br>
		<!-- Primeira Linha -->
		<div class="row">
			<div class="main_features roomy-13">
				<div class="col-md-3">
					<a href="cadastrar_atv_acd.php" id="no-ol">
						<div class="features_item">
							<div class="f_item_icon">
								<i class="fa fa-university"></i>
							</div>
							<div class="f_item_text">
								<h4>Cadastrar Atividade Acadêmica</h4>
								<p>Cadastramento de atividades a serem realizadas.</p>
							</div>
						</div>
					</a>
				</div>
				<div class="col-md-3">
					<a href="cadastrar_equipe.php" id="no-ol">
						<div class="features_item">
							<div class="f_item_icon">
								<i class="fa fa-users"></i>
							</div>
							<div class="f_item_text">
								<h4>Cadastrar Equipe</h4>
								<p>Cadastro e consulta de atividades.</p>
							</div>
						</div>
					</a>
				</div>
				<div class="col-md-3">
					<a href="cad_part_ev_ext.php" id="no-ol">
						<div class="features_item">
							<div class="f_item_icon">
								<i class="fa fa-external-link"></i>
							</div>
							<div class="f_item_text">
								<h4>Cadastrar Participação em Evento Externo</h4>
								<p>Solicitação de participação em evento externo.</p>
							</div>
						</div>
					</a>
				</div>
				<div class="col-md-3">
					<a href="trabalhos.php" id="no-ol">
						<div class="features_item">
							<div class="f_item_icon">
								<i class="fa fa-database"></i>
							</div>
							<div class="f_item_text">
								<h4>Cadastro de Trabalhos acadêmicos</h4>
								<p>Inserção de Textos, Artigos, Monografia ou TCC.</p>
							</div>
						</div>
					</a>
				</div>
			</div>						
		</div>
		<!-- Segunda Linha -->
		<div class="row">
			<div class="main_features roomy-13">
				<div class="col-md-3">
					<a href="conf_presenca.php" id="no-ol">
						<div class="features_item">
							<div class="f_item_icon">
								<i class="fa fa-address-card-o"></i>									
							</div>
							<div class="f_item_text">
								<h4>Confirmar Presença de Servidores</h4>
								<p>Confirmação de presença em eventos cadastrados.</p>
							</div>
						</div>
					</a>
				</div>
				<div class="col-md-3">
					<a href="consultar_bibl_virt.php" id="no-ol">
						<div class="features_item">
							<div class="f_item_icon">
								<i class="fa fa-book"></i>
							</div>
							<div class="f_item_text">
								<h4>Consultar Biblioteca Virtual</h4>
								<p>Pesquisar livros disponíveis.</p>
							</div>
						</div>
					</a>
				</div>
				<div class="col-md-3">
					<a href="consultar_historico_atv.php" id="no-ol">
						<div class="features_item">
							<div class="f_item_icon">
								<i class="fa fa-history"></i>
							</div>
							<div class="f_item_text">
								<h4>Consultar Histórico de Atividades</h4>
								<p>Pesquisa referente a histórico de atividades.</p>
							</div>
						</div>
					</a>
				</div>
				<div class="col-md-3">
					<a href="controle_de_agenda.php" id="no-ol">
						<div class="features_item">
							<div class="f_item_icon">
								<i class="fa fa-calendar"></i>
							</div>
							<div class="f_item_text">
								<h4>Controle de Agenda de Atividades</h4>
								<p>Cadastro e consulta de atividades.</p>
							</div>
						</div>
					</a>
				</div>
			</div>						
		</div>
		<!-- Terceira Linha -->
		<div class="row">
			<div class="main_features roomy-13">
				<div class="col-md-3">
					<a href="emitir_cert.php" id="no-ol">
						<div class="features_item">
							<div class="f_item_icon">
								<i class="fa fa-certificate"></i>
							</div>
							<div class="f_item_text">
								<h4>Emitir Certificado de Participação</h4>
								<p>Solicitação de certificado de participação em evento.</p>
							</div>
						</div>
					</a>
				</div>
				<div class="col-md-3">
					<a href="estatisticas.php" id="no-ol">
						<div class="features_item">
							<div class="f_item_icon">
								<i class="fa fa-bar-chart"></i>
							</div>
							<div class="f_item_text">
								<h4>Estatísticas</h4>
								<p>Gráficos de participação em eventos e locais estabelecidos.</p>
							</div>
						</div>
					</a>
				</div>
				<div class="col-md-3">
					<a href="gerar_decl_comp.php" id="no-ol">
						<div class="features_item">
							<div class="f_item_icon">
								<i class="fa fa-file-o"></i>
							</div>
							<div class="f_item_text">
								<h4>Gerar Declaração de Comparecimento</h4>
								<p>Impressão de declaração de comparecimento em atividade.</p>
							</div>
						</div>
					</a>
				</div>
				<div class="col-md-3">
					<a href="gerar_doc.php" id="no-ol">
						<div class="features_item">
							<div class="f_item_icon">
								<i class="fa fa-file-text"></i>
							</div>
							<div class="f_item_text">
								<h4>Gerar Documento</h4>
								<p>Solicitação de documento.</p>
							</div>
						</div>
					</a>
				</div>
			</div>						
		</div>
	</div>
	<!-- Quarta Linha -->
	<div style="display:flex;flex-direction:row;justify-content:center;align-items:center;">
		<div class="row">
			<div class="main_features roomy-13">
				<div class="col-md-4">
					<a href="gerar_lista_de_pres.php" id="no-ol">
						<div class="features_item">
							<div class="f_item_icon">
								<i class="fa fa-address-book-o"></i>
							</div>
							<div class="f_item_text">
								<h4>Gerar Lista de Presença</h4>
								<p>Listagem de presença em uma atividade.</p>
							</div>
						</div>
					</a>
				</div>
				<div class="col-md-4">
					<a href="inscricao_em_ativ_acad.php" id="no-ol">
						<div class="features_item">
							<div class="f_item_icon">
								<i class="fa fa-user-plus"></i>
							</div>
							<div class="f_item_text">
								<h4>Inscrição em Atividade Acadêmica</h4>
								<p>Solicitação de participação em atividade acadêmica.</p>
							</div>
						</div>
					</a>
				</div>
				<div class="col-md-4">
					<a href="index.php" id="no-ol">
						<div class="features_item">
							<div class="f_item_icon">
								<i class="fa fa-sign-out"></i>
							</div>
							<div class="f_item_text">
								<h4>Sair</h4>
								<p>Sair do sistema.</p>
							</div>
						</div>
					</a>
				</div>
			</div>						
		</div>
	</div>
	<br>
</section>
<!-- Fim de Itens do Menu -->
