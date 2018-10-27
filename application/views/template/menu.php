<!-- Dropdown Structure -->
<ul id="dropdown1" class="dropdown-content">
  <li><a href="#!">um </a></li>
  <li><a href="#!">dois</a></li>
  <li class="divider"></li>
  <li><a href="#!">tres</a></li>
</ul>
<nav class="light-blue accent-4">
  <div class="nav-wrapper">
    <a href="<?php echo base_url();?>" class="brand-logo"><img src="<?php echo base_url();?>content/imagens/LOGOMARCA.png" id="logo" alt="Câmara Municipal De Brazópolis"  class="responsive-img ml-1" width="200px" title="Câmara Municipal De Brazópolis"></a>
    <ul class="right mr-1 hide-on-med-and-down">
      <li><a href="<?= base_url()?>pedidos">Pedidos</a></li>
      <li><a href="badges.html">noticias</a></li>
      <!-- Dropdown Trigger -->
      <li><a class="dropdown-trigger" href="#!" data-target="dropdown1">vereador<i class="material-icons right">arrow_drop_down</i></a></li>
    </ul>
  </div>
</nav>