<?php
$link = mysql_connect('localhost','root','');
if(!$link){
    echo'No se pudo conectar con la base de datos'.mysql_error();

}else {
    $base = mysql_select_db('usuarios',$link);
    if (!$base) {
        echo'No se pudo encontrar la base de datos:'.mysql_error();

    }else {
        $sql = "SELECT * FROM usuarios";
        $ejecuta_sentencia = mysql_query($sql);
        if (!$ejecuta_sentencia) {
            echo'hay un error en la sentencia de sql: ' .$sql;

        }else {
            $lista_usuarios = mysql_fetch_array($ejecuta_sentencia);
        }
    }
}  
?>
<!DOCTYPE html>
<html>
<body>
    <table> 
        <th>Nombre</th>
        <th>Apellido</th>
        <th>Correo</th>
        <th>Usuario</th>
        <th>Contraseña</th>
        <?php

        for($i=0;$i<$lista_usuarios;$i++){
            echo"<tr>";
            echo "<td>";
            echo$lista_usuarios["Nombre"];
            echo "</td>";
            echo"</tr>";
            $lista_usuarios = mysql_fetch_array($ejecuta_sentencia);
       
        }
        ?>
    </table>
</body>

</html>