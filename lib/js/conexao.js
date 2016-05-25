/**
 * Script criado para fazer a solicitação de acesso/login ao sistema utilizando o ajax do jQuery.
 * 
 */
$(document).ready(function (){
   $("#loginForm").submit(function (evt){
       evt.preventDefault();
       
       $.ajax({
            type: 'POST',
            url: "assets/conexao.php",
            dataType: 'json',
            data: $("#loginForm").serialize(),
            beforeSend: function (xhr) {
                //alert("Antes de Enviar");
            },
            complete: function (jqXHR, textStatus) {
                //alert("Completo");
            },
            error: function (jqXHR, textStatus, errorThrown) {
                alert("Usuário e/ou senha incorretos");  
            },
            success: function (data) {
                if(data.conn)
                    $(window.document.location).attr('href',data.url);
            }
       });
   }); 
});
