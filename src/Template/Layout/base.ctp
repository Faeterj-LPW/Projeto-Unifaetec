<?= $this->Html->docType() ?>
<html lang="pt">
	<head>
		<?= $this->Html->charset() ?>
        <title><?= $title ?></title>
		<?= $this->fetch('meta') ?>
		<?= $this->fetch('css') ?>
		<?= $this->fetch('head') ?>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
	</head>

	<body>
		<!-- Barra de Título -->
			<?= (!empty($barraAusente)) ? '' : $this->element('/UNIFAETEC/barraDeTitulo') ?>
		<!-- Fim da Barra de Título -->
		
		<!-- Conteúdo -->
			<?= $this->fetch('content') ?>
		<!-- Fim do conteúdo -->
			
		<!-- Gambiarra para rodapés com botão "voltar ao menu" :( -->
		<!-- Rodapé -->
			<?= (!empty($rodapeAusente)) ? '' : $this->element('/UNIFAETEC/rodape') ?>
		<!-- Fim do Rodapé -->

		<?= $this->fetch('script') ?>
	</body>
</html>