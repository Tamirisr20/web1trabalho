<?php 
    $url = 'localhost';
    $usuario = 'root';
    $senha = '';
    $dataBase = 'web1';  // Corrigido para incluir o nome do banco de dados
    $link = new mysqli($url, $usuario, $senha, $dataBase);
    $link->set_charset('utf8');

    if($link->connect_error) {
        die('Connect Error ('.mysqli_connect_errno().')'.mysqli_connect_error());
    } else {
        echo "Conexão Okay";
    }

    // Criação do banco de dados, se não existir
    $query_create_schema = "CREATE SCHEMA IF NOT EXISTS $dataBase";
    if($link->query($query_create_schema) === TRUE){
        echo "<p>Criou o Banco de Dados</p>";
    } else {
        echo "<p>Não criou o banco de dados: ".$link->error."</p>";
    }

    // Seleção do banco de dados
    $link->select_db($dataBase);

    // Criação das tabelas
    $queries = [
        "CREATE TABLE IF NOT EXISTS responsavel (
            id_Resp INT AUTO_INCREMENT PRIMARY KEY,
            nome_Resp VARCHAR(45) NOT NULL,
            email_Resp VARCHAR(60) NOT NULL,
            contato_Resp VARCHAR(15) NOT NULL
        )",
        "CREATE TABLE IF NOT EXISTS avatar (
            id_Avat INT AUTO_INCREMENT PRIMARY KEY,
            pele_Avat VARCHAR(60) NOT NULL,
            rosto_Avat VARCHAR(60) NOT NULL,
            cabelo_Avat VARCHAR(60) NOT NULL,
            torso_Avat VARCHAR(60) NOT NULL,
            pernas_Avat VARCHAR(60) NOT NULL
        )",
        "CREATE TABLE IF NOT EXISTS paciente (
            id_Pac INT AUTO_INCREMENT PRIMARY KEY,
            nome_Paci VARCHAR(60) NOT NULL,
            dataNasci_Pac VARCHAR(10) NOT NULL,
            id_Resp INT NOT NULL,
            id_Avat INT NOT NULL,
            CONSTRAINT fk_responsavel_paciente
                FOREIGN KEY (id_Resp) REFERENCES responsavel(id_Resp),
            CONSTRAINT fk_avatar_paciente
                FOREIGN KEY (id_Avat) REFERENCES avatar(id_Avat)
        )",
        "CREATE TABLE IF NOT EXISTS formulario (
            id_Form INT AUTO_INCREMENT PRIMARY KEY,
            resp_Form VARCHAR(15) NOT NULL,
            id_Pac INT NOT NULL,
            CONSTRAINT fk_paciente_formulario
                FOREIGN KEY (id_Pac) REFERENCES paciente(id_Pac)
        ) ENGINE=InnoDB",
        "CREATE TABLE IF NOT EXISTS dentista (
            id_Dent INT AUTO_INCREMENT PRIMARY KEY,
            nome_Dent VARCHAR(45) NOT NULL,
            usuario_Dent VARCHAR(30) NOT NULL,
            senha_Dent VARCHAR(16) NOT NULL
        )",
        "CREATE TABLE IF NOT EXISTS consulta (
            id_Cons INT AUTO_INCREMENT PRIMARY KEY,
            procedimenti_Cons VARCHAR(50) NOT NULL,
            data_Cons VARCHAR(12) NOT NULL,
            id_Form INT NOT NULL,
            id_Dent INT NOT NULL,
            CONSTRAINT fk_form_consulta
                FOREIGN KEY (id_Form) REFERENCES formulario(id_Form),
            CONSTRAINT fk_dentista_consulta
                FOREIGN KEY (id_Dent) REFERENCES dentista(id_Dent)
        )"
    ];

    foreach ($queries as $query) {
        if ($link->query($query) === TRUE) {
            echo "<p>Criou a tabela com sucesso.</p>";
        } else {
            echo "<p>Não criou a tabela: ".$link->error."</p>";
        }
    }

    $link->close();
?>
