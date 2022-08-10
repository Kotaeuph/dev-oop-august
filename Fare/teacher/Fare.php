<?php
    class Fare{
        private $base = 8;
        private $kilometers;
        private $age;

        public function setValues($kilometers, $age){
            $this->kilometers = $kilometers;
            $this->age = $age;
        }

        public function calculateFare(){
            if($this->age >= 60){
                if($this->kilometers <= 4){
                    return $this->base - ($this->base * 0.20);
                }elseif($this->kilometers > 4){
                    // $this->kilometers = $this->kilometers - 4;
                    $this->kilometers -= 4;
                    $fare = $this->base + $this->kilometers;
                    return $fare - ($fare * 0.20);
                }
            }else{
                if($this->kilometers <= 4){
                    return $this->base;
                }elseif($this->kilometers > 4){
                    $this->kilometers -= 4;
                    return $this->base + $this->kilometers;
                }
            }
        }
    }
?>