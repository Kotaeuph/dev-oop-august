<?php
    class School{
        private $name;
        private $year_level;
        private $units;
        private $lab_option;
        private $unit_prices = ["1" => 550, "2" => 630,"3" => 470,"4" => 501];
        private $lab_prices = ["1" => 3359, "2" => 4000, "3" => 2890, "4" => 3555];

        public function setValues($name, $year_level, $units, $lab_option){
            $this->name = $name;
            $this->year_level = $year_level;
            $this->units = $units;
            $this->lab_option = $lab_option;
        }

        public function calculateValues(){
            if($this->lab_option == "with_lab"){
                return $this->units * $this->unit_prices[$this->year_level] + $this->lab_prices[$this->year_level];
            }else{
                return $this->units * $this->unit_prices[$this->year_level];
            }
        }
    }
?>