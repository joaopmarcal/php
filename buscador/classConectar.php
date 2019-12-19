<?php

    class Conectar{

        private $servername;
        private $database;
        private $username;
        private $password;

        public function __construct($servername,$database,$username,$password)
        {
            $conn = mysqli_connect($servername, $username, $password, $database);
            // Check connection
            if (!$conn) {
                die("Connection failed: " . mysqli_connect_error());
            }
            //echo "Connected successfully";

        }

    }