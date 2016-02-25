<?php
    namespace Core\Abstractions;
    
    use Core\Interfaces\IEspecificData;
    use Core\Interfaces\ICondition;
    
    class AbstractDataSourceSQL {
        protected function queryWithSelectParsed(IEspecificData $especificData = null) {
            try{
                $query="SELECT ";
                if($especificData == null) {
                    $query.="*";
                }else{
                    $json=json_decode($especificData->getEspecificDatas());
                    for($i=0;$i<count($json);$i++) {                        
                        $query.="\"".$json[$i]."\",";
                    }
                    $query=substr($query, 0, strlen($query)-1);
                }
                return $query;
            } catch (Exception $ex) {
                throw new Exception($ex->getMessage());
            }
        }
        
        protected function queryWithWhereParsed(ICondition $conditions = null) {
            try{
                $query=" WHERE ";
                if($conditions == null) {
                    $query+="";
                }else{
                    $json=json_decode($conditions->getConditions());
                    for($i=0;$i<count($json);$i++) {                        
                        $query.=$json[$i]." AND ";
                    }
                    $query=substr($query, 0, strlen($query)-4);
                }
                return $query;
            } catch (Exception $ex) {
                throw new Exception($ex->getMessage());
            }
        }
    }
?>