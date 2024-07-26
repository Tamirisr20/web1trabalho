
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Avatar Builder</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
        }

        form {
            display: inline-block;
            text-align: left;
        }

        #avatarPreview {
            margin-top: 20px;
            height: 300px;
            width: 200px;
            border: 1px solid #000;
        }
    </style>
</head>
<body>
    <h1>Construa seu Avatar</h1>
    <form id="avatarForm">
        <label for="skinColor">Cor da pele:</label>
        <input type="color" id="skinColor" name="skinColor"><br><br>

        <label for="eyeShape">Formato dos olhos:</label>
        <select id="eyeShape" name="eyeShape">
            <option value="round">Redondo</option>
            <option value="almond">Amendoado</option>
        </select><br><br>

        <label for="eyeColor">Cor dos olhos:</label>
        <input type="color" id="eyeColor" name="eyeColor"><br><br>

        <label for="mouthShape">Formato da boca:</label>
        <select id="mouthShape" name="mouthShape">
            <option value="smile">Sorriso</option>
            <option value="neutral">Neutra</option>
        </select><br><br>

        <label for="hairStyle">Estilo do cabelo:</label>
        <select id="hairStyle" name="hairStyle">
            <option value="short">Curto</option>
            <option value="long">Longo</option>
        </select><br><br>

        <label for="hairColor">Cor do cabelo:</label>
        <input type="color" id="hairColor" name="hairColor"><br><br>

        <label for="clothes">Roupas:</label>
        <select id="clothes" name="clothes">
            <option value="dress">Vestido</option>
            <option value="shirt-pants">Camisa e Calça</option>
        </select><br><br>

        <button type="button" onclick="saveAvatar()">Salvar Avatar</button>
    </form>
    
    <div id="avatarPreview"></div>

    <script>
        function saveAvatar() {
            const form = document.getElementById('avatarForm');
            const formData = new FormData(form);
            const data = {};
            
            formData.forEach((value, key) => {
                data[key] = value;
            });
            
            fetch('', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json'
                },
                body: JSON.stringify(data)
            }).then(response => response.json())
              .then(data => {
                  if (data.success) {
                      alert('Avatar salvo com sucesso!');
                  } else {
                      alert('Erro ao salvar avatar!');
                  }
              });
        }
    </script>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        header('Content-Type: application/json');

        $host = 'localhost';
        $db = 'avatar_db';
        $user = 'your_database_user';
        $pass = 'your_database_password';

        $conn = new mysqli($host, $user, $pass, $db);

        if ($conn->connect_error) {
            die(json_encode(['success' => false, 'message' => 'Database connection failed']));
        }

        $data = json_decode(file_get_contents('php://input'), true);

        $skinColor = $conn->real_escape_string($data['skinColor']);
        $eyeShape = $conn->real_escape_string($data['eyeShape']);
        $eyeColor = $conn->real_escape_string($data['eyeColor']);
        $mouthShape = $conn->real_escape_string($data['mouthShape']);
        $hairStyle = $conn->real_escape_string($data['hairStyle']);
        $hairColor = $conn->real_escape_string($data['hairColor']);
        $clothes = $conn->real_escape_string($data['clothes']);

        $sql = "INSERT INTO avatars (skin_color, eye_shape, eye_color, mouth_shape, hair_style, hair_color, clothes)
                VALUES ('$skinColor', '$eyeShape', '$eyeColor', '$mouthShape', '$hairStyle', '$hairColor', '$clothes')";

        if ($conn->query($sql) === TRUE) {
            echo json_encode(['success' => true]);
        } else {
            echo json_encode(['success' => false, 'message' => 'Error: ' . $conn->error]);
        }

        $conn->close();
        exit();
    }
    ?>
</body>
</html>