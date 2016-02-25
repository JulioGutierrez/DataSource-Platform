<?php
    namespace Core\Sources;
    
    use Core\Interfaces\ISource;
    use Core\Interfaces\IDataSourceFactory;
    
    abstract class DataSource implements ISource {        
        public function getDataSource(IDataSourceFactory $factory) {
            try{
                return $factory->getDataSource();
            } catch (Exception $ex) {
                throw new Exception($ex->getMessage());
            }
        }
        
        protected abstract function getFactory();
    }
?>