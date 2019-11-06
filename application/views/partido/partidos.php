<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.js"></script>
<script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>
<script>
    $(document).ready(function() {
        $('#example').DataTable( {
            "responsive": true,
            "language": {
                "url": "https://cdn.datatables.net/plug-ins/1.10.20/i18n/Portuguese.json"
            }
        } );
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
              <th>Imagem</th>
              <th>Ações</th>
          </tr>
        </thead>

        <tbody>
        	<?php foreach($partidos as $partido): ?>
          <tr>
            <td><?= $partido['nome']?></td>
            <td><img src="../camara/content/imagens/partidos/<?= $partido['imagem']?>" style="width: 50px;"></td>
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
		</div>
	</div>
</div>
