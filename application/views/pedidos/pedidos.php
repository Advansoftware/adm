<div class="container">
	<div class="row mt-2">
		<div class="col s12 offsset-s2">
			<table class="responsive-table striped centered">
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
          </tr>
      <?php endforeach;?>
        </tbody>
      </table>
		</div>
	</div>
</div>