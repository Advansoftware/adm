<div class="container">
    <div class="row">
        <h2 class="center">Inserir Noticias</h2>
        <div class="col m12 mt-3  grey lighten-4">
            <h5 class="center">Complete os dados abaixo.</h5>
            <div class="row">
                <div class="input-field col s8">
                    <input placeholder="Titulo" id="titulo" name="titulo" value="<?= $noticia[0]['titulo'] ?>" type="text" class="validate">
                    <label for="titulo">Titulo</label>
                </div>

                <div class="input-field col s4">
                    <input type="text" class="datepicker" id="data" value="<?= date('d/m/Y', strtotime($noticia[0]['data']))?>" name="data" placeholder="Data Publicação">
                </div>
            </div>
            <div class="file-field input-field">
                <div class="btn">
                    <span>Arquivo</span>
                    <input type="file" id="file"  value="<?= $noticia[0]['foto'] ?>"  name="arquivo">
                </div>
                <div class="file-path-wrapper">
                    <input class="file-path validate"  value="<?= $noticia[0]['foto'] ?>"  required placeholder="Foto Destaque" type="text">
                </div>
            </div>
        </div>
    </div>
    <div class="row">

        <div class="col mt-3">
            <textarea name="texto" id="texto">
                <?=$noticia[0]['texto']?>
            </textarea>
            <script>
                CKEDITOR.replace('texto', {
                    filebrowserBrowseUrl: '/ckfinder/ckfinder.html',
                    filebrowserUploadUrl: '/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files'
                } );
            </script>
        </div>
    </div>
    <div class="row">
        <div class="col m6">

            <button class="btn waves-effect blue darken-1 waves-light" type="submit" name="action" onclick="Main.envia_noticia();">Enviar Dados
                <i class="material-icons right">send</i>
            </button>
        </div>
            <div class="col m6">
                <button class="btn waves-effect offset-m10 waves-light right red darken-3" type="submit" name="action">Cancelar
                    <i class="material-icons right">close</i>
                </button>
            </div>
</div>