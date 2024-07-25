<?php
header('Content-Type: application/json');

$host = 'localhost';
$db = 'your_database_name';
$user = 'your_database_user';
$pass = 'your_database_password';

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die(json_encode(['success' => false, 'message' => 'Database connection failed']));
}

$data = json_decode(file_get_contents('php://input'), true);

$corPele = $conn->real_escape_string($data['corPele']);
$formaOlho = $conn->real_escape_string($data['formaOlho']);
$corOlho = $conn->real_escape_string($data['corOlho']);
$formaBoca = $conn->real_escape_string($data['formaBoca']);
$cabelo = $conn->real_escape_string($data['cabelo']);
$corCabelo = $conn->real_escape_string($data['corCabelo']);
$roupa = $conn->real_escape_string($data['roupa']);

$sql = "INSERT INTO avatars (skin_color, eye_shape, eye_color, mouth_shape, hair_style, hair_color, clothes)
        VALUES ('$corPele', '$formaOlho', '$corOlho', '$formaBoca', '$cabelo', '$corCabelo', '$roupa')";

if ($conn->query($sql) === TRUE) {
    echo json_encode(['success' => true]);
} else {
    echo json_encode(['success' => false, 'message' => 'Error: ' . $conn->error]);
}

$conn->close();

if ($_SERVER["REQUEST_METHOD"]== "POST"){
    $nome = $_POST['nome'];
       if (empty($nome)){
        echo "Escreva o nome para enviar o cadastro";
    } else {
        echo $nome;
    }
    $idade_paciente = $_POST['idade_paciente'];
    if (empty($idade_paciente)){
        echo "Escreva a idade para enviar o cadastro";
    } else {
        echo $idade_paciente;
    }
    $data_nasc = $_POST['data_nasc'];
    if (empty($data_nasc)){
        echo "Escreva a data de nascimento para enviar o cadastro";
    } else {
        echo $data_nasc;
    }
    $alergias_paciente = $_POST['alergias_paciente'];
    if (empty($alergias_paciente)){
        echo "Escreva a alergia para enviar o cadastro, se não tiver, escreva 'Não'.";
    } else {
        echo $alergias_paciente;
    }
    $nome_responsavel = $_POST['nome_responsavel'];
    if (empty($nome_responsavel)){
        echo "Escreva o nome do responsável para enviar o cadastro."
    } else {
        echo $nome_responsavel;
    }
    $email = $_POST['email'];
    if (empty($email)){
        echo "Escreva o e-mail do responsável para enviar o cadastro."
    } else {
        echo $email;
    } 
}
?>