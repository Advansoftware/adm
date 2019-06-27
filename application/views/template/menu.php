<nav class="navbar navbar-expand-lg navbar-dark bg-info sticky-top">
    <a class="navbar-brand" href="#"><a href="<?php echo base_url();?>" class="brand-logo"><img src="<?php echo base_url();?>content/imagens/logo_oficial.png" id="logo" alt="Câmara Municipal De Brazópolis"  class="responsive-img ml-1" width="200px" title="Câmara Municipal De Brazópolis"></a>
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
        <div class="navbar-nav">
            <a class="nav-item nav-link active" href="<?= base_url()?>pedidos">Pedidos</a>
            <a class="nav-item nav-link" href="<?= base_url()?>noticias">Noticias</a>
            <a class="nav-item nav-link" href="<?= base_url()?>sessao">Sessão</a>
            <a class="nav-item nav-link" href="<?php echo base_url(); ?>account/logout" id="bt_logout">Sair</a>
        </div>
    </div>
</nav>