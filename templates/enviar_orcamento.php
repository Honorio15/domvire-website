<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $endereco = $_POST['endereco'];
    $tipo_cortina = $_POST['tipo_cortina'];
    $medidas = $_POST['medidas'];

    // Aqui você pode adicionar o código para enviar um email ou salvar os dados em um banco de dados
    // Exemplo de mensagem de confirmação:
    echo "Obrigado, $nome! Recebemos seu pedido de pré-orçamento e entraremos em contato em breve.";
} else {
    echo "Método de requisição inválido.";
}
