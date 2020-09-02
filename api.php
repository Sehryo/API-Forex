<?php 
error_reporting(E_ALL);
ini_set('display_errors', 'On');
include('includes/dbconfig.php');
$max_value = 0;
$min_value = 10000;
$ref = $_GET['nome-dupla'];
$periodo = $_GET['periodo'];
$time = new DateTime();
$valor_inicio = 0;
$valor_fim = 0;
$momento_inicio = 0;
$periodo_inicio = $time->getTimestamp() - $periodo;
$periodo_fim = $time->getTimestamp();
$fetchdata = $database->getReference("moedas/".$ref)->orderByChild("horario_valor")->startAt($periodo_inicio)->endAt($periodo_fim)->getValue();
foreach($fetchdata as $key => $row){
    if(floatval($row['base_valor']) > $max_value)
    {
        $max_value = floatval($row['base_valor']);
    }
    if(floatval($row['base_valor']) < $min_value){
        $min_value = floatval($row['base_valor']);
    }
    if($valor_inicio == 0) {
        $valor_inicio = $row['base_valor'];
        $momento_inicio = $row['horario_valor'];
    }
    else if($momento_inicio < intval($row['horario_valor'])){
        $valor_fim = $row['base_valor'];
    }
}
$volatilidade = $valor_fim - $valor_inicio;
echo ($max_value . "\r\n" . $min_value . "\r\n" . round(($valor_fim - $valor_inicio)/$valor_inicio*100,2) . "\r\n" . round($volatilidade, 4));
?>