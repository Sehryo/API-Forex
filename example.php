<?php include('includes/dbconfig.php');
$max_value = 0;
$min_value = 10000000000;
$ref = $_POST['testedoteste'];
echo($ref);
$time = new DateTime();
$fetchdata = $database->getReference("moedas/".$ref)->orderByChild("horario_valor")->startAt($time->getTimestamp() - 100000000)->endAt($time->getTimestamp() - 1000000)->getValue();
foreach($fetchdata as $key => $row){
    if(floatval($row['max_valor']) > $max_value)
    {
        $max_value = floatval($row['max_valor']);
        echo $row['max_valor'];
    }
    if(floatval($row['min_valor']) < $min_value){
        $min_value = floatval($row['min_valor']);
        echo $row['min_valor'];
    }
}
echo '<br>' . $max_value . '<br>' . $min_value;
?>