var Main = {
	base_url : "http://" + window.location.host + "/adm/",
	carrega : function(){
		$(".dropdown-trigger").dropdown();
        $('#numero').mask('00/0000', {reverse: true});
	    $('select').formSelect();
	    $('.datepicker').datepicker({
		i18n: {
			months: ['Janeiro', 'Fevereiro', 'Março', 'Abril', 'Maio', 'Junho', 'Julho', 'Agosto', 'Setembro', 'Outubro', 'Novembro', 'Dezembro'],
			monthsShort: ['Jan', 'Fev', 'Mar', 'Abr', 'Mai', 'Jun', 'Jul', 'Ago', 'Set', 'Out', 'Nov', 'Dez'],
			weekdays: ['Domingo', 'Segunda', 'Terça', 'Quarta', 'Quinta', 'Sexta', 'Sabádo'],
			weekdaysShort: ['Dom', 'Seg', 'Ter', 'Qua', 'Qui', 'Sex', 'Sab'],
			weekdaysAbbrev: ['D', 'S', 'T', 'Q', 'Q', 'S', 'S'],
			today: 'Hoje',
			clear: 'Limpar',
			cancel: 'Sair',
			done: 'Confirmar',
			labelMonthNext: 'Próximo mês',
			labelMonthPrev: 'Mês anterior',
			labelMonthSelect: 'Selecione um mês',
			labelYearSelect: 'Selecione um ano',
			selectMonths: true,
			selectYears: 15,
		},
	    format: 'dd/mm/yyyy'
	    });
	    $('.fixed-action-btn').floatingActionButton();
	},
	envia_pedido : function(){

		var vereadores = $("#vereadores").val();
		var nome_pedido = "Pedido de Providência: " + $("#numero").val();
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
	},
	envia_noticia : function(){
        var titulo = $("#titulo").val();
        var data = $("#data").val();
        var texto = CKEDITOR.instances.texto.getData();
        var file_data = $('#file').prop('files')[0];
        var fd = new FormData();
        fd.append('arquivo',file_data);
        fd.append('titulo',titulo);
        fd.append('data',data);
        fd.append('texto',texto);
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
	}
}

