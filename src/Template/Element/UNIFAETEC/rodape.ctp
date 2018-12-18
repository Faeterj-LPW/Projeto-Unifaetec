<style scoped>
	#navfit img {
		max-width: 90%;
		height: auto;
	}
</style>

<!-- Rodapé -->
<footer class="footer">
	<div id="navfit">
		<img src="<?= \Cake\Routing\Router::fullBaseUrl() . $this->request->webroot ?>img/rodape.jpeg">			
	</div>
    <?= (!empty($botaoAusente)) ? '' : $this->element('/UNIFAETEC/botaoVoltar') ?>
</footer>		
<!-- Fim do Rodapé -->