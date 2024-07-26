<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "web1";

// Cria conexão
$conn = new mysqli($servername, $username, $password, $dbname);

// Checa conexão
if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['child-name']) && isset($_POST['dentist-name'])) {
        $childName = $_POST['child-name'];
        $dentistName = $_POST['dentist-name'];

        $sql = "INSERT INTO usuario (child_name, dentist_name) VALUES ('$childName', '$dentistName')";

        if ($conn->query($sql) === TRUE) {
            echo "Cadastro realizado com sucesso!";
        } else {
            echo "Erro: " . $sql . "<br>" . $conn->error;
        }
    } elseif (isset($_POST['skin-color']) && isset($_POST['eye-shape'])) {
        $userId = $_POST['user-id'];  // Assumindo que o ID do usuário será passado no formulário
        $skinColor = $_POST['skin-color'];
        $eyeShape = $_POST['eye-shape'];
        $eyeColor = $_POST['eye-color'];
        $mouthShape = $_POST['mouth-shape'];
        $hairStyle = $_POST['hair-style'];
        $clothes = $_POST['clothes'];

        $sql = "INSERT INTO avatar (user_id, skin_color, eye_shape, eye_color, mouth_shape, hair_style, clothes) VALUES ('$userId', '$skinColor', '$eyeShape', '$eyeColor', '$mouthShape', '$hairStyle', '$clothes')";

        if ($conn->query($sql) === TRUE) {
            echo "Avatar salvo com sucesso!";
        } else {
            echo "Erro: " . $sql . "<br>" . $conn->error;
        }
    }
} elseif ($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET['user-id'])) {
    $userId = $_GET['user-id'];
    $sql = "SELECT * FROM avatar WHERE user_id = $userId ORDER BY id DESC LIMIT 1";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $avatarData = $result->fetch_assoc();
        $avatarOptions = json_encode([
            'skinColor' => $avatarData['skin_color'],
            'eyes' => $avatarData['eye_shape'],
            'eyesColor' => $avatarData['eye_color'],
            'mouth' => $avatarData['mouth_shape'],
            'hair' => $avatarData['hair_style'],
            'clothes' => $avatarData['clothes']
        ]);

        echo "<script>
            const avatarOptions = $avatarOptions;
            const avatar = dicebear.Avatar.avataaars(avatarOptions);
            document.getElementById('avatar-container').innerHTML = avatar;
        </script>";
    } else {
        echo "Nenhum avatar encontrado para este usuário.";
    }
}

$conn->close();
?>
