var Main = {
	base_url : "http://" + window.location.host + "/sessoes/",
	carrega : function(){
		$(".dropdown-trigger").dropdown();
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
		var nome_arquivo = $("#nome").val() + ".pdf";
		var nome_pedido = "Pedido de Providência: " + $("#numero").val();
		var data_pedido  = $("#data").val();
		$.ajax({
			method: "POST",
			url : Main.base_url+"pedidos/cria_pedido",
			data : { 
				vereador : vereadores,
				arquivo : nome_arquivo,
				nome : nome_pedido,
				data : data_pedido
			 }

		}).done(function(html){
			console.log("Sucess");
    		$( "#results" ).append(html);

		});
	}
}
