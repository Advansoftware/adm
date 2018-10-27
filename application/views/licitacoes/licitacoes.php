<div class="container clearfix mb-5">
		<h1 class="display-4 text-center">Licitações</h1>
	<div class="row">

		<div class="col-md-10">
			<div class="row w-100 mx-auto">

				<div class="card w-100">
					<div class="card-header">
							<h6>Consulta de Licitações</h6>
					</div>
					<div class="card-body">
						<div class="card-text mb-3">
							Olá! Selecione as informações abaixo e clique em consultar para exibir os dados.
						</div>
							<form method="post" class="form-material">
								<div class="form-row">
									<div class="form-group col-md-11">
										<label for="entidade" class="col-form-label">Entidade: *</label>
										<select class="form-control " id="entidade" name="entidade">
											<option value="" default>Camara Municipal De Brazopolis</option>
										</select>
									</div> 
								</div>
								<div class="form-row">
									<div class="form-group col-md-2">
										<label for="ano-licitacao" class="col-form-label">Ano da licitação:</label>
										<select class="form-control" id="ano-licitacao" name="entidade">
											<option selected>Selecione</option>
											<option value="">2018</option>
										</select>
									</div>
									<div class="form-group col-md-3">
										<label for="numero-l" class="col-form-label">Numero da Licitação:</label>
										<input class="form-control" type="text" id="numero-l" name="numero-l"></input>
									</div>
								</div>
								<div class="form-row">
									<div class="form-group col-md-8">
										<label for="palavra" class="col-form-label">Palavra Chave:</label>
										<input type="text" class="form-control" "name="palavra" id="palavra"></input>
									</div>
								</div>
								<div class="form-row">
									<div class="form-group col-md-8">
										<label for="modalidade" class="col-form-label">Modalidade:</label>
										<select class="form-control" id="modalidade" name="entidade">
											<option selected>Selecione</option>
											<option value="">Pregão Presencial</option>
										</select>
									</div>
									<div class="form-group col-md-3">
										<label for="situacao" class="col-form-label">Situação:</label>
										<select class="form-control" id="situacao" name="entidade">
											<option selected>Selecione</option>
											<option value="">Aberta</option>
										</select>
									</div>
								</div>
		
									
							<button class="btn btn-info btn-block col-md-3">Consultar<i class="fa fa-search pl-3 "></i></button>
									
										

							</form>

					</div>
				</div>
			</div>
		</div>
		<?= loadMenus() ?>
	</div>
</div>		
