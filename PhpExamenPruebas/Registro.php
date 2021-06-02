<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<!--

-->
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset="UTF-8">
        <title>Pruebas examen Desarrollo web</title>

    </head>
    <body>

        <script type="text/javascript">

            document.addEventListener("DOMContentLoaded", function () {
                document.getElementById("formulario").addEventListener('submit', validarFormulario);
            });



            function validarFormulario(evento) {
                evento.preventDefault();
                var usuario = document.getElementById('usuario').value;
                if (usuario.length == 0) {
                    alert('No has escrito nada en el usuario');
                    return;
                }
                var clave = document.getElementById('clave').value;
                if (clave.length < 6) {
                    alert('La clave no es válida');
                    return;
                }
                this.submit();
            }



            //añadir campo con DOM
            function masCampos() {

                var espacio = document.getElementById("div2");

              
                var texto = document.createTextNode("Texto");
                espacio.setAttribute("style", "background-color: #FE775A;");
                espacio.appendChild(texto);
                
                

            }
            
             


        </script>

        <form action="/phpexamenpruebas/login.php" id="formulario" method="POST">
            <p>
                Usuario: <input type="text" name="usuario" id="usuario">
            </p>
            <p>
                Clave: <input type="text" name="clave" id="clave">
            </p>
            <input type="submit" value="Entrar">
        </form>
        
        <input id="mas" value="Más pasos" type="button" onclick="masCampos()"/>
        
        <div id="div2"></div>

        <?php
        ?>
    </body>
</html>
