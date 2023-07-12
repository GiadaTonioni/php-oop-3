<?php
require_once __DIR__.'/Models/SistemiComunicazione.php';
require_once __DIR__.'/Models/Email.php';

//Sistemi Comunicazione
$comm = new SistemiComunicazione('Giada', 'Sofia', 'Concerto', 'Biglietti presi');
var_dump($comm);

echo "Mittente: ".$comm->getMittente()."<br/>";
echo "Destinatario: ".$comm->getDestinatario()."<br/>";
echo "Oggetto: ".$comm->getOggetto()."<br/>";
echo "Contenuto: ".$comm->getContenuto()."<br/>";
echo "Stato invio: ".$comm->Invio()."<br/>";

//EMAIL
$email = new Email('Ticketone', 'Giada', 'biglietti', 'scarica i tuoi biglietti', false);
var_dump($email);

echo "Mittente: ".$email->getMittente()."<br/>";
echo "Destinatario: ".$email->getDestinatario()."<br/>";
echo "Oggetto: ".$email->getOggetto()."<br/>";
echo "Contenuto: ".$email->getContenuto()."<br/>";
echo "Stato invio: ".$email->invio()."<br/>";
echo "Notifica: ".$email->getNotificaConsegna()."";
if($email->getNotificaConsegna()){
    echo "email consegnata correttamente";
}
else{
    echo "email non consegnata";
}
//echo "stampa: ".$comm->stampa()."<br/>";
//echo "inoltro: ".$comm->inoltro()."<br/>";




?>