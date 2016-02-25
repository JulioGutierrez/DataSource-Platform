<?php
    namespace Core\Interfaces;
    
    use Core\Interfaces\IEspecificData;
    use Core\Interfaces\ICondition;
    
    interface IDataSource {
        function selectData($dataname);
        function selectSpecificData($dataname, IEspecificData $especificData);
        function selectDataWithConditions($dataname, ICondition $conditions);
        function selectSpecificDataWithConditions($dataname, IEspecificData $especificData, ICondition $conditions);
    }
?>