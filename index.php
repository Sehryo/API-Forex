<?php
include('includes/dbconfig.php');
ini_set('max_execution_time', 1200);
$access_key = "y4iSRXfOwce3ugA1yripK8li35kxFe8QQlPiqg1n2fUzSzBbFS"; // Your API access key, Signup to get API KEY 
$symbol = "EURUSD"; // FX Pairs 

// Enter your API URL below 
// $api_url = "https://fcsapi.com/api-v2/forex/history?symbol='$symbol'&period=1d&from=2019-04-01&to=2019-07-30&access_key=y4iSRXfOwce3ugA1yripK8li35kxFe8QQlPiqg1n2fUzSzBbFS";

$symbols = array(
    "JPY/CHF",
    "CHF/EUR",
    "CHF/CAD"
);
// Initialize CURL: 
/* $ch = curl_init($api_url); 
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); 
$json = curl_exec($ch); // Store the data 
curl_close($ch); 
$decode = json_decode($json, true);
foreach($decode["response"] as $valor){
    $base_valor = $valor['o'];
    $max_valor = $valor['h'];
    $min_valor = $valor['l'];
    $horario_valor = $valor['t'];
    $data = [
        'base_valor' => $base_valor,
        'max_valor' => $max_valor,
        'min_valor' => $min_valor,
        'horario_valor' => $horario_valor
    ];
    $postdata = $database->getReference($symbol)->push($data);
}
*/
/*
for($x = 0; $x < count($symbols); $x++){
        $api_url = "https://fcsapi.com/api-v2/forex/history?symbol=".$symbols[$x]."&period=1d&from=2019-08-01&to=2020-08-15&access_key=y4iSRXfOwce3ugA1yripK8li35kxFe8QQlPiqg1n2fUzSzBbFS";
        $ch = curl_init($api_url); 
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); 
        $json = curl_exec($ch); // Store the data 
        curl_close($ch); 
        echo($api_url);
        $decode = json_decode($json, true);
        foreach($decode["response"] as $valor){
            $base_valor = $valor['o'];
            $max_valor = $valor['h'];
            $min_valor = $valor['l'];
            $horario_valor = $valor['t'];
            $data = [
                'base_valor' => $base_valor,
                'max_valor' => $max_valor,
                'min_valor' => $min_valor,
                'horario_valor' => $horario_valor
            ];
            $postdata = $database->getReference($symbols[$x])->push($data);
        }
}
*/
/*
function insertData1($moeda){
    include('includes/dbconfig.php');
    $api_url = "https://fcsapi.com/api-v2/forex/history?symbol=".$moeda."&period=1d&from=2019-08-01&to=2020-08-15&access_key=y4iSRXfOwce3ugA1yripK8li35kxFe8QQlPiqg1n2fUzSzBbFS";
    $ch = curl_init($api_url); 
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); 
    $json = curl_exec($ch); // Store the data 
    curl_close($ch); 
    echo($api_url);
    $decode = json_decode($json, true);
    foreach($decode["response"] as $valor){
        $base_valor = $valor['o'];
        $max_valor = $valor['h'];
        $min_valor = $valor['l'];
        $horario_valor = $valor['t'];
        $data = [
            'base_valor' => $base_valor,
            'max_valor' => $max_valor,
            'min_valor' => $min_valor,
            'horario_valor' => $horario_valor
        ];
        $database->getReference("moedas/".str_replace("/", "", $moeda))->push($data);
    }
}

function insertData2($moeda){
    include('includes/dbconfig.php');
    $api_url2 = "https://fcsapi.com/api-v2/forex/history?symbol=".$moeda."&period=1d&from=2019-08-01&to=2020-08-15&access_key=y4iSRXfOwce3ugA1yripK8li35kxFe8QQlPiqg1n2fUzSzBbFS";
    $ch2 = curl_init($api_url2); 
    curl_setopt($ch2, CURLOPT_RETURNTRANSFER, true); 
    $json2 = curl_exec($ch2); // Store the data 
    curl_close($ch2); 
    echo($api_url2);
    $decode2 = json_decode($json2, true);
    foreach($decode2["response"] as $valor){
        $base_valor = $valor['o'];
        $max_valor = $valor['h'];
        $min_valor = $valor['l'];
        $horario_valor = $valor['t'];
        $data = [
            'base_valor' => $base_valor,
            'max_valor' => $max_valor,
            'min_valor' => $min_valor,
            'horario_valor' => $horario_valor
        ];
        $database->getReference("moedas/".str_replace("/", "", $moeda))->push($data);
    }
}

function insertData3($moeda){
    include('includes/dbconfig.php');
    $api_url3 = "https://fcsapi.com/api-v2/forex/history?symbol=".$moeda."&period=1d&from=2019-08-01&to=2020-08-15&access_key=y4iSRXfOwce3ugA1yripK8li35kxFe8QQlPiqg1n2fUzSzBbFS";
    $ch3 = curl_init($api_url3); 
    curl_setopt($ch3, CURLOPT_RETURNTRANSFER, true); 
    $json3 = curl_exec($ch3); // Store the data 
    curl_close($ch3); 
    echo($api_url3);
    $decode3 = json_decode($json3, true);
    foreach($decode3["response"] as $valor){
        $base_valor = $valor['o'];
        $max_valor = $valor['h'];
        $min_valor = $valor['l'];
        $horario_valor = $valor['t'];
        $data = [
            'base_valor' => $base_valor,
            'max_valor' => $max_valor,
            'min_valor' => $min_valor,
            'horario_valor' => $horario_valor
        ];
        $database->getReference("moedas/".str_replace("/", "", $moeda))->push($data);
    }
}

insertData1($symbols[0]);
insertData2($symbols[1]);
insertData3($symbols[2]);
*/
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Qualquer coisa aa</title>
    <script type="text/javascript">
        function juntar(){
            var moeda_base = document.getElementById('m_base').value;
            var moeda_compar = document.getElementById('m_compar').value;
            if(moeda_base === moeda_compar){
                alert('Selecione moedas diferentes!');
                return false;
            }
            else{
                document.getElementById("escondido").value = moeda_base + moeda_compar;
                return true;
            }
        }
    </script>
</head>
<body>
    <div style="max-width: 500px; width: 100%; margin: 0 auto; background-color: aliceblue; border: 1px solid black">
        <h1>Verifique o valor das moedas no teste do teste</h1>
        <form action="api.php" method="GET">
        <div style="min-width: 100%;">
            <label for="periodo" style="margin-left: 5px">Selecione o período: </label>
            <select name="periodo" style="margin: 0 auto; margin-bottom: 15px">
                <option disabled selected style="display: none;">Selecione um período...</option>
                <option value="1 week">1 semana</option>
                <option value="2 weeks">2 semanas</option>
                <option value="1 month">1 mês</option>
            </select>
        </div>
        <div style="display: inline-block; margin: 0 auto; margin-left: 5px;">
            <label for="m_base">Moeda 1</label>
            <select id="m_base" style="display: block;">
                <option disabled selected style="display: none;">Selecione uma moeda...</option>
                <option value="EUR">EUR</option>
                <option value="USD">USD</option>
                <option value="CAD">CAD</option>
                <option value="JPY">JPY</option>
                <option value="AUD">AUD</option>
                <option value="GBP">GBP</option>
                <option value="NZD">NZD</option>
                <option value="CHF">CHF</option>
            </select>
        </div>
        <div style="display: inline-block; float: right; margin-right: 5px;">
            <label for="m_compar">Moeda 2</label>
            <select id="m_compar" style="display: block;">
                <option disabled selected style="display: none;">Selecione uma moeda...</option>
                <option value="EUR">EUR</option>
                <option value="USD">USD</option>
                <option value="CAD">CAD</option>
                <option value="JPY">JPY</option>
                <option value="AUD">AUD</option>
                <option value="GBP">GBP</option>
                <option value="NZD">NZD</option>
                <option value="CHF">CHF</option>
            </select>
        </div>
            <input type="hidden" name="nome-dupla" id="escondido">
            <input type="submit" value="Enviar" style="display: block; margin: 0 auto; margin-top: 10px; padding: 10px; margin-bottom: 10px;" onclick="return juntar();">
        </form>
    </div>
</body>
</html>