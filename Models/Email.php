<?php
    class Email extends SistemiComunicazione{
        public $allegato;
        private $notifica_consegna;

        public function __construct(String $_mittente,String $_destinatario,String $_oggetto,String $_contenuto, Bool $_notifica_consegna){
            parent::__construct($_mittente, $_destinatario, $_oggetto, $_contenuto);
            $this->notifica_consegna = $_notifica_consegna;
        }

        public function getAllegato(){
            return $this->allegato;
        }

        public function getNotificaConsegna(){
            return $this->notifica_consegna;
        }

        public function inoltro(){
            return 'Email inoltrata';
        }

        public function stampa(){
            return 'Email stampata';
        }

        //polimorfismo invio
        public function invio(){
            return 'email inviata';
        }
    }
    
?>