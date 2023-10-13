<?php
require_once 'CalculadoraDivisa.php';

$indiceCambio = 37.07;
$calculadora = new CalculadoraDivisa($indiceCambio);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
$valorBolivares = $_POST["valor"];
$valorDolares = $calculadora->determinarDolares($valorBolivares);

echo "El valor en dólares es: " . number_format($valorDolares, 2);
}
?>
