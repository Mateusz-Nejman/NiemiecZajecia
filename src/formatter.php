<?php

class Zwiazek_Chemiczny
{
    public $nazwa;
    public $cas;
    public $we;
    public $wzor;
    public $un;
    public $rid_adr;

    function __construct($_nazwa, $_cas, $_we, $_wzor, $_un, $_rid_adr)
    {
        $this->nazwa = $_nazwa;
        $this->cas = $_cas;
        $this->we = $_we;
        $this->wzor = $_wzor;
        $this->un = $_un;
        $this->rid_adr = $_rid_adr;
    }
}


/*$compound = new Zwiazek_Chemiczny("Wodorotlenek czegoś tam", "","","H2SO4", "","");

echo "var_dump\n";
echo var_dump($car)."\n";
echo "json_encode\n";
echo json_encode($car)."\n";
echo "serialize\n";
echo serialize($car)."\n";
*/

$dsn = 'mysql:dbname=protolab_system;host=127.0.0.1';
$user = 'root';
$password = '';

try
{
    $pdo = new PDO($dsn,$user,$password);
    $query = $pdo->query("select * from compounds");
    echo var_dump($query);
}
catch(Exception $e)
{

}
