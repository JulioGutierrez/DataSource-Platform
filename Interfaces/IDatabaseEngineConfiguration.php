<?php
    namespace Core\Interfaces;
    
    interface IDatabaseEngineConfiguration {
        function getServerData();
        function setServerData($value);        
        function getDataBaseData();
        function setDataBaseData($value);        
        function getUserDataBaseData();
        function setUserDataBaseData($value);        
        function getDatabaseEngineType();
        function getEngineType();
    }
?>