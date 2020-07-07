<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
<form method="post" action="enviar-prueba.php">
    <label for="email">Correo Electronico (destinatario)</label>
    <input type="email" name="email" id="email"/>
    <br><br>
    <label for="asunto">Asunto mail:</label>
    <input type="text" name="asunto" id="asunto"/>
    <br><br>
    <label for="mensaje">Escribe tu mensaje</label>
    <textarea name="mensaje" id="mensaje" cols="30" rows="10"></textarea>
    <hr>
    <button type="submit">Enviar Mensaje</button>
</form>
</body>
</html>