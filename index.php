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
        <form action="resultado.php" method="post">
            <div>
                Ingrese Nombre: <input type="text" name="nombre"/>
            </div>
            <div>
                Seleccione Nacionalidad:
                <select name="nacionalidad">
                    <option value="argentino">Argentino</option>
                    <option value="ruso">Ruso</option>
                    <option value="hungaro">Hungaro</option>
                    <option value="colombiano">Colombiano</option>
                    <option value="panamense">Panamense</option>
                </select>
            </div>
            <div>
                Ingrese Apellido: <input type="text" name="apellido"/>
            </div>
            <div>
                <div>
                    <input type="radio" name="sexo" value="Masculino">Masculino                
                </div>
                <div>
                    <input type="radio" name="sexo" value="Femenino">Femenino
                </div>
            </div>            
            <div>
                <input type="submit" value="Enviar">
            </div>     
        </form>
    </body>
</html>
