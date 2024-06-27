<?php
// Configurações do banco de dados
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "loja";

// Conectar ao banco de dados
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar a conexão 
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

// Verificar se a requisição foi feita via método POST
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Verificar se todas as variáveis foram recebidas
    if (isset($_POST['nome'], $_POST['email'], $_POST['telefone'], $_POST['endereco'], $_POST['cidade'], $_POST['estado'], $_POST['cep'], $_POST['data_nascimento'])) {
        // Atribuir valores recebidos via POST às variáveis
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $telefone = $_POST['telefone'];
        $endereco = $_POST['endereco'];
        $cidade = $_POST['cidade'];
        $estado = $_POST['estado'];
        $cep = $_POST['cep'];
        $data_nascimento = $_POST['data_nascimento'];

        // Preparar a declaração SQL para inserção
        $stmt = $conn->prepare("INSERT INTO clientes (nome, email, telefone, endereco, cidade, estado, cep, data_nascimento) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
        
        // Verificar se a preparação da declaração SQL foi bem-sucedida
        if ($stmt === false) {
            die("Erro na preparação da declaração SQL: " . $conn->error);
        }
        
        // Vincular parâmetros à declaração SQL
        $stmt->bind_param("ssssssss", $nome, $email, $telefone, $endereco, $cidade, $estado, $cep, $data_nascimento);
        
        // Executar a declaração
        if ($stmt->execute()) {
            echo "Cliente cadastrado com sucesso";
        } else {
            echo "Erro ao cadastrar cliente: " . $stmt->error;
        }

        // Fechar a declaração
        $stmt->close();
    } else {
        echo "Todos os campos do formulário devem ser preenchidos.";
    }
    
} else {
    header('Location: formulario.html');
    exit;
}

// Fechar a conexão
$conn->close();
?>
