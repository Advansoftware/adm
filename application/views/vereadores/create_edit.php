<script>
    $custom-file-text: (
        en: "Browse",
        pt-br: "Procurar"
    );
</script>
<div class="container my-3">
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <h3 class="card-title text-center"><?=$title?></h3>
                    <hr>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="card">
                                    <div class="card-body">

                                        <!--local para imagem do vereador-->
                                        <img src="" alt="">

                                    </div>
                                </div>
                            </div>
                            <div class="col-md-8">
                               <!--formularios-->
                                <div class="form-group custom-file">
                                    <input type="file" class="custom-file-input" id="customFile">
                                    <label class="custom-file-label" for="customFile">Escolher Imagem</label>
                                </div>
                                <div class="form-group">
                                    <label for="nome">Nome: </label>
                                    <input type="text" id="nome" class="form-control" placeholder="Nome">
                                </div>
                                <div class="form-group">
                                    <label for="email">E-mail</label>
                                    <input type="email" id="email" class="form-control" placeholder="E-mail"/>
                                </div>
                                <div class="form-group">
                                    <label for="partido">Partido</label>

                                    <select name="partido" id="partido" class="form-control selectpicker">
                                        <option selected disabled>Selecione um partido</option>
                                        <?php foreach ($partidos as $partido):?>

                                        <option value="<?=$partido['id']?>"><?=$partido['nome']?></option>
                                        <?php endforeach;?>

                                    </select>
                                </div>

                            </div>
                        </div>
                        <!--botão que envia os formularios-->
                        <div class="row">
                            <div class="col-md-4">
                                <button class="btn btn-primary btn-block">Enviar</button>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
    </div>
</div>