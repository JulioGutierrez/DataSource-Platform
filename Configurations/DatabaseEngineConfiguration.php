<?php
    namespace Core\Configurations;
    
    use Core\Interfaces\IDatabaseEngineConfiguration;
    use Core\Datas\ServerData;
    use Core\Datas\DataBaseData;
    use Core\Datas\UserDataBaseData;
    
    class DatabaseEngineConfiguration implements IDatabaseEngineConfiguration {
        private $reader;
        private $server;
        private $database;
        private $userdatabase;

        public function __construct($configurationPath) {
            try{
                $this->reader=json_decode(file_get_contents($configurationPath), true);
                $this->server=new ServerData($this->reader["ServerData"]["ip"], $this->reader["ServerData"]["port"]);
                $this->database=new DataBaseData($this->reader["DataBaseData"]["name"], boolval($this->reader["DataBaseData"]["procedures"]));
                $this->userdatabase=new UserDataBaseData($this->reader["UserDataBaseData"]["name"], $this->reader["UserDataBaseData"]["password"]);
            } catch (Exception $ex) {
                throw new Exception($ex->getMessage());
            }
        }
        
        public function getDataBaseData() {
            return $this->database;
        }
        
        public function getServerData() {
            return $this->server;
        }
        
        public function getUserDataBaseData() {
            return $this->userdatabase;
        }
        
        public function setDataBaseData($value) {
            $this->database=$value;
        }
        
        public function setServerData($value) {
            $this->server=$value;
        }
        
        public function setUserDataBaseData($value) {
            $this->userdatabase=$value;
        }
        
        public function getDatabaseEngineType() {
            return $this->reader["DatabaseEngineType"];
        }
        
        public function getEngineType() {
            return $this->reader["EngineType"];            
        }
    }
?>