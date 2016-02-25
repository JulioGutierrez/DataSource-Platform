<?php
    namespace Core\Datas;
    
    use Core\Interfaces\IServerData;
    
    class ServerData implements IServerData {
        private $ip;
        private $port;
        
        public function __construct($ip, $port) {
            try{
                $this->ip=$ip;
                $this->port=$port;
            } catch (Exception $ex) {
                throw new Exception($ex->getMessage());
            }            
        }
        
        public function getIp() {
            return $this->ip;
        }
        
        public function getPort() {
            return $this->port;
        }
        
        public function setIp($value) {
            $this->ip=$value;
        }
        
        public function setPort($value) {
            $this->port=$value;
        }
    }
?>