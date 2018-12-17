<!-- Rodapé -->
<footer class="footer">
	<div id="navfit">
		<img class="h-100" src="<?= \Cake\Routing\Router::fullBaseUrl() . $this->request->webroot ?>img/rodape.jpeg">			
	</div>
    <?= (!empty($botaoAusente)) ? '' : $this->element('/UNIFAETEC/botaoVoltar') ?>
</footer>		
<!-- Fim do Rodapé -->