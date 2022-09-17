<?php
    require_once("model/model.php");

    class User extends Model {

        private $sql;

        protected function __construct(){
            parent::__construct();
            $this-> sql = '';
        }

        //Добавляем игрока
        public function addUser(...) {
            $this->sql = "
                
            ";
            $this -> inDB($this->sql);
        }

        //Обновляем счёт игрока

        //Удаляем игрока

        //Редактирование игрока

    }
?>