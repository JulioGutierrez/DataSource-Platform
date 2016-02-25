<?php
    namespace Core\Interfaces;
    
    interface IServerData {
        public function getIp();        
        public function getPort();        
        public function setIp($value);        
        public function setPort($value);
    }
?>