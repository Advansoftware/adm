<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
<script>
    $(document).ready(function() {
        $('#example').DataTable();
    } );
</script>
<div class="container">
    <div class="row mt-2 d-flex justify-content-end">
        <div class="col-md-3 col-sm-12 my-3">
            <a href="<?=base_url()?>noticias/create" class="btn btn-primary btn-block">Criar Nova Noticia</a>
        </div>
    </div>
	<div class="row mt-2">
		<div class="col col-sm-12 offsset-s2">
			<table id="example" class="table table-striped table-bordered">
        <thead>
          <tr>
          	<th colspan="3">Ultimos Adicionados</th>
          </tr>
          <tr>
              <th>Codigo</th>
              <th>Titulo</th>
              <th>Data</th>
              <th>Ações</th>
          </tr>
        </thead>

        <tbody>
        	<?php foreach($noticias as $noticia): ?>
          <tr>
            <td><?= $noticia['id']?></td>
            <td><?= $noticia['titulo']?></td>
            <td><?= $noticia['data']?></td>
        <td><div class="btn-toolbar justify-content-between" role="toolbar" aria-label="Toolbar with button groups">
                <div class="btn-group" role="group" aria-label="First group">
                    <button type="button" class="btn btn-primary"><i class="far fa-edit"></i></button>
                    <button id="delSessao" type="button" onclick="Main.Delnoticia('<?=$noticia['id']?>', '<?= $noticia['titulo']?>');" class="btn btn-danger"><i class="far fa-trash-alt"></i></button>
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
