<?php
    namespace Core\Abstractions;
    
    use PDO;
    
    class AbstractEngineSQL {
        private $connection;
        
        protected function __construct($connection) {
            $this->connection=$connection; 
        }
        
        protected function createCommand($query) {
            try{
                return $this->connection->query($query)->fetchAll(PDO::FETCH_ASSOC);
            } catch (Exception $ex) {
                throw new Exception($ex->getMessage());
            }            
        }
        
        protected function closeConnection() {
            try{
                $this->connection->close();
            } catch (Exception $ex) {
                throw new Exception($ex->getMessage());
            }
        }
    }   
?>