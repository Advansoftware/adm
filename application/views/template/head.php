<html lang="pt-br">
	<head> 
		<!-- Meta Tags utilizadas no site -->
		<meta charset="utf-8">
		<meta name="theme-color" content="#16489C"/>
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, maximum-scale=1, user-scalable=no">
		<!-- Fim das meta Tags -->	

		<title>Area Restrita- <?php echo $title;?></title>
		<?php ini_set("allow_url_fopen", 1);?>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		<?= link_tag('assets/css/dash.css') ?>
		<?= link_tag('assets/css/all.css') ?>
		<?= link_tag('https://wrappixel.com/demos/admin-templates/material-pro/minisidebar/css/style.css') ?>
        <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
		<?= link_tag('content/imagens/logo_oficial.jpg', 'shortcut icon', 'image/png') ?>
        <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
		<script type="text/javascript" language="javascript" src='<?php echo base_url();?>assets/js/init.js'></script>
		<script type="text/javascript" language="javascript" src='<?php echo base_url();?>assets/js/main.js'></script>
		<script type="text/javascript" language="javascript" src='<?php echo base_url();?>assets/js/jquery.mask.min.js'></script>
        <script type="text/javascript" language="javascript" src='<?php echo base_url();?>ckeditor/ckeditor.js'></script>
        <script type="text/javascript" language="javascript" src='<?php echo base_url();?>assets/js/all.js'></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
	</head>
<body>
<?php
$this->load->view('template/modal');
?>