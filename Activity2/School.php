<?php

class School{

    // $price = [
    //     'key1'=>['1','550','3359'],
    //     'key2'=>['2','630','4000'],
    //     'key3'=>['3','470','2890'],
    //     'key4'=>['4','501','3555']
    // ];

    private $year_level;
    private $price_unit;
    private $with_lab;

    public function setValues($year_l, $price_u, $w_lab){
        $this->year_level = $year_l;
        $this->price_unit = $price_u;
        $this->with_lab = $w_lab;
    }

    public function calculatePay(){
        if($this->year_level == 1){
            if($this->with_lab == "yes"){
                return 550 * $this->price_unit + 3359;
            }else{
                return 550 * $this->price_unit;
            }

        }elseif($this->year_level == 2){
            if($this->with_lab == "yes"){
                return 630 * $this->price_unit + 4000;
            }else{
                return 630 * $this->price_unit;
            }

        }elseif($this->year_level == 3){
            if($this->with_lab == "yes"){
                return 470 * $this->price_unit + 2890;
            }else{
                return 470 * $this->price_unit;
            }

        }elseif($this->year_level == 4){
            if($this->with_lab == "yes"){
                return 501 * $this->price_unit + 3555;
            }else{
                return 501 * $this->price_unit;
            }

        }  
        
    }
    
}


?>
