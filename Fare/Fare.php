<?php

class Fare { 

    private $distance;
    private $age;

    public function setValues($new_distance, $new_age){
        $this->distance = $new_distance;
        $this->age = $new_age;
    }

    public function getFare(){
        $distance_d = 0;

        for($distance_d = 0; $distance_d <= $this->distance; $distance_d++){
            if($distance_d = 4 && $distance_d < 4){
                return 8;
            }elseif($distance_d > 4){
                return $distance_d - ;                
            }

        }

        
    }
}

?>