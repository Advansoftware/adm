<div class="container my-3">
<form method="post" enctype="multipart/form-data">
	<div class="row bg-light py-3">
		<div class="form-inline col-md-10 col-sm-12">
            <div class="form-group mx-auto col-sm-5">
                <input type="file" id="file" class="btn btn-success btn-block my-3" name="arquivo">
            </div>
			<div class="form-group mx-auto col-sm-5">
	          <input placeholder="Nome do Partido" id="nome" name="nome" type="text" class="form-control">
       		</div>

		</div>
		<div class="form-inline col-md-1 col-sm-12">
			 <div class="form-group col-md-12 col-sm-12">
                 <div class="col-sm-12 col-md-12">
                     <a class="btn form-control btn-block btn-primary text-white my-2" onclick="Main.envia_partido();">Enviar</a>
                 </div>
			  </div>

		</div>
    </div>
</form>
</div>

<div id="results">

</div>