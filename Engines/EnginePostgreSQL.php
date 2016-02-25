<?php
    namespace Core\Engines;
    
    use PDO;
    use Core\Abstractions\AbstractEngineSQL;
    use Core\Interfaces\IEngineSQL;
    use Core\Interfaces\IDatabaseEngineConfiguration;
    
    class EnginePostgreSQL extends AbstractEngineSQL implements IEngineSQL {
        private $configuration;
        
        public function __construct(IDatabaseEngineConfiguration $configuration) {
            try{
                $this->configuration=$configuration;
                parent::__construct($this->getConnection());
            } catch (Exception $ex) {
                throw new Exception($ex->getMessage());
            } 
        }
        
        public function select($query) {
            try{
                return json_encode($this->createCommand($query));
            } catch (Exception $ex) {
                throw new Exception($ex->getMessage());
            }
        }
        
        private function getConnection()
        {
            try { 
                $dsn="pgsql:host=".$this->configuration->getServerData()->getIp().";".
                     "port=".$this->configuration->getServerData()->getPort().";".
                     "dbname=".$this->configuration->getDataBaseData()->getName();
                $usr=$this->configuration->getUserDataBaseData()->getName();
                $pwd=$this->configuration->getUserDataBaseData()->getPassword();
                return new PDO($dsn, $usr, $pwd);
            } catch (Exception $ex) {
                throw new Exception($ex->getMessage());
            }
        }
    }
?>