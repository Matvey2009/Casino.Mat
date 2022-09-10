<?php
abstract class Model {
    
    private $path;
    private $connect;

    protected function __construct(){
        $this -> path = 'model/data/casino.sqlite';
    }

    // Внести из базы даных
    protected function inDB($sql){ 
        try {
            $this -> connect = new PDO("sqlite:$this");
            $this -> connect -> exec($sql);
            $this -> connect = null;
        } catch(PDOException $e){
            echo "Date base error". $e -> getMessage();
        }
    }

    // Извечть из базы даных
    protected function outDB($sql){
        try {
            $this -> connect = new PDO("sqlite:$this");
            $request = $this -> connect -> query($sql);
            $this -> connect = null;
            return $request;
        } catch(PDOException $e){
            echo "Date base error". $e -> getMessage();
            return null;
        }
    }
}