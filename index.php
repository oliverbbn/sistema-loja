<?php
$nomeProduto = "Cadeira Gamer";
$precoUnitario = 699.00;
$quantidade = 10;
$desconto = 0.15;
$subtotal = $precoUnitario * $quantidade;
$valorDesconto = $subtotal * $desconto;
$valorFinal = $subtotal - $valorDesconto;

echo "Produto: $nomeProduto | Quantidade: $quantidade | Valor Final: R$ $valorFinal";
