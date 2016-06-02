/**
 * Script criado para fazer a solicitação de acesso/login ao sistema utilizando o ajax do jQuery.
 * 
 */
$(document).ready(function (){
   $("#loginForm").submit(function (evt){
       evt.preventDefault();
       
       $.ajax({
            type: 'POST',
            url: "assets/controller/conexao.php",
            dataType: 'json',
            //dataType: 'html',
            data: $("#loginForm").serialize(),
            beforeSend: function (xhr) {
                //alert("Antes de Enviar");
            },
            complete: function (jqXHR, textStatus) {
                //alert("Completo");
            },
            error: function (jqXHR, textStatus, errorThrown) {
                //console.log(jqXHR.responseText);
                //alert("Usuário e/ou senha incorretos");  
                $("#retorno").html("<h3>Usuário ou senha inválidos</h3>");
            },
            success: function (data) {
                //$("#retorno").html(data);
                $(window.document.location).attr('href',data.url);
            }
                
            
       });
   }); 
});
