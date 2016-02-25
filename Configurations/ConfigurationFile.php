<?php
    namespace Core\Configurations;
        
    class ConfigurationFile {
        public static function getPath($type) {
            try{
                switch($type){
                    case "database":
                        return "Core/Configurations/ConfigurationFiles/DatabaseConfiguration.json";
                    default :
                        return "";
                }
            } catch (Exception $ex) {
                throw new Exception($ex->getMessage());
            }            
        }
    }
?>