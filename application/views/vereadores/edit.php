<div class="container my-3">
<div class="row">
    <div class="col-md-6 my-auto mx-auto">
        <div class="card">
            <div class="card-body text-center bg-imagem-fundo">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <!--local para imagem do vereador-->
                            <div id="partido_logo">
                                <img src="../../git/camara/content/imagens/partidos/<?php if($vereador[0]->partido>0) echo $partidos[$vereador[0]->partido-1]['imagem'];?>" id="preview" style="max-height: 5rem; max-width: 7rem" class="img-fluid bg-png-shadow-white mb-3">
                                <br />
                                <img src="../../git/camara/content/imagens/vereadores/<?=$vereador[0]->foto?>.jpg" id="preview" class="img-thumbnail rounded-pill w-50 mx-auto d-block ">
                            </div>
                        </div>
                        <div class="row my-3">
                            <div class="col-12">
                                <!--formularios-->
                                <input type="hidden" name="id" id="id" value="<?=$vereador[0]->id?>"/>
                                <input type="file" name="file" id="file" class="file mb-4 form-control">
                                <div class="form-group">
                                    <input type="text" id="nome" value="<?=$vereador[0]->nome?>" class="form-control my-auto" placeholder="Nome">
                                </div>
                                <div class="form-group">
                                    <input type="email" id="email" value="<?=$vereador[0]->email?>" class="form-control my-auto" placeholder="E-mail"/>
                                </div>
                                <div class="form-group">
                                    <select name="partido" id="partido" class="form-control my-auto">
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
                    </div>
                    <div class="row">
                        <div class="col-12  mx-auto">
                            <button class="btn btn-primary btn-block" onclick="Main.altera_vereador();">Alterar</button>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
