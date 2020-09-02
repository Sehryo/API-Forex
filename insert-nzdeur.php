<?php
require 'vendor/autoload.php';
require 'includes/dbconfig.php';
include('includes/simple_html_dom.php');
use JonnyW\PhantomJs\Client;
$client = Client::getInstance();
$client->isLazy();
$client->getEngine()->setPath('bin\phantomjs\phantomjs.exe');
/** 
 * @see JonnyW\PhantomJs\Http\Request
 **/
    $request = $client->getMessageFactory()->createRequest('https://www.investing.com/currencies/nzd-eur', 'GET');
    $request->setTimeout(9000);
    $request->setDelay(8);
    /** 
     * @see JonnyW\PhantomJs\Http\Response 
     **/
    $response = $client->getMessageFactory()->createResponse();

    // Send the request
for($a = 0; $a < 4; $a++){ 
    $client->send($request, $response); 
    /*if($response->getStatus() === 200) {

        // Dump the requested page content
        echo $response->getContent();
    }
    */
    //echo  '<br>'. $response->getStatus();
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
    $database->getReference("moedas/NZDEUR")->push($data);
}
?>