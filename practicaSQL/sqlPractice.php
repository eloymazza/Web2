<?php

    class DB {

        protected $PDO;
        
        function __construct(){
            $this->$PDO = new PDO('mysql:host=localhost;dbname=sqlpractice;charset=utf8'
            ,'root', '');
        }

    }

    class InnerJoin extends DB {

        function __construct(){
            parent::__construct();
        }

        function InnerJoinPractice(){

       


        }


    }


?>