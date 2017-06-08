<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <script src="js/jquery-3.2.1.min.js" type="text/javascript"></script>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>      
        <form id="frmusuario" action="controlador/validacion.php" method ="post">
            <div><label>Usuario: </label><input type="text" name="nomusuario" id="nomusuario"></div>
            <div><label>Clave: </label><input type="password" name="clave" id="clave"></div>
            <input id="enviar" type="button" onclick="" value="Enviar">
            <div id="mensaje" </div>
         </form>
    </body>
    <script>
    $(document).ready(function(){
            $("#enviar").click(function(){
                /*$("form").hide();
                alert("ocultaste al formulario;-) " + $("#nomusuario".val());*/
        
                if ($("#nomusuario").val()!="" && $("#clave").val()!=""){
                    /*$("#frmusuario").submit();*/
                    $.ajax({url:"controlador/validacion.php"
                        ,type:'post'
                        ,data:{'nomusuario':$("#nomusuario").val(),
                            'clave':$("#clave").val()
                            }
                        ,success:function(resultado){
                              $("#mensaje").html(resultado);
                          }      
                    });
                }//cierre if valida vlancos
                else
                    alert("Debe ingresar el usuario y clave");
            });
        });
     </script>
</html>
