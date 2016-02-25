<?php
    namespace Core\DataSources;
    
    use Core\Abstractions\AbstractDataSourceSQL;
    use Core\Interfaces\IDataSource;
    use Core\Interfaces\IEngineSQL;
    use Core\Interfaces\ICondition;
    use Core\Interfaces\IEspecificData;
    
    class EngineSQL extends AbstractDataSourceSQL implements IDataSource {
        private $engine;
        
        public function __construct(IEngineSQL $engine) {
            try{
                $this->engine=$engine;
            } catch (Exception $ex) {
                throw new Exception($ex->getMessage());
            }
        }
        
        public function selectData($dataname) {
            try{
                return $this->engine->select($this->queryWithSelectParsed()." FROM ".$dataname);
            } catch (Exception $ex) {
                throw new Exception($ex->getMessage());
            }
        }
        
        public function selectSpecificData($dataname, IEspecificData $especificData) {
            try{
                return $this->engine->select($this->queryWithSelectParsed($especificData)." FROM ".$dataname);
            } catch (Exception $ex) {
                throw new Exception($ex->getMessage());
            }
        }
        
        public function selectDataWithConditions($dataname, ICondition $conditions) {
            try{
                return $this->engine->select($this->queryWithSelectParsed()." FROM ".$dataname.$this->queryWithWhereParsed($conditions));
            } catch (Exception $ex) {
                throw new Exception($ex->getMessage());
            }
        }       
        
        public function selectSpecificDataWithConditions($dataname, IEspecificData $especificData, ICondition $conditions) {
            try{
                return $this->engine->select($this->queryWithSelectParsed($especificData)." FROM ".$dataname.$this->queryWithWhereParsed($conditions));
            } catch (Exception $ex) {
                throw new Exception($ex->getMessage());
            }
        }
    }
?>