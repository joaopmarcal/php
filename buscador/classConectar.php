<?php

    class Conectar{

        static function connect(){
            $link = mysqli_connect("127.0.0.1", "joao", "joao", "pessoa");
            if (!$link) {
                echo "Error: Unable to connect to MySQL." . PHP_EOL;
                echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
                echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
                exit;
            }
            return $link;

            //echo "Success: A proper connection to MySQL was made! The my_db database is great." . PHP_EOL;
            //echo "Host information: " . mysqli_get_host_info($link) . PHP_EOL;

            //mysqli_close($link);
        }

        static function selectAll(){
            $mysqli = self::connect();
            $data = $mysqli->query('select * from buscador');
            $data = $data->fetch_all(MYSQLI_ASSOC);
            return $data;
        }

        public function query($nome,$idade,$sexo){
            $mysqli = self::connect();

            if ($nome != "" and $idade != "" and $sexo != ""){
                $data = $mysqli->query("select * from buscador where nome =  '$nome'  and idade = $idade and sexo = '$sexo'");
            }
            if ($nome != "" and $idade != "" and $sexo == ""){
                $data = $mysqli->query("select * from buscador where nome =  '$nome'  and idade = $idade");
            }
            if ($nome != "" and $idade == "" and $sexo != ""){
                $data = $mysqli->query("select * from buscador where nome =  '$nome' and sexo = '$sexo'");
            }
            if ($nome != "" and $idade == "" and $sexo == ""){
                $data = $mysqli->query("select * from buscador where nome =  '$nome'");
            }
            if ($nome == "" and $idade != "" and $sexo != ""){
                $data = $mysqli->query("select * from buscador where idade = $idade and sexo = '$sexo'");
            }
            if ($nome == "" and $idade != "" and $sexo == ""){
                $data = $mysqli->query("select * from buscador where idade = $idade");
            }
            if ($nome == "" and $idade == "" and $sexo != ""){
                $data = $mysqli->query("select * from buscador where sexo = '$sexo'");
            }
            //var_dump($data);
            $data = $data->fetch_all(MYSQLI_ASSOC);
            return $data;

        }



    }