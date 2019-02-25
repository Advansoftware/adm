<script language="JavaScript">
    // In your Javascript (external .js resource or <script> tag)
    $(document).ready(function() {
        $('#vereadores').select2();
    });
</script>
<div class="container my-3">
<form method="post" enctype="multipart/form-data">
    <div class="row">
        <div class="col-sm-10 offset-md-1">
            <input type="file" id="file" class="btn btn-success btn-block my-3" name="arquivo">
        </div>
    </div>

	<div class="row bg-light py-3">
		<div class="form-inline col-md-6 col-sm-12">
			<div class="form-group col-sm-5">
	          <input placeholder="Numero" id="numero" name="numero" type="text" class="form-control">
       		</div>
			<div class="form-group col-sm-5">
	         <input type="text" class="form-control" id="data" name="data" placeholder="Data">
       		</div>
		</div>
		<div class="form-inline col-md-6 col-sm-12">
			 <div class="form-group col-md-10 col-sm-12">
			    <select multiple id="vereadores" class="form-control" name="vereadores">
					<option value="" disabled>Vereadores</option>
					<?php foreach($lista_vereador as $vereador):?>
					<option value="<?= $vereador['id']?>"><?= $vereador['nome']?></option>
					<?php endforeach; ?>
			    </select>
                 <div class="col-sm-12 col-md-4">
                     <button class="btn form-control btn-block btn-primary my-2" onclick="Main.envia_pedido();">Enviar</button>
                 </div>
			  </div>

		</div>
    </div>
</form>
</div>

<div id="results">

</div>