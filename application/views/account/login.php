<html>

<head>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/css/materialize.min.css">

    <style>
        body {
            display: flex;
            min-height: 100vh;
            flex-direction: column;
        }
        body {
            background: #fff;
        }
        .input-field input[type=date]:focus + label,
        .input-field input[type=text]:focus + label,
        .input-field input[type=email]:focus + label,
        .input-field input[type=password]:focus + label {
            color: #e91e63;
        }
        .input-field input[type=date]:focus,
        .input-field input[type=text]:focus,
        .input-field input[type=email]:focus,
        .input-field input[type=password]:focus {
            border-bottom: 2px solid #e91e63;
            box-shadow: none;
        }
    </style>
</head>

<body>
<?php
    $this->load->view('template/modal');
?>
<div class="container"></div>
    <div class="row">
        <div class="col s7 offset-m4">
<!--            <img class="responsive-img center-align" src="<?= base_url()?>/content/imagens/logo_oficial.jpg" />-->
        </div>
    </div>
    <div class="row">
        <div class="col s12">
           <h5 class="indigo-text">Please, login into your account</h5>
        </div>
    </div>
    <div class="row">
        <div class="z-depth-1 grey lighten-4 row">
            <?php
                $atr = array('id' => 'form_login','name' => 'form_login','class' => 'col s12');
                echo form_open('account/validar',$atr);
            ?>
                <div class='row'>
                    <div class='col s12'>
                    </div>
                </div>

                <div class='row'>
                    <div class='input-field col s12'>
                        <input class='validate' type='email' name='email' id='email' />
                        <label for='email'>Enter your email</label>
                        <div class='input-group mb-2 mb-sm-0 text-danger' id='error-email'></div>
                    </div>
                </div>

                <div class='row'>
                    <div class='input-field col s12'>
                        <input class='validate' type='password' name='password' id='password' />
                        <label for='password'>Enter your password</label>
                        <div class='input-group mb-2 mb-sm-0 text-danger' id='error-password'></div>
                    </div>

                </div>

                <br />
                    <div class='row'>
                        <button type='submit' name='btn_login' class='col s12 btn btn-large waves-effect indigo'>Login</button>
                    </div>

            </form>
        </div>
    </div>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.1/jquery.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/js/materialize.min.js"></script>

<script type="text/javascript" src="<?php echo $url; ?>assets/js/init.js"></script>
<script type="text/javascript" src="<?php echo $url; ?>assets/js/jquery.mask.min.js"></script>
<script type="text/javascript" src="<?php echo $url; ?>assets/js/Url.js"></script>
<script type="text/javascript" src="<?php echo $url; ?>assets/js/main.js"></script>
<script type="text/javascript" src="<?php echo $url; ?>assets/js/bootstrap.min.js"></script>
<?php //echo $_SESSION['token']; ?>
</body>

</html>