<html>

<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <?= link_tag('https://wrappixel.com/demos/admin-templates/material-pro/minisidebar/css/style.css');?>
</head>

<body>
<?php
    $this->load->view('template/modal');
?>
<div class="container">
    <div class="row my-5">
        <div class="col-md-5 offset-md-1">
            <div class="login-box card">
                <div class="card-header bg-info text-center">
                    <img class="img-fluid" style="width: 200px" src="<?= base_url()?>/content/imagens/logo_oficial.png" />
                </div>
                <div class="card-body bg-light text-dark">
                    <div class="container text-center">

                        <div class="row">
                            <div class="col-12">
                                <h5 class="lead">Area Restrita</h5>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <?php
                                $atr = array('id' => 'form_login','name' => 'form_login','class' => 'col-sm-12');
                                echo form_open('account/validar',$atr);

                                ?>
                                <div class="form-group row">
                                    <label for="email" class="col-sm-3 col-form-label">Email</label>
                                    <input type="email" class="form-control validate col-sm-9" name="email" id="email">
                                    <div class='input-group mb-2 mb-sm-0 text-danger' id='error-email'></div>
                                </div>
                                <div class="form-group row">
                                    <label for="senha" class="col-sm-3 col-form-label">Senha</label>
                                    <input type="password" class="form-control validate col-sm-9" name="password" id="password">
                                    <div class='input-group mb-2 mb-sm-0 text-danger' style="margin-top: 12px;" id='error-senha'></div>
                                </div>
                                    <button type='submit' name='btn_login' class='btn btn-danger w-50 my-3'>Login</button>
                            </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script type="text/javascript" src="<?php echo $url; ?>assets/js/jquery.mask.min.js"></script>
<script type="text/javascript" language="javascript" src='<?php echo base_url();?>assets/js/init.js'></script>
<script type="text/javascript" language="javascript" src='<?php echo base_url();?>assets/js/main.js'></script>
</body>

</html>