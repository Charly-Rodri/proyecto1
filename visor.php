<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
      <?php
        
        $nombre = $POST["txtNombre"];
        $apellido = $POST["txtApellido"];
        $telefono = $POST["Telefono"];
        
        $contenido="
            Nombre: $nombre
            Apellido: $apellido
            Telefono: $telefono
                ";
        
        $archivo = fopen("datos/$apellido.txt", "w");
        fwrite($archivo,$contenido);
        
          ?>
    </body>
    <div aling=center">
        <h2>Sus datos han sido guardados correctamente</h2>h
        <h5><a href="index.php">pulse aki para volver a intentarlo</a></h5>
