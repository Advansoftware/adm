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
              <th>Name</th>
              <th>Vereador</th>
              <th>Data</th>
          </tr>
        </thead>

        <tbody>
        	<?php foreach($pedidos as $pedido): ?>
          <tr>
            <td><?= $pedido['nome_pedido']?></td>
            <td><?= $pedido['nome_vereador']?></td>
            <td><?= $pedido['data_pedido']?></td>
            <td><div class="btn-toolbar justify-content-between" role="toolbar" aria-label="Toolbar with button groups">
              <div class="btn-group" role="group" aria-label="First group">
                  <button type="button" class="btn btn-primary"><i class="far fa-edit"></i></button>
                  <button id="delSessao" type="button" onclick="Main.DelPedido('<?=$pedido['id']?>', '<?= $pedido['nome_pedido']?>');" class="btn btn-danger"><i class="far fa-trash-alt"></i></button>
              </div>
            </div>
            </td>
          </tr>
      <?php endforeach;?>
        </tbody>
      </table>
		</div>
	</div>
</div>
