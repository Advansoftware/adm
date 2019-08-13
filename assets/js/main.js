var Main = {
    base_url : "http://" + window.location.host + "/git/adm/",
	carrega : function(){
        $('#numero').mask('00/0000', {reverse: true});
	    $('#data').mask('00/00/0000', {reverse: true});
        $('#vereadores').select2();
	},
	envia_pedido : function(){

        var vereadores = $("#vereadores").val();
        var nome_pedido = $("#numero").val();
        var data_pedido  = $("#data").val();
        var file_data = $('#file').prop('files')[0];
        var fd = new FormData();
        fd.append('arquivo',file_data);
        fd.append('vereadores',vereadores);
        fd.append('data',data_pedido);
        fd.append('nome',nome_pedido);

        if(vereadores != '' && nome_pedido != '' && data_pedido != '') {
            $.ajax({
                method: "POST",
                url: Main.base_url + "pedidos/cria_pedido",
                dataType: 'text',
                cache: false,
                contentType: false,
                processData: false,
                data: fd,
                type: 'post'
            }).done(function (html) {
                location.reload();
            });
        }
        else {
            alert("Falta Preencher alguns dados");
        }
    },
    envia_sessao : function(){

        var numero = $("#snum").val();
        var sessao = $("#sessao").val();
        var data_sessao  = $("#data").val();
        var categoria  = $("#categoria").val();
        var file_data = $('#file').prop('files')[0];
        var fd = new FormData();
        fd.append('arquivo',file_data);
        fd.append('numero',numero);
        fd.append('data',data_sessao);
        fd.append('sessao',sessao);
        fd.append('categoria',categoria);

        if(numero != '' && sessao != '' && data_sessao != '' && categoria != '') {
            $.ajax({
                method: "POST",
                url: Main.base_url + "sessao/cria_sessao",
                dataType: 'text',
                cache: false,
                contentType: false,
                processData: false,
                data: fd,
                type: 'post'
            }).done(function (html) {
                console.log(html);
                Main.modal("aviso", html);
                $('#bt_close_modal_aviso').click(function () {
                    location.reload();
                });
            });
        }
        else {
            alert("Falta Preencher alguns dados");
        }
    },
    envia_partido : function(){

        var nome = $("#nome").val();
        var file_data = $('#file').prop('files')[0];
        var fd = new FormData();
        fd.append('arquivo',file_data);
        fd.append('nome',nome);
        if(nome != '')
        {
            $.ajax({
                method: "POST",
                url: Main.base_url + "partidos/createPartido",
                dataType: 'text',
                cache: false,
                contentType: false,
                processData: false,
                data: fd,
                type: 'post'
            }).done(function (html) {
                console.log(html);
                Main.modal("aviso", html);
                $('#bt_close_modal_aviso').click(function () {
                    location.reload();
                });
            });
        }
        else {
            alert("Falta Preencher alguns dados");
        }
    },
    DelPedido : function (id, nome) {
        Main.modal('confirm', nome + '</br> Tem certeza que deseja excluir esse registro?');
        $('#bt_delete').click(function () {
            window.location.href = Main.base_url + "partidos/deletaPartido/" + id;
        });
    },
	envia_noticia : function(){
        var titulo = $("#titulo").val();
        var data = $("#data").val();
        var facebook = $("#facebook").val();
        var texto = CKEDITOR.instances.texto.getData();
        var file_data = $('#file').prop('files')[0];
        var fd = new FormData();
        fd.append('arquivo',file_data);
        fd.append('titulo',titulo);
        fd.append('data',data);
        fd.append('texto',texto);
        fd.append('facebook',facebook);
        if(titulo != '' && data != '' && file_data != ''  && texto != '') {
            $.ajax({
                method: "POST",
                url: Main.base_url + "noticias/insere_noticia",
                dataType: 'text',
                cache: false,
                contentType: false,
                processData: false,
                data: fd,
                type: 'post'
            }).done(function (html) {
               location.reload();
            });
		}
        else{
            alert("Falta Preencher alguns dados");
        }
	},
    login : function () {
        if(Main.login_isvalid() == true)
        {
            Main.modal("aguardar","Aguarde... validando seus dados.");
            $.ajax({
                url: Url.base_url+'account/validar',
                data: $("#form_login").serialize(),
                dataType:'json',
                cache: false,
                type: 'POST',
                success: function (msg) {
                    if(msg.response == "valido")
                    {
                        window.location.assign(Url.base_url + "pedidos");
                    }
                    else
                    {
                        setTimeout(function(){
                            $('#modal_aguardar').modal('hide');
                        },500);
                        Main.limpa_login();
                        Main.modal("aviso", msg.response);
                    }
                }
            });
        }
    },
    logout : function (){
        Main.modal("aguardar", "Aguarde... encerrando sessão");
    },
    modal : function(tipo, mensagem)
    {
        $("#mensagem_"+tipo).html(mensagem);
        $('#modal_'+tipo).modal({
            keyboard: true,
            backdrop : 'static',
        });

        if(tipo == "aviso")
        {
            $('#modal_aviso').on('shown.bs.modal', function () {
                $('#bt_close_modal_aviso').trigger('focus')
            })
        }
        else if(tipo == "confirm")
        {
            $('#modal_confirm').on('shown.bs.modal', function () {
                $('#bt_confirm_modal').trigger('focus')
            })
        }
    },
    limpa_login : function ()
    {
        $("#password").val("");
        $("#password").focus();
    },
    login_isvalid : function (){
        if($("#email").val() == "")
            Main.show_error("email","Informe seu e-mail","");
        else if(Main.valida_email($("#email").val()) == false)
            Main.show_error("email","Formato de e-mail inválido","");
        else if($("#password").val() == "")
            Main.show_error("password","Insira sua senha","");
        else
            return true;
    },
    valida_email : function(email)
    {
        var nome = email.substring(0, email.indexOf("@"));
        var dominio = email.substring(email.indexOf("@")+ 1, email.length);

        if ((nome.length >= 1) &&
            (dominio.length >= 3) &&
            (nome.search("@")  == -1) &&
            (dominio.search("@") == -1) &&
            (nome.search(" ") == -1) &&
            (dominio.search(" ") == -1) &&
            (dominio.search(".") != -1) &&
            (dominio.indexOf(".") >= 1)&&
            (dominio.lastIndexOf(".") < dominio.length - 1))
            return true;
        else
            return false;
    },
    show_error : function(form, error, class_error)
    {
        if(class_error != "")
            document.getElementById(form).className = "input-material "+class_error;
        if(error != "" && document.getElementById(form) != undefined)
            document.getElementById(form).focus();

        document.getElementById("error-"+form).innerHTML = error;
    },
    DelSessao : function (id, nome) {
        Main.modal('confirm', nome + '</br> Tem certeza que deseja excluir esse registro?');
        $('#bt_delete').click(function () {
            window.location.href = Main.base_url + "sessao/deletaSessao/" + id;
        });
    },
    preenche_sessao : function ()
    {
        var file_data = $('#file').prop('files')[0];
        if(file_data != null){
            var ano_arquivo = file_data['name'].split("-");
            var dia_arquivo = ano_arquivo[1].split(".");
            $("#snum").val(dia_arquivo[0]);

            $("#categoria").change(function () {

                var idCategoria = $("#categoria").val();

                switch (idCategoria) {
                    case "1" :
                            $("#sessao").val("S. Ordinárias de "+ ano_arquivo[0]);
                        break;
                    case "2":
                        $("#sessao").val("S. Extraordinárias de " + ano_arquivo[0]);
                        break;
                    case "3":
                        $("#sessao").val("S. Solenes de "+ ano_arquivo[0]);
                        break;
                    default :
                        $("#sessao").val("S. Ordinárias de "+ ano_arquivo[0]);
                }
            });
        }

    },
    preview_foto : function () {
        var file = $(this).parents().find(".file");
        file.trigger("click");
    },
    altera_foto_preview : function () {
        var fileName = e.target.files[0].name;
        $("#file").val(fileName);

        var reader = new FileReader();
        reader.onload = function(e) {
            // get loaded data and render thumbnail.
            document.getElementById("preview").src = e.target.result;
        };
        // read the image file as a data URL.
        reader.readAsDataURL(this.files[0]);
    },
    altera_vereador : function(){
        var nome = $("#nome").val();
        var email = $("#email").val();
        var partido = $("#partido").val();
        var id = $("#id").val();
        var file_data = $('#file').prop('files')[0];
        var fd = new FormData();
        fd.append('arquivo',file_data);
        fd.append('nome',nome);
        fd.append('email',email);
        fd.append('partido',partido);
        fd.append('id',id);
        if(nome != '' && partido != '' && email != '', id!='') {
            $.ajax({
                method: "POST",
                url: Main.base_url + "vereadores/altera_vereador",
                dataType: 'text',
                cache: false,
                contentType: false,
                processData: false,
                data: fd,
                type: 'post'
            }).done(function (html) {
                window.location.href = Main.base_url + "vereadores";
            });
        }
        else{
            alert("Falta Preencher alguns dados");
        }
    }

}

