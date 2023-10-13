<?php
class CalculadoraDivisa {
private $indiceCambio;

public function __construct($indiceCambio) {
$this->indiceCambio = $indiceCambio;
}

public function determinarDolares($valorBolivares) {
return $valorBolivares / $this->indiceCambio;
}
}
?>
