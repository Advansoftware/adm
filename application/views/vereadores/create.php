<div class="container my-3">
    <div class="col-md-6 mx-auto">
        <div class="card">
            <div class="card-body text-center bg-imagem-fundo">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <!--local para imagem do vereador-->
                            <div id="partido_logo"><img src="../../../git/camara/content/imagens/px.png" id="preview" class="img-fluid w-25 ">
                                <br />
                                <img src="../../../git/camara/content/imagens/user.png" id="preview" class="img-thumbnail rounded-pill w-50 mx-auto d-block ">
                            </div>
                        </div>
                        <div class="row my-3">
                            <div class="col-12">
                                <!--formularios-->
                                <input type="hidden" name="id" id="id" value=""/>
                                <input type="file" name="file" id="file" class="file mb-4 form-control">
                                <div class="form-group">
                                    <input type="text" id="nome" value="" class="form-control my-auto" placeholder="Nome">
                                </div>
                                <div class="form-group">
                                    <input type="email" id="email" value="" class="form-control my-auto" placeholder="E-mail"/>
                                </div>
                                <div class="form-group">
                                    <select name="partido" id="partido" class="form-control my-auto">
                                        <option selected disabled >Selecione um partido</option>

                                        <?php foreach ($partidos as $partido):?>

                                            <option value="<?=$partido['id']?>"><?=$partido['nome']?></option>
                                        <?php endforeach;?>

                                    </select>
                                </div>
                            </div>
                            </div>
                        </div>
                    <div class="row">
                        <div class="col-12  mx-auto">
                            <button class="btn btn-primary btn-block" onclick="Main.cria_vereador()">Enviar</button>
                        </div>
                    </div>
                    </div>
                </div>

        </div>
    </div>
</div>
