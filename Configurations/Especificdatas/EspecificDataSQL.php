<?php
    namespace Core\Configurations\Especificdatas;
    
    use Core\Interfaces\IEspecificData;
    
    class EspecificDataSQL implements IEspecificData {
        private $list;
        
        public function __construct() {
            try{
                $this->list=array();
            } catch (Exception $ex) {
                throw new Exception($ex->getMessage());
            }            
        }
        
        public function addEspecificData($data) {
            try{
                array_push($this->list, $data);
            } catch (Exception $ex) {
                throw new Exception($ex->getMessage());
            }
        }
        
        public function getEspecificDatas() {
            try{
                return json_encode($this->list);
            } catch (Exception $ex) {
                throw new Exception($ex->getMessage());
            }
        }
    }
?>