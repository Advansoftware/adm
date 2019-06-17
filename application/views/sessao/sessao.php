<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
<script>
    $(document).ready(function() {
        $('#example').DataTable();
    } );
</script>

<div class="container">
	<div class="row mt-2">
		<div class="col s12 offsset-s2">
			<table id="example" class="table table-striped table-bordered">
        <thead>
          <tr>
          	<th colspan="3">Ultimos Adicionados</th>
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
        	<?php foreach($pedidos as $pedido): ?>
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
          </tr>
      <?php endforeach;?>
        </tbody>
      </table>
		</div>
	</div>
</div>
