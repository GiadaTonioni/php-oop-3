<?php
    class NotificaPush extends SistemiComunicazione{
        private $visibile;
        private $icona;

    public function __construct(String $_mittente,String $_destinatario,String $_oggetto,String $_contenuto, Bool $_visibile, String $_icona){
        parent::__construct($_mittente, $_destinatario, $_oggetto, $_contenuto);
        $this->visibile = $_visibile;
        $this->icona = $_icona;

    }

    public function getVisibile(){
        return $this->visibile;
    }

    public function getIcona(){
        return $this->icona;
    }

    //polimorfismo
    public function invio(){
        return 'notifica push inviata';
    }

    public function onClick(){
        return "apro applicazione collegata alla notifica";
    }

    }
?>