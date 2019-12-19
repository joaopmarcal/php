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

        static function selectOne($id){
            $mysqli = self::connect();
            $query = "select * from buscador where id = $id";
            $result = mysqli_query($mysqli,$query);
            $row = mysqli_fetch_assoc($result);
            return $row;
        }

        public function querySearch($nome,$idade,$sexo){
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
            if ($nome == "" and $idade == "" and $sexo == ""){
                return;
            }
            //var_dump($data);
            $data = $data->fetch_all(MYSQLI_ASSOC);
            return $data;

        }

        public function add($nome,$idade,$sexo){
            $mysqli = self::connect();
            $stmt = $mysqli->prepare("INSERT INTO buscador(nome, idade, sexo) VALUES (?,?,?)");
            $stmt->bind_param("sis",$nome,$idade,$sexo);
            $stmt->execute();
            /*
            $conn = new mysqli("localhost","root","","dbphp7");

            if ($conn->connect_error) {
                echo "Error: " . $conn->connect_error;
            }
            $stmt = $conn->prepare("INSERT INTO tb_usuarios (deslogin,dessenha) VALUES (?,?)");

            $stmt->bind_param("ss", $login, $pass);
            $login = "joao";
            $pass = "98745";
            $stmt->execute();
            $login = "paulo";
            $pass = "78546";
            $stmt->execute();
            $login = "Dario";
            $pass = "25694";
            $stmt->execute();
            */

        }

        static function update($nome,$idade,$sexo,$id){
            $mysqli = self::connect();
            $query = "update buscador set nome = ?, idade = ?, sexo = ? where id = $id";
            $stmt = $mysqli->prepare($query);
            $stmt->bind_param("sis",$nome,$idade,$sexo);
            $stmt->execute();
            header('Location: index.php');
            /*var_dump($query);
            echo $_POST['nome'];
            echo $_POST['idade'];
            echo $_POST['sexo'];
            */
        }

        static function delete($id){
            $mysqli = self::connect();
            $query = "delete from buscador where id = ?";
            $stmt = $mysqli->prepare($query);
            $stmt->bind_param("i",$id);
            $stmt->execute();
            header('Location: index.php');
            /*var_dump($query);
            echo $_POST['nome'];
            echo $_POST['idade'];
            echo $_POST['sexo'];
            */
        }

    }