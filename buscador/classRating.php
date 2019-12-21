<?php

    require __DIR__ . "/classConectar.php";

    class Rating extends Conectar{
        public function ratingGenerate($cont){
            $mysqli = self::connect();
            for ($i = 1; $i <= $cont;$i){
                $n = rand(1,5);
                $stmt = $mysqli->prepare("INSERT INTO rating(rating) VALUES (?)");
                $stmt->bind_param("i",$n);
                $stmt->execute();
                $i++;
            }
        }

        public function ratingGenerateFive(){
            $mysqli = self::connect();
            for ($i = 1; $i <= 50;$i){
                $n = 5;
                $stmt = $mysqli->prepare("INSERT INTO rating(rating) VALUES (?)");
                $stmt->bind_param("i",$n);
                $stmt->execute();
                $i++;
            }
        }

        public function truncateTable(){
            $mysqli = self::connect();
            $stmt = $mysqli->real_query('TRUNCATE rating');
            //echo $stmt;
            if ($stmt == 1){
                echo "Banco apagado com sucesso!";
            }else{
                echo "erro";
            }
        }

        public function ratingAverage(){
            $mysqli = self::connect();
            $query = "select avg(rating) from rating";
            $result = mysqli_query($mysqli,$query);
            $row = mysqli_fetch_assoc($result);
            $row = implode($row);
            //$row = number_format($row,2);
            return $row;
        }

        public function ratingCount(){
            $mysqli = self::connect();
            $query = "select count(rating) from rating";
            $result = mysqli_query($mysqli,$query);
            $row = mysqli_fetch_assoc($result);
            $row = implode($row);
            //$row = number_format($row,2);
            return $row;
        }

        public function select($id){
            $mysqli = self::connect();
            $query = "select count(rating) from rating where rating = $id";
            $result = mysqli_query($mysqli,$query);
            $row = mysqli_fetch_assoc($result);
            $row = implode($row);
            //$row = number_format($row,2);
            return $row;
        }
        public function ratingPercentage($id){
            $tot = $this->ratingCount();
            $num = $this->select($id);
            $result = ($num / $tot) * 100;
            return $result;
        }
    }

?>