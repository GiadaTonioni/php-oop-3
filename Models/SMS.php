<?php
    class SMS extends SistemiComunicazione{
        private $notifica_lettura;
        private $accettazione_risposta;
        public static $colore_led = "Green";

        public function __construct($_mittente, $_destinatario, $_oggetto, $_contenuto, Bool $notifica_lettura, Bool $_accettazione_risposta,){
            parent::__construct($_mittente, $_destinatario, $_oggetto, $_contenuto);
            $this->notifica_lettura = $_notifica_lettura;
            $this->accettazione_risposta = $_accettazione_risposta;
        }

        public function getNotificaLettura(){
            return $this->$_notifica_lettura;
        }

        public function getAccettazioneRisposta(){
            return $this->$_accettazione_risposta;
        }

        //polimorfismo
        public function invio(){
            return 'sms inviato';
        }

        public function risposta(){
            return 'grazie per avermi scritto';
        }


    }