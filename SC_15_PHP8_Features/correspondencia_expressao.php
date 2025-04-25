<?php
$busca = '2';

// Comparação por igualdade (==) e não por identidade (===)
switch ($busca) {
    case '1':
        $retornoSwitch = 'Encontrou Texto 1';
        break;
    case 2:
        $retornoSwitch = 'Encontrou Número 2';
        break;
    
    default:
        $retornoSwitch = 'Não Encontrou';
        break;
}
echo "Resultado Switch = ".$retornoSwitch;
echo '<hr>';

$busca = 8;

// Comparação por identidade (===)
$retornoMatch = match($busca){
    '2' => 'Texto 2 ',
    2 => 'Número 2',
    5,8,'12','X' => 'Condições Combinada',
    default => 'Pode ou não ter o Default'
};

echo "Resultado match = ". $retornoMatch;
echo '<hr>';

$busca=21;
// Match com condicionais e operações lógicas
// Importante o parâmetro do match será sempre true
$retornoMatch = match(true){
    $busca < 20 =>'Encontrou',
    $busca >= 20 && $busca <= 30 => 'Valor entre 20 e 30',
    default => 'Não Encontrou'
};

echo "Resultado match = " . $retornoMatch;
?>
