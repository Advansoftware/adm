<?php $this->load->helper("paginacao");?>

<div class="container">
	<div class="row mt-2">
		<div class="col">
			<table id="example" class="table table-striped table-bordered">
        <thead>
          <tr>
          	<th colspan="3">Ultimos Adicionados</th>
          </tr>
          <tr>
              <th>Name</th>
              <th>Imagem</th>
              <th>Ações</th>
          </tr>
        </thead>

        <tbody>
        	<?php foreach($partidos as $partido): ?>
          <tr>
            <td><?= $partido['nome']?></td>
            <td><img src="../../../camara/content/imagens/partidos/<?= $partido['imagem']?>" style="width: 50px;"></td>
            <td><div class="btn-toolbar justify-content-between" role="toolbar" aria-label="Toolbar with button groups">
              <div class="btn-group" role="group" aria-label="First group">
                  <button type="button" class="btn btn-primary"><i class="far fa-edit"></i></button>
                  <button id="delSessao" type="button" onclick="Main.DelPedido('<?=$partido['id']?>', '<?= $partido['nome']?>');" class="btn btn-danger"><i class="far fa-trash-alt"></i></button>
              </div>
            </div>
            </td>
          </tr>
      <?php endforeach;?>
        </tbody>
      </table>
      <?php paginacao::get_paginacao($paginacao, $controller); ?>
		</div>
	</div>
</div>
