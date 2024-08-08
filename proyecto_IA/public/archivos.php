<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Archivos</title>
</head>
<body>
    <h1>Archivos</h1>
    <form action="../src/upload.php" method="POST" enctype="multipart/form-data">
        <label for="file">Subir archivo:</label>
        <input type="file" id="file" name="file" required>
        <br>
        <button type="submit">Subir</button>
    </form>
</body>
</html>
