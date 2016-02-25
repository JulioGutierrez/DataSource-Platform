<?php
    namespace Core\Interfaces;
    
    interface IUserDataBaseData {
        function getName();
        function getPassword();
        function setName($value);
        function setPassword($value);
    }
?>