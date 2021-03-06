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
            <a href="<?=base_url()?>vereadores/create" class="btn btn-primary btn-block">Adicionar Vereador</a>
        </div>
    </div>
	<div class="row mt-2">
		<div class="col s12 offsset-s2">
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
            <?php
                if($vereadores['partido']>0) $pega = $vereadores['partido']-1;
                else $pega = $vereadores['partido'];
            ?>
          <tr>
            <td><?= $vereadores['nome']?></td>
            <td><?=$partidos[$pega]['nome']; ?></td>
            <td></td>
            <td><div class="btn-toolbar justify-content-between" role="toolbar" aria-label="Toolbar with button groups">
              <div class="btn-group" role="group" aria-label="First group">
                  <button type="button" class="btn btn-primary" onclick="window.location.href='<?=base_url();?>vereadores/edit/<?=$vereadores['id']?>'"><i class="far fa-edit"></i></button>
                  <button id="delSessao" type="button" onclick="" class="btn btn-danger"><i class="far fa-trash-alt"></i></button>
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
