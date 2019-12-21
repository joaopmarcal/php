<?php

    class Search extends Conectar{

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
            setlocale( LC_ALL, 'pt_BR', 'pt_BR.iso-8859-1', 'pt_BR.utf-8', 'portuguese' );
            date_default_timezone_set( 'America/Sao_Paulo' );
            $data_create = strftime( '%Y-%m-%d %H:%M:%S');
            $data_update = strftime( '%Y-%m-%d %H:%M:%S');
            //var_dump($data_create);
            $stmt = $mysqli->prepare("INSERT INTO buscador(nome, idade, sexo,data_create,data_update) VALUES (?,?,?,?,?)");
            $stmt->bind_param("sisss",$nome,$idade,$sexo,$data_create,$data_update);
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
            setlocale( LC_ALL, 'pt_BR', 'pt_BR.iso-8859-1', 'pt_BR.utf-8', 'portuguese' );
            date_default_timezone_set( 'America/Sao_Paulo' );
            $data_update = strftime( '%Y-%m-%d %H:%M:%S');
            $query = "update buscador set nome = ?, idade = ?, sexo = ?, data_update = ?  where id = $id";
            $stmt = $mysqli->prepare($query);
            $stmt->bind_param("siss",$nome,$idade,$sexo,$data_update);
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