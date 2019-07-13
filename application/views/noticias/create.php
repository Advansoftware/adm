<div class="container">
    <div class="row my-3">
        <h2 class="center">Inserir Noticias</h2>
        <div class="col-md-12 mt-3 bg-light py-3">
            <h5 class="center">Complete os dados abaixo.</h5>
            <div class="row">
                <div class="form-group col-sm-8">
                    <input placeholder="Titulo" id="titulo" name="titulo" type="text" class="form-control">
                </div>

                <div class="form-group col-sm-4">
                    <input type="text" class="form-control" id="data" name="data" placeholder="Data Publicação">
                </div>
                <div class="form-group col-sm-12">
                    <input placeholder="Facebook URL" id="facebook" name="facebook" type="text" class="form-control">
                </div>
            </div>
            <div class="file-field input-field">
                <label for="file">Imagem Destaque </label>
                    <input type="file" id="file" class="btn btn-success btn-block" name="arquivo">
            </div>
        </div>
    </div>
    <div class="row">

        <div class="col mt-3">
            <textarea name="texto" id="texto"></textarea>
            <script>
                CKEDITOR.replace('texto', {
                    filebrowserBrowseUrl: '<?=base_url();?>/ckfinder/ckfinder.html',
                    filebrowserUploadUrl: '<?=base_url();?>/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files'
                } );
            </script>
        </div>
    </div>
    <div class="row my-3">
        <div class="col-md-6">

            <button class="btn btn-primary" type="submit" name="action" onclick="Main.envia_noticia();">Enviar Dados</button>
        </div>
            <div class="col-md-6">
                <button class="btn btn-danger offset-md-9" type="submit" name="action">Cancelar</button>
            </div>
</div>