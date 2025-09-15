<?php
session_start();

// Verificar se o carrinho já existe
if (!isset($_SESSION['cart1'])) {
    $_SESSION['cart1'] = [];
}

// Conexão com o banco de dados
$servidor = "localhost";
$usuario = "root";
$senha = "";
$banco = "login";

$conexao = mysqli_connect($servidor, $usuario, $senha, $banco);

// Obter o ID do produto
if (isset($_GET['id'])) {
    $id_produto = intval($_GET['id']);

    // Buscar os detalhes do produto no banco
    $sql = "SELECT * FROM natal WHERE ID = $id_produto";
    $resultado = mysqli_query($conexao, $sql);
    $produto = mysqli_fetch_assoc($resultado);

    if ($produto) {
        // Adicionar o produto ao carrinho
        $_SESSION['cart1'][] = [
            'id' => $produto['ID'],
            'nome' => $produto['nome'],
            'preco' => $produto['preco'],
            'img' => $produto['img'],
            'quantidade' => 1, // Inicialmente, 1 unidade
        ];

        echo "<script>alert('Produto adicionado ao carrinho!'); window.location.href='natal.php';</script>";
    } else {
        echo "<script>alert('Produto não encontrado.'); window.location.href='natal.php';</script>";
    }
} else {
    echo "<script>alert('ID do produto inválido.'); window.location.href='natal.php';</script>";
}




