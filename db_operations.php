<?php
    class DBOperations {
        private $host = 'localhost';
        private $username   = 'root';
        private $password   = '';
        private $dbname     = 'portfolio_db';
        private $options    = array(
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        );

        private $dsn, $connection;

        function __construct(){
            // database connection configuration
            $this->dsn = "mysql:host={$this->host};dbname={$this->dbname}";
            try {
                $this -> connection = new PDO($this -> dsn, $this -> username, $this -> password, $this -> options);
                // echo "<div style='color:red;'>Connection successfull</div>";
                // die();
            } catch (PDOException $error) {
                echo $error -> getMessage();
                die();
            }
        }

        // database operations methods
        public function query($sql, $params = []) {
            try {
                $stmt = $this -> connection -> prepare($sql);
                $stmt -> execute($params);
                return $stmt;
            } catch(PDOException $error) {
                echo $error -> getMessage();
                return false;
            }
        }

        public function fetch($statement) {
            return $statement -> fetch(PDO::FETCH_ASSOC);
        }

        public function fetchAll($statement) {
            return $statement -> fetchAll(PDO::FETCH_ASSOC);
        }

        public function getOneActuality($id) {
            return $this->fetch($this->query("SELECT * FROM actualites where id = $id"));
        }

        public function getAllActualities() {
            return $this->fetchAll($this->query("SELECT * FROM actualites"));
        }
    } 

