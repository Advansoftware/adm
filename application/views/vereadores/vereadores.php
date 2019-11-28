<?php $this->load->helper("paginacao");?>

<div class="container">
    <div class="row mt-2 d-flex justify-content-end">
        <div class="col-md-3 col-sm-12 my-3">
            <button onclick="Main.CriaVereador()" class="btn btn-primary btn-block">Adicionar Vereador</button>
        </div>
    </div>
	<div class="row mt-2">
		<div class="col">
			<table id="example" class="table table-striped table-bordered">
        <thead>
          <tr>
          	<th colspan="3">Ultimos Adicionados</th>
          </tr>
          <tr>
              <th>Nome</th>
              <th>Partido</th>
              <th>Logo Partido</th>
              <th>Ação</th>
          </tr>
        </thead>
        <tbody>
        	<?php foreach($vereador as $vereadores): ?>
          <tr>
            <td><?= $vereadores['nome']?></td>
            <td><?=$vereadores['partidoNome']; ?></td>
            <td></td>
            <td><div class="btn-toolbar justify-content-between" role="toolbar" aria-label="Toolbar with button groups">
              <div class="btn-group" role="group" aria-label="First group">
                  <button type="button" class="btn btn-primary" onclick="Main.EditaVereador('<?=$vereadores['id']?>')"><i class="far fa-edit"></i></button>
                  <button id="delSessao" type="button" onclick="Main.DelVereador(<?=$vereadores['id']?>, '<?=$vereadores['nome']?>')" class="btn btn-danger"><i class="far fa-trash-alt"></i></button>
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
