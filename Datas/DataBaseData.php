<?php
    namespace Core\Datas;
    
    use Core\Interfaces\IDataBaseData;
    
    class DataBaseData implements IDataBaseData {
        private $name;
        private $procedure;
        
        public function __construct($name, $procedure = false) {
            try{
                $this->name=$name;
                $this->procedure=$procedure;
            } catch (Exception $ex) {
                throw new Exception($ex->getMessage());
            }            
        }
        
        public function getName() {
            return $this->name;
        }
        
        public function getProcedure() {
            return $this->procedure;
        }
        
        public function setName($value) {
            $this->name=$value;
        }
        
        public function setProcedure($value) {
            $this->procedure=$value;
        }
    }
?>