<?php
$nomeProduto = "Cadeira Gamer";
$precoUnitario = 699.00;
$quantidade = 10;
$desconto = 0.15;
$subtotal = $precoUnitario * $quantidade;
$valorDesconto = $subtotal * $desconto;
$valorFinal = $subtotal - $valorDesconto;
$valorFinalFormatado = number_format($valorFinal,2,'.','');


echo "Produto: $nomeProduto | Quantidade: $quantidade | Valor Final: R$ $valorFinalFormatado<br>";

if ($quantidade == 0){
    echo "<br>Status: Produto esgotado!<br>";
} else if ($quantidade > 0 && $quantidade <= 5) {
    echo "<br>Status: Estoque crítico! Acionar fornecedor<br>";

} else {
    echo "<br>Status: Estoque Normal<br>";
}

if ($valorFinal > 1000.00){
    echo "<br>Aviso: Venda de Alto Valor!<br>Aplicar brinde especial na embalagem.<br>";
}

array($categorias = ["Eletrônicos", "Móveis", "Informática", "Games", "Livros"]);

//var_dump($categorias);

foreach ($categorias as $categoria) {
    echo "<br>Categoria disponível: $categoria";
}

$estado = "MG";

if ($estado == "SP"){
    $frete = 15.00;
} else if ($estado == "RJ" || $estado == "MG") {
    $frete = 20.00;
} else {
    $frete = 50.00;
}

echo "<br><br> Para o estado $estado, o valor do frete é R$ $frete.<br>";

array($notas_aluno = [7.5, 8.0, 6.5]);
$soma = $notas_aluno[0]+$notas_aluno[1] + $notas_aluno[2];
$media = $soma/count($notas_aluno);
$mediaFormatada = number_format($media,2,'.','');
echo " <br><br> A média do Aluno foi de $mediaFormatada.<br>";
if ($media >= 7){
    echo "<br>Aluno Aprovado!";
} else if ($media >= 5 && $media <= 6.9) {
    echo "<br>Aluno em Recuperação.";
} else {
    echo "<br>Aluno reprovado.";
}
