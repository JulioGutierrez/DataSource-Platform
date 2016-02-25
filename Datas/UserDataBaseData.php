<?php
    namespace Core\Datas;
       
    use Core\Interfaces\IUserDataBaseData;
    
    class UserDataBaseData implements IUserDataBaseData {
        private $name;
        private $password;
        
        public function __construct($name, $password) {
            try{
                $this->name=$name;
                $this->password=$password;
            } catch (Exception $ex) {
                throw new Exception($ex->getMessage());
            }            
        }
        
        public function getName() {
            return $this->name;
        }
        
        public function getPassword() {
            return $this->password;
        }
        
        public function setName($value) {
            $this->name=$value;
        }
        
        public function setPassword($value) {
            $this->password=$value;
        }
    }
?>