<?php
    class School{
        private $name;
        private $year_level;
        private $units;
        private $lab_option;
        
        public function setValues($name, $year_level, $units, $lab_option){
            $this->name = $name;
            $this->year_level = $year_level;
            $this->units = $units;
            $this->lab_option = $lab_option;
        }

        public function calculateValues(){
            if($this->lab_option == "with_lab"){
                if($this->year_level == "1"){
                    return $this->units * 550 + 3359;
                }elseif($this->year_level == "2"){
                    return $this->units * 630 + 4000;
                }elseif($this->year_level == "3"){
                    return $this->units * 470 + 2890;
                }elseif($this->year_level == "4"){
                    return $this->units * 501 + 3555;
                }
            }elseif($this->lab_option == "no_lab"){
                if($this->year_level == "1"){
                    return $this->units * 550;
                }elseif($this->year_level == "2"){
                    return $this->units * 630;
                }elseif($this->year_level == "3"){
                    return $this->units * 470;
                }elseif($this->year_level == "4"){
                    return $this->units * 501;
                }
            }
        }
    }
?>