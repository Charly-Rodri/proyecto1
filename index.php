<html>
    <head>
        <title> Pagina de Prueba </title>
        <style>
            body{
                background:blue;
            }
            @divPrincipal
            {
                width:400px;
                margin:0 auto;
                margin-top:40px;
                
            }
            table
            {
                color:white;
            }
        </style>
    </head>
    <body>
        <div id ="divPrincipal" aling="center">
            <form method="post" action="visor.php">
                <table> 
                    <tr>
                        <td><label>Nombre</td>
                        <td><input type="text" id="txtNombre" name="txtNombre"/></label></td>
                    </tr>
                    <tr>
                        <td><label>Apellido</td>
                        <td><input type="text" id="txtApellido" name="txtApellido"/></td>
                    </tr>
                     <td><label>Telefono</td>
                        <td><input type="text" id="txtTelefono" name="txtTelefono"/></td>
                    </tr>
                    <tr>
                        <td aling="center" colspan="2"><button type="submit">enviar</button></td>
                    </tr>
                </table>
            </form>
        </div>
    </body>
</html>
