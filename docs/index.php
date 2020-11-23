<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Formulario</title>
        <link rel="stylesheet" href="estilos.css">
    </head>
    <body>

        <form class="" action="leng.php" method="POST">
            <table>
                <tr>
                    <td colspan="4"><h1>Datos personales</h1></td>
                </tr>
                <tr>
                    <td><label for="">Nombres:</label></td>
                    <td colspan="3"><input type="text" name="nombre" value="" placeholder="Ingrese su nombre" ></td>
                </tr>
                <tr>
                    <td><label for="">Apellidos:</label></td>
                    <td colspan="3"><input type="text" name="apellido" value="" placeholder="Ingrese su Apellido" ></td>
                </tr>
                <tr>
                    <td><label for="">Edad:</label></td>
                    <td colspan="3"><input type="number" name="edad" value="" placeholder="Ingrese su edad"></td>
                </tr>
                <tr>
                    <td> <label for="">Sexo:</label> </td>
                    <td colspan="3"><input type="radio" name="sexo" value="M">Masculino
                        <input type="radio" name="sexo" value="F">Femenino</td>
                </tr>
                <tr>
                    <td><label for="">Celular:</label></td>
                    <td colspan="3"><input type="text" name=celular"" value="" placeholder="Ingrese su numero celular"></td>
                </tr>
                <tr>
                    <td><label for="">Fecha</label></td>
                    <td colspan="3"><input type="date" name="fecha" value=""></td>
                </tr>
                <tr>
                    <td> <input type="submit" name="enviar" value="Crear" class="botoncrear"></td>
                    <td ><input type="submit" name="" value="Leer" class="bit"></td>
                    <td><input type="submit" name="" value="Actualizar" class="bit"></td>
                    <td><input type="submit" name="" value="Eliminar" class="botoneliminar"></td>
                </tr>

            </table>
        </form>

    </body>
</html>
