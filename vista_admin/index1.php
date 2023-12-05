<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css">
    <title>Professional Login</title>
</head>
<body>

<div class="minimalist-form"> 
    <form action="login.php" method="post">
        <label for="username">Nombres</label>
        <input type="text" id="username" name="username" required>
        <label for="codigo">Curp:</label>
        <input type="text" id="codigo" name="codigo" required>
        <button type="submit" class="button1">INICIAR SESIÓN</button>
        
    </form>

    <form action="logout.php">
        <button type="submit" class="button2">Borrar Cache</button>
    </form>
</div>
    
</body>
</html>