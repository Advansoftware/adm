<div class="container clearfix mb-5">
  <h1 class="display-4 text-center col-md-10">Os Vereadores</h1>
  <div class="row">
  <div class="col-md-10">
    <div class="col text-center">
      <div class="row">
        <?php foreach ($vereadores as $info) : ?>

            <div class="col-lg-3 offset-md-0 mt-3 align-items-center">
            <div class="card w-100" style="width: 15rem; min-width: 13rem;">
             <img class="card-img-top" src="<?= base_url() ?>content/imagens/vereadores/<?= $info->foto ?>.jpg" alt="Card image cap">
              <div class="card-body">
                  <h5 class="card-title"><?= $info->nome ?></h5>
                  
            </div>
               <ul class="list-group list-group-flush">
                <?php if($info->partido != null):?>
                   <li class="list-group-item"><img src="<?= base_url() ?>content/imagens/partidos/<?= $info->partido ?>.png"  height="50px"></li>
                <?php endif ?>

                <li class="list-group-item" id='ajaxPagination'><a data-toggle="modal" data-target=".bd-example-modal-lg" href="<?= base_url(); ?>vereadores/pedidos/<?= $info->id ?>" class="btn btn-secondary btn-sm">Pedidos de Providência</a></li>
                <li class="list-group-item"><a href="mailto:<?= $info->email ?>" class="btn btn-info"><i class="fas fa-envelope"></i> Enviar Email</a></li>
              </ul>
            </div>
          </div>

      <?php endforeach ?>
      </div>
    </div>
  </div>
   <?= loadMenus() ?>
</div>
 
</div>