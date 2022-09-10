<?php

    require_once("model/model.php");

    class Roulette extends Model {

        private $sql;

        protected function __construct(){
            parent::__construct();
            $this-> sql = '';
        }

        //Добавляем статистику в дб

        //Брать данные с дб

        //Обнулить
        public function reset() {
            if (array_key_exists('reset', $_POST)){
                $this->sql = "
                    UPDATE `Roulette` SET stat = 0
                ";
            }
            $this -> inDB($this->sql);
        }
    }
?>