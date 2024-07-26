<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Construção do Avatar</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h1>Construção do Avatar</h1>
    <div id="avatar-container"></div>
    <form id="avatar-form" action="process.php" method="POST">
        <label for="skin-color">Cor da Pele:</label>
        <input type="color" id="skin-color" name="skin-color" required>
        <label for="eye-shape"> Cor dos Olhos:</label>
        <select id="eye-shape" name="eye-shape" required>
            <option value="blue">azul</option>
            <option value="green">verde</option>
        </select>
        <label for="eye-color">Cor dos Olhos:</label>
        <input type="color" id="eye-color" name="eye-color" required>
        <label for="mouth-shape">Formato da Boca:</label>
        <select id="mouth-shape" name="mouth-shape" required>
            <option value="smile">Sorriso</option>
            <option value="sad">Triste</option>
        </select>
        <label for="hair-style">Estilo do Cabelo:</label>
        <select id="hair-style" name="hair-style" required>
            <option value="short">Curto</option>
            <option value="long">Longo</option>
        </select>
        <label for="clothes">Roupas:</label>
        <select id="clothes" name="clothes" required>
            <option value="shirt">Camisa</option>
            <option value="dress">Vestido</option>
        </select>
        <button type="submit">Salvar Avatar</button>
    </form>
    <script src="https://cdn.dicebear.com/v2/avatars.js"></script>
    <script src="avatar.js"></script>
</body>
</html>