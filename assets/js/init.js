$(document).ready(function(){
	Main.carrega();
    //event for form login
    $("#form_login").submit(function(event) {
        event.preventDefault();
        Main.login();
    });

    $('#email').blur(function() {
        if (this.value != '') {
            if (Main.valida_email(this.value) == false)
                Main.show_error("email", 'Formato de e-mail inválido', '');
            else
                Main.show_error("email", '', '');
        }
    });

    $('#senha-login').blur(function() {
        if (this.value != '') Main.show_error("password", '', '');
    });

    $('#bt_logout').click(function() {
        Main.logout();
    });

    //LOGIN
});