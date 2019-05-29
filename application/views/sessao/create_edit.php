<div class="container my-3">
<form method="post" enctype="multipart/form-data">
    <div class="row">
        <div class="col-sm-10 offset-md-1">
            <input type="file" id="file" class="btn btn-success btn-block my-3 form-control-file" name="arquivo" onchange="Main.preenche_sessao()">
        </div>
    </div>

	<div class="row bg-light py-3">
		<div class="form-inline col-12">
            <div class="form-group col-md-3">
                <select id="categoria" class="form-control" name="categoria">
                    <option value="" disabled selected>Categoria</option>
                    <?php foreach($lista_categoria as $categoria):?>
                        <option value="<?= $categoria['id']?>"><?= $categoria['nome']?></option>
                    <?php endforeach; ?>
                </select>
            </div>
			<div class="form-group  col-md-2">
	          <input placeholder="Numero" id="snum" name="snum" type="number" class="form-control col-md-10">
       		</div>
			<div class="form-group col-md-3">
	         <input type="text" class="form-control" id="sessao" name="sessao" placeholder="Sessão">
       		</div>
            <div class="form-group col-md-2">
                <input type="text" class="form-control  col-md-10" id="data" name="data" placeholder="Data">
            </div>

            <a class="btn btn-primary text-white  my-2" onclick="Main.envia_sessao();">Enviar</a>
        </div>
    </div>
</form>
</div>

<div id="results">

</div>