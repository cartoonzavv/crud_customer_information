<?php
    define('DB_SERVER', 'localhost');
    define('DB_USER', 'root');
    define('DB_PASS', '');
    define('DB_NAME', 'crud_customer');

    class DB_con {


        function __construct() {
            $conn = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);
            $this->dbcon = $conn;

            if (mysqli_connect_errno()) {
                echo "Failed to connect to MySQL : " . mysqli_connect_error();
            }
        }

        public function insert($username, $password, $name, $surname, $email){
            $result = mysqli_query($this->dbcon, "INSERT INTO tbluser(username, password, name, 
            surname, email) VALUES('$username', '$password', '$name', '$surname', '$email')");
            return $result;
        }

        public function fetchdata(){
            $result = mysqli_query($this->dbcon, "SELECT * FROM tbluser");
            return $result;
        }

        public function fetchonerecord($userid){
            $result = mysqli_query($this->dbcon, "SELECT * FROM tbluser WHERE id = '$userid'");
            return $result;
        }

        public function update($username, $password, $name, $surname, $email, $userid){
            $result = mysqli_query($this->dbcon, "UPDATE tbluser SET 
                username = '$username',
                password = '$password',
                name = '$name',
                surname = '$surname',
                email = '$email' 
                WHERE id = '$userid'
            ");
            return $result;
        }

        public function delete($userid){
            $deleterecord = mysqli_query($this->dbcon,"DELETE FROM tbluser id = '$userid");
            return $deleterecord;
        }
    }
?>