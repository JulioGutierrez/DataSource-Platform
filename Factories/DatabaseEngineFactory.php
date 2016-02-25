<?php
    namespace Core\Factories;
    
    use Core\Interfaces\IDataSourceFactory;
    use Core\Interfaces\IDatabaseEngineConfiguration;
    use Core\Factories\EngineSQLFactory;
    use Core\DataSources\EngineSQL;
    
    class DatabaseEngineFactory implements IDataSourceFactory {
        private $configuration;
        
        public function __construct(IDatabaseEngineConfiguration $configuration) {
            try{
                $this->configuration=$configuration;    
            } catch (Exception $ex) {
                throw new Exception($ex->getMessage());
            }            
        }        
        
        public function getDataSource() {
            try{
                switch($this->configuration->getDatabaseEngineType()){
                    case "sql":
                        return new EngineSQL(EngineSQLFactory::getEngine($this->configuration));
                    case "nosql":
                        return null;
                    default :
                        return null;
                }    
            } catch (Exception $ex) {
                throw new Exception($ex->getMessage());
            }
        }
    }
?>