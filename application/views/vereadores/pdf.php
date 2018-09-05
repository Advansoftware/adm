<div class="container">
	<div class="col mt-3">
		<h5>Pedidos de <?= $vereador[0]->nome;?></h5>
		<div class="row">
			

			<div class="col mt-3">
<?php
			for($i = 0; $i < count($anos); $i++) 
			{
				echo"<div id='accordion'>";
					echo"<div class='card'>";
					    echo"<div class='card-header' id='headingOne'>";
					      	echo"<h5 class='mb-0'>";
					        	echo"<button class='btn btn-link' data-toggle='collapse' data-target='#collapse".$i."' aria-expanded='true' aria-controls='collapse".$i."'>";
					        		echo"<h5>Ano de ".$anos[$i]['ano']."</h5>";
					        	echo"</button>";
					      	echo"</h5>";
					    echo"</div>";
					    echo"<div id='collapse".$i."' class='collapse mb-3' aria-labelledby='headingOne' data-parent='#accordion'>";
					      	echo"<div class='card-body'>";
					      	for($j = 0; $j < count($pedidos); $j++) 
							{
								if($anos[$i]['ano'] == $pedidos[$j]['ano'])
								{
									echo"<div class='col-sm-auto mt-3 d-inline-block'>
										<div class='card text-center' style='width: 12rem;padding-top: 1rem;'>
											<div style='font-size:2em; color:Tomato;'>
									 				<i class='fas fa-file-pdf fa-1x'></i>
											</div>
											<div class='card-body'>
										   		<h6 class='card-title'  style='font-size: 13px;'>".$pedidos[$j]['nome_pedido']."</h6>
										   	 	<p class='card-text'>".$pedidos[$j]['data_publicacao']."</p>
										    	<a href='".base_url()."content/pedidos_de_providencia/".$pedidos[$j]['ano']."/".$vereador[0]->foto."/".$pedidos[$j]['arquivo']."' class='btn btn-info' target='_blank'><i class='fas fa-cloud-download-alt'></i> Baixar</a>
									  		</div>
										</div>
									</div>";
								}
							}
					    	echo"</div>";
					    echo"</div>";
					echo"</div>";
				echo"</div>";
			}

?>


</div>
</div>
</div>
