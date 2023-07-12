<?php
require_once __DIR__.'/Models/SistemiComunicazione.php';
require_once __DIR__.'/Models/Email.php';
require_once __DIR__.'/Models/Allegato.php';
require_once __DIR__.'/Models/SMS.php';
require_once __DIR__.'/Models/NotificaPush.php';




//Sistemi Comunicazione
$comm = new SistemiComunicazione('Giada', 'Sofia', 'Concerto', 'Biglietti presi');
//var_dump($comm);

echo "Mittente: ".$comm->getMittente()."<br/>";
echo "Destinatario: ".$comm->getDestinatario()."<br/>";
echo "Oggetto: ".$comm->getOggetto()."<br/>";
echo "Contenuto: ".$comm->getContenuto()."<br/>";
echo "Stato invio: ".$comm->Invio()."<br/><hr/>";

//EMAIL
$email = new Email('Ticketone', 'Giada', 'biglietti', 'scarica i tuoi biglietti', false);
$allegato = new Allegato('immagine', 'png', 2);
//$email->getAllegato($allegato);

//var_dump($email);

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
echo "<hr/>";
//echo "stampa: ".$comm->stampa()."<br/>";
//echo "inoltro: ".$comm->inoltro()."<br/>";
//echo "Allegato: ".$email->allegato->getNome().".".$email->allegato->getTipo().", Dimensioni: ".$email->allegato->getDimensioni()."Mb<br/>";

//SMS
$sms = new SMS('Poste', 'Luca', 'pin', 'questo è il tuo pin:****', true, false,);
//var_dump($sms);

echo "Mittente: ".$sms->getMittente()."<br/>";
echo "Destinatario: ".$sms->getDestinatario()."<br/>";
echo "Oggetto: ".$sms->getOggetto()."<br/>";
echo "Contenuto: ".$sms->getContenuto()."<br/>";
echo "Notifica: ".$sms->getNotificaLettura();
if($sms->getNotificaLettura()){
    echo "messaggio letto";
}
else{
    echo "messaggio non letto";
}
echo "<br/>"."Risposte:";

if($sms->getAccettazioneRisposta()){
    echo "il messaggio accetta risposte";
}
else{
    echo "il messaggio non accetta risposte";
}

echo "<br/>";
echo "Stato invio: ".$sms->invio()."<br/><hr/>";

//Notifica Push

$notifica = new NotificaPush('Instagram', 'Tizio', 'Notifica push per app', 'contenuto della notifica', true, 'icona');
//var_dump($notifica);

echo "Mittente: ".$notifica->getMittente()."<br/>";
echo "Destinatario: ".$notifica->getDestinatario()."<br/>";
echo "Oggetto: ".$notifica->getOggetto()."<br/>";
echo "Contenuto: ".$notifica->getContenuto()."<br/>";
echo "Notifica: ".$notifica->getVisibile()."";
if($notifica->getVisibile()){
    echo "notifica consegnata correttamente";
}
else{
    echo "notifica non consegnata";
}
echo "<br/>Icona: ".$notifica->getIcona()."<br/>";
echo "Stato invio: ".$notifica->invio()."<br/>";
echo "Click: ".$notifica->onClick()."<br/>";



?>