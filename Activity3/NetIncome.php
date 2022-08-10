<?php

class Income {


    private $civil_status;
    private $position;
    private $employment;
    private $hour ;
    

    public function setValues($civil, $position, $employment, $hour){
        $this->civil_status = $civil;
        $this->position = $position;
        $this->employment = $employment;
        $this->hour = $hour;

    }

    public function calculateRegular(){

        if($this->hour <= 40){
            if($this->position == "staff"){
                if($this->employment == "contractual"){
                
                    return $regular = 37.5 * $this->hour;
               
                }elseif($this->employment == "probationary"){
                
                    return  $regular =43.75 * $this->hour;
                
                }elseif($this->employment == "regular"){
               
                    return $regular =50 * $this->hour;
                
                } 
            }else{
                if($this->employment == "contractual"){
                
                    return  $regular =43.75 * $this->hour;
                
                }elseif($this->employment == "probationary"){
                
                    return  $regular =50 * $this->hour;
                
                }elseif($this->employment == "regular"){
                
                    return  $regular =62.5 * $this->hour;
                
                } 
            }
            
        }elseif($this->hour > 40){
            if($this->position == "staff"){
                if($this->employment == "contractual"){
                
                    return $regular = 37.5 * 40;
               
                }elseif($this->employment == "probationary"){
                
                    return  $regular =43.75 * 40;
                
                }elseif($this->employment == "regular"){
               
                    return $regular =50 * 40;
                
                } 
            }else{
                if($this->employment == "contractual"){
                
                    return  $regular =43.75 * 40;
                
                }elseif($this->employment == "probationary"){
                
                    return  $regular =50 * 40;
                
                }elseif($this->employment == "regular"){
                
                    return  $regular =62.5 * 40;
                
                } 
            }
            
        }
    }

    public function calculateOvertime (){

        // $overtime = 0;

        if($this->hour - 40 >= 0){
            $overtime = $this->hour - 40;
        }

        if($overtime > 0){
            if($this->position == "staff"){
                if($this->employment == "contractual"){
                    return $overtime * 10;
                
                }elseif($this->employment == "probationary"){
                
                    return $overtime * 25;
                
                }elseif($this->employment == "regular"){
                
                    return $overtime * 30;
                
                } 
            }else{
                if($this->employment == "contractual"){
                
                    return $overtime * 15;

                
                }elseif($this->employment == "probationary"){
                
                    return $overtime * 30;
                
                }elseif($this->employment == "regular"){
                
                    return $overtime * 40;
                
                } 
            }
        }
    }

    public function calculateGross(){
        return $this->calculateRegular() + $this->calculateOvertime();
    }

    public function calculateHealthcare(){
        if($this->civil_status == "single"){
            return 200;
        }else{
            return 75;
        }
    } 

    public function calculateTax(){
        if($this->civil_status == "single"){
            if($this->calculateGross() > 1000){
                return $this->calculateGross() * 0.05;
            }else{
                return 0;
            }
        }else{
            if($this->calculateGross() <= 1500){
                return 0;
            }else{
                return $this->calculateGross() * 0.03;
            }
        }
    }

    public function calculateIncome(){
        return $this->calculateGross() - ( $this->calculateHealthcare() + $this->calculateTax() );
    }


            
}





?>