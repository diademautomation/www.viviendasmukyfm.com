<!DOCTYPE HTML>
<html lang="es">
    <head>
        <meta charset="UTF-8"/>
        <title>Validar formularios con Codeigniter</title>
    </head>
    <body>
<!--Creamos un formulario que nos lleve al controlador formulario_controller/recibirFormulario-->
     
        <form action="<?php echo base_url("formulario/recibirFormulario")?>" method="post">
            <input type="text"  name="nombre"/>
            <input type="email" name="email"/>
            <input type="password" name="password"/>
            <input type="submit" name="submit" value="Enviar"/>
        </form>
        <h2><?php if(isset($mensaje)) echo $mensaje; ?></h2>
        <?=validation_errors();?><!--mostrar los errores de validación-->
    </body>
</html>
