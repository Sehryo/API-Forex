<?php
ini_set('display_errors',1);
ini_set('display_startup_erros',1);
error_reporting(E_ALL);
require 'vendor/autoload.php';
require 'includes/dbconfig.php';
include('includes/simple_html_dom.php');
use JonnyW\PhantomJs\Client;
$client = Client::getInstance();
$client->isLazy();
$client->getEngine()->setPath('bin/phantomjs');
$client->getEngine()->debug(true);

/** 
 * @see JonnyW\PhantomJs\Http\Request
 **/
    $request = $client->getMessageFactory()->createRequest('https://www.investing.com/currencies/aud-cad', 'GET');
    $request->setTimeout(9000);
    $request->setDelay(8);
    /** 
     * @see JonnyW\PhantomJs\Http\Response 
     **/
    $response = $client->getMessageFactory()->createResponse();
    var_dump($client->getLog());
    $response->getContent();
    // Send the request
/*for($a = 0; $a < 4; $a++){ 
    $client->send($request, $response);
    $html = new simple_html_dom();
    $html->load($response->getContent());
    $valores = $html->find('div[class="inlineblock"]');
    $valorAtual = explode(" ", $valores[0]->plaintext);
    $date = new DateTime();
    $horario_valor = $date->getTimestamp();
    $data = [
        'base_valor' => $valorAtual[26],
        'horario_valor' => $horario_valor
    ];
    $database->getReference("moedas/AUDCAD")->push($data);
}*/
?>