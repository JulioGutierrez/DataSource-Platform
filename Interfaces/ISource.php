<?php
    namespace Core\Interfaces;
    
    interface ISource {
        public function getDataSource(IDataSourceFactory $factory);
    }
?>