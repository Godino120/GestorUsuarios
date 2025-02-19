<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Project/PHP/PHPProject.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Registrar Usuario</title>
    </head>
    <body>
        <h2>Bienvenido al Gestor de Usuarios</h2>
        <h3>Registro de Usuario</h3>
        <form action="register.php" method="POST">
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" required><br><br>
            
            <label for="correo">Correo:</label>
            <input type="email" id="correo" name="correo" required><br><br>
            
            <label for="password">Contraseña:</label>
            <input type="password" id="password" name="password" required><br><br>
            
            <input type="submit" value="Registrarse">
        </form>
    </body>
</html>
