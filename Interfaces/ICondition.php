<?php
    namespace Core\Interfaces;
    
    interface ICondition {
        function addConditionEqual($key, $value);
        function addConditionNotEqual($key, $value);
        function getConditions();
    }
?>