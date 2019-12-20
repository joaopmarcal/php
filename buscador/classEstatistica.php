<?php

    require_once __DIR__ . "/classConectar.php";


    class Estatistica extends Conectar {
        public function sexCount(){
            $mysqli = self::connect();
            $query = "select count(sexo) from buscador";
            $result = mysqli_query($mysqli,$query);
            $row = mysqli_fetch_assoc($result);
            return $row["count(sexo)"];
        }
        public function numberMan(){
            $mysqli = self::connect();
            $query = "select count(sexo) from buscador where sexo = 'masculino'";
            $result = mysqli_query($mysqli,$query);
            $row = mysqli_fetch_assoc($result);
            return $row["count(sexo)"];

        }

        public function numberWoman(){
            $mysqli = self::connect();
            $query = "select count(sexo) from buscador where sexo = 'feminino'";
            $result = mysqli_query($mysqli,$query);
            $row = mysqli_fetch_assoc($result);
            return $row["count(sexo)"];
        }

        public function percentageMan(){
            $tot = $this->sexCount();
            $man = $this->numberMan();
            return $result = ($man / $tot) * 100;

        }

        public function percentageWoman(){
            $tot = $this->sexCount();
            $woman = $this->numberWoman();
            return $result = ($woman / $tot) * 100;
        }

        public function ageCount(){
            $mysqli = self::connect();
            $query = "select count(idade) from buscador";
            $result = mysqli_query($mysqli,$query);
            $row = mysqli_fetch_assoc($result);
            return $row["count(idade)"];
        }
        public function ageCountMinus(){
            $count = 0;
            $mysqli = self::connect();
            $data = $mysqli->query('select idade from buscador');
            $data = $data->fetch_all(MYSQLI_ASSOC);
            foreach ($data as $datas){
                if($datas['idade'] < 40){
                    $count++;
                }
            }
            return $count;
        }

        public function ageCountPlus(){
            $count = 0;
            $mysqli = self::connect();
            $data = $mysqli->query('select idade from buscador');
            $data = $data->fetch_all(MYSQLI_ASSOC);
            foreach ($data as $datas){
                if($datas['idade'] >= 40){
                    $count++;
                }
            }
            return $count;
        }

        public function percentageAgeCountPlus(){
            $tot = $this->ageCount();
            $plus = $this->ageCountPlus();
            return $result = ($plus / $tot) * 100;
        }

        public function percentageAgeCountMinus(){
            $tot = $this->ageCount();
            $minus = $this->ageCountMinus();
            return $result = ($minus / $tot) * 100;
        }
    }
?>