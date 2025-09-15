<?php
session_start();

// Verifique se a sessão de carrinho existe
if (isset($_SESSION['cart1'])) {
    // Recebe o nome do item a ser removido
    $data = json_decode(file_get_contents('php://input'), true);
    $itemNome = $data['item_nome'];

    // Procura o item no carrinho e o remove
    foreach ($_SESSION['cart1'] as $index => $item) {
        if ($item['nome'] == $itemNome) {
            unset($_SESSION['cart1'][$index]);
            $_SESSION['cart1'] = array_values($_SESSION['cart1']); // Reindexa o array
            echo json_encode(['success' => true]);
            exit;
        }
    }

    // Se o item não foi encontrado
    echo json_encode(['success' => false, 'message' => 'Item não encontrado.']);
} else {
    echo json_encode(['success' => false, 'message' => 'Carrinho não encontrado.']);
}
?>