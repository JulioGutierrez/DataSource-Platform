<?php
    namespace Core\Configurations\Conditions;
    
    use Core\Interfaces\ICondition;
    
    class ConditionSQL implements ICondition {
        private $list;
        
        public function __construct() {
            try{
                $this->list=array();
            } catch (Exception $ex) {
                throw new Exception($ex->getMessage());
            }
        }
        
        public function addConditionEqual($key, $value) {
            try{
                array_push($this->list, "\"".$key."\"='".$value."'");
            } catch (Exception $ex) {
                throw new Exception($ex->getMessage());
            }
        }
        
        public function addConditionNotEqual($key, $value) {
            try{
                array_push($this->list, "\"".$key."\"<>'".$value."'");
            } catch (Exception $ex) {
                throw new Exception($ex->getMessage());
            }
        }
        
        public function getConditions() {
            try{
                return json_encode($this->list);
            } catch (Exception $ex) {
                throw new Exception($ex->getMessage());
            }
        }
    }
?>