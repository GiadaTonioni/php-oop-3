<?php
require_once __DIR__.'/Models/SistemiComunicazione.php';

$comm = new SistemiComunicazione('Giada', 'Sofia', 'Concerto', 'Biglietti presi');
var_dump($comm);
?>