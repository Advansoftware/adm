<?php $this->load->helper("paginacao");?>

<div class="container">
	<div class="row mt-2">
		<div class="col">
			<table id="example" class="table table-striped table-bordered">
        <thead>
          <tr>
          	<th colspan="3">Últimos Adicionados</th>
          </tr>
          <tr>
              <th>S.Numero</th>
              <th>Sessão</th>
              <th>Arquivo</th>
              <th>Data</th>
              <th>Ações</th>
          </tr>
        </thead>

        <tbody>
        	<?php foreach($sessoes as $pedido): ?>
          <tr>
            <td><?= $pedido['sessao']?></td>
            <td><?= $pedido['nome']?></td>
            <td><?= $pedido['arquivo']?></td>
            <td><?= $pedido['data']?></td>
        <td><div class="btn-toolbar justify-content-between" role="toolbar" aria-label="Toolbar with button groups">
                <div class="btn-group" role="group" aria-label="First group">
                    <button type="button" class="btn btn-primary"><i class="far fa-edit"></i></button>
                    <button id="delSessao" type="button" onclick="Main.DelSessao('<?=$pedido['id']?>', '<?= $pedido['nome']?>');" class="btn btn-danger"><i class="far fa-trash-alt"></i></button>
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
