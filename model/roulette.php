<?php

    require_once("model/model.php");

    class Roulette extends Model {

        private $sql;

        protected function __construct(){
            parent::__construct();
            $this-> sql = '';
        }

        //Добавляем статистику в дб
        public function setStat($sector) {
            $this->sql = "
                UPDATE `Roulette` SET stat=stat+1 WHERE sector = $sector
            ";
            $this -> inDB($this->sql);
        }

        //Брать данные с дб
        public function gerStat() {
            $this->sql = "
                SELECT `sector`, `stat` FROM `Roulette` ORDER BY `sector`
            ";
            $request = $this -> outDB($this->sql);
            $stat = [];
            foreach($request as $row)
                $stat[$row['sector']] = $row['stat'];
            return $stat;
        }

        //Обнулить
        public function resetStat() {
            $this->sql = "
                UPDATE `Roulette` SET stat = 0
            ";
            $this -> inDB($this->sql);
        }
    }
?>