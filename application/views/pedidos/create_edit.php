<div class="container mt-2">
	<div class="row grey lighten-4">
		<div class="col m6 s12 offset-m1">

			<div class="input-field col s6">
	          <input placeholder="Numero" id="numero" name="numero" type="text" class="validate">
	          <label for="Numero">Numero</label>
       		</div>

			<div class="input-field col s6">
	         <input type="text" class="datepicker" id="data" name="data" placeholder="Data">
       		</div>
		</div>
		<div class="col m4 s12">
			 <div class="input-field col m10 s10">
			    <select multiple id="vereadores" name="vereadores">
					<option value="" disabled selected>Vereadores</option>
					<?php foreach($lista_vereador as $vereador):?>
					<option value="<?= $vereador['id']?>"><?= $vereador['nome']?></option>
					<?php endforeach; ?>
			    </select>
			    <label>Qual vereador fez o pedido?</label>
			  </div>
			  <div class="col s2 m2">
			  	<a class="btn-floating btn-large waves-effect waves-light blue darken-1 mt-1" onclick="Main.envia_pedido();"><i class="material-icons">add</i></a>
			  </div>
		</div>

		<div class="col s10 offset-m1">
			<div class="file-field input-field col s12">
				<div class="btn orange lighten-1">
					<span>Arquivo</span>
					<input type="file">
				</div>
				<div class="file-path-wrapper">
					<input class="file-path validate" type="text">
				</div>
			</div>
		</div>

</div>
</div>
<div id="results">
	
</div>