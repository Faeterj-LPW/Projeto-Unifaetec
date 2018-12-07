<!---Botão Voltar--->
<div class="mr-5" id="btnbck">
    <a href="<?= \Cake\Routing\Router::fullBaseUrl() . $this->request->webroot ?>menu.php">
        <!-- Caminho total da imagem usada para "corrigir" bug de exibição da página evento1.php -->
        <img class="h-100" src="<?= \Cake\Routing\Router::fullBaseUrl() . $this->request->webroot ?>img/voltar.png">
        <div class="txtbtn">
            <small>Voltar ao Menu</small>
        </div>
    </a>
</div>		
<!---Fim do Botão Voltar--->