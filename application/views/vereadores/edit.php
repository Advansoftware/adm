<div class="container my-3">
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <h3 class="card-title text-center"><?=$title?></h3>
                    <hr>
                    <div class="container"></div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="card">
                                    <div class="card-body text-center">

                                        <!--local para imagem do vereador-->
                                        <div id="partido_logo"><img src="../../../camara/content/imagens/partidos/<?php if($vereador[0]->partido>0) echo $partidos[$vereador[0]->partido-1]['imagem'];?>" id="preview" class="img-fluid w-25">
                                            <img src="../../../camara/content/imagens/vereadores/<?=$vereador[0]->foto?>.jpg" id="preview" class="img-thumbnail">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-8">
                               <!--formularios-->
                                <input type="hidden" name="id" id="id" value="<?=$vereador[0]->id?>"/>
                                <input type="file" name="file" id="file" class="file form-control">
                                <div class="form-group">
                                    <label for="nome">Nome: </label>
                                    <input type="text" id="nome" value="<?=$vereador[0]->nome?>" class="form-control" placeholder="Nome">
                                </div>
                                <div class="form-group">
                                    <label for="email">E-mail</label>
                                    <input type="email" id="email" value="<?=$vereador[0]->email?>" class="form-control" placeholder="E-mail"/>
                                </div>
                                <div class="form-group">
                                    <label for="partido">Partido</label>

                                    <select name="partido" id="partido" class="form-control">
                                        <option <?php
                                            if ($vereador[0]->partido == null) echo "selected";
                                        ?> disabled>Selecione um partido</option>

                                        <?php foreach ($partidos as $partido):?>

                                        <option value="<?=$partido['id']?>" <?php if ($partido['id']==$vereador[0]->partido) echo "selected"?>><?=$partido['nome']?></option>
                                        <?php endforeach;?>

                                    </select>
                                </div>
                            </div>

                        </div>
                        <!--botão que envia os formularios-->
                        <div class="row">
                            <div class="col-md-4">
                                <button class="btn btn-primary btn-block" onclick="Main.altera_vereador();">Enviar</button>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
    </div>
</div>