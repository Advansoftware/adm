<div class="container clearfix mb-5">
      <h1 class="display-4 text-center">Notícias</h1>
  <div class="row">

    <div class="col-md-10">
      <div class="row w-100 mx-auto">

        <div class="card w-100">
          <div class="card-header text-center">
            <h5>Mais Notícias</h5>
          </div>
          <div class="card-body">
            <div id="accordion" role="tablist">
              <?php
                for($i = 0; $i<count($noticias); $i++){
                  $titulo = $noticias[$i]->titulo;
                  $id = $noticias[$i]->id;
                  $noticia = $noticias[$i]->texto;
                  $data = $noticias[$i]->data;
                  $mes = date( 'm', strtotime($data));
                  $ano = date( 'Y', strtotime($data));
                  $imagem = (isset($noticias[$i]->foto)) ? $imagem = "<img class='img-fluid' src=".base_url()."content/noticias/".$ano."/".$mes."/".$noticias[$i]->foto.">" : null;
        
                  $pag = <<<EOPAGE
                  <div class="card">
                    <div class="card-header" role="tab" id="headingOne$id">
                      <h5 class="mb-0">
                        <a data-toggle="collapse" href="#collapseOne$id" aria-expanded="true" aria-controls="collapseOne$id">
                           $titulo
                        </a>
                      </h5>
                    </div>
                    <div id="collapseOne$id" class="collapse" role="tabpanel" aria-labelledby="headingOne$id" data-parent="#accordion">
                        <div class="card-body text-justify">
                 		 $imagem <br/>
                          $noticia
                        </div>
                      </div>
                    </div>
EOPAGE;
                  echo $pag;
                }
                echo $pagination;
              ?>
            </div>
          </div>


