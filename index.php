<?php
    require_once 'veiculo.php';

    // Criando objetos Carro e Moto
    $carro1 = new Carro('Palio', 'Fiat', 'ABC123', 2020, 'Hatch');
    $moto1 = new Moto('CG Fan', 'Honda', 'DEF456', 2023,  'Esportiva');
    
    // Exibindo detalhes do Carro
    echo "Detalhes do Carro:\n";
    $carro1->exibirDetalhes();
    $carro1->acelerar(50); // Acelerando o carro
    
    echo "\n";
    
    // Exibindo detalhes da Moto
    echo "Detalhes da Moto:\n";
    $moto1->exibirDetalhes();
    $moto1->acelerar(30); // Acelerando a moto
?>