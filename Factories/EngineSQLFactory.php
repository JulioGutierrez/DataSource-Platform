<?php
    namespace Core\Factories;
    
    use Core\Interfaces\IDatabaseEngineConfiguration;
    use Core\Engines\EngineMYSQL;
    use Core\Engines\EnginePostgreSQL;
    
    class EngineSQLFactory {
        static function getEngine(IDatabaseEngineConfiguration $configuration) {
            try
            {
                switch ($configuration->getEngineType()) {
//                    case "sqlserver":
//                        return new EngineSQLServer($configuration);
                    case "mysql":
                        return new EngineMYSQL($configuration);
                    case "postgresql":
                        return new EnginePostgreSQL($configuration);
                    default:
                        return null;
                }
            } catch (Exception $ex) {
                throw new Exception($ex->getMessage());
            }  
        }
    }
?>