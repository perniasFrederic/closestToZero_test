<?php

    /**
     * Find the value closest to zero in a temperature range array
     *
     * @param array $ts array of temperature range
     * @return float closest value to zero   
     */
    function closestToZero($ts) {
        if(count($ts) === 0){
            return 0;
        }
        
        $closest = array_shift($ts);
        foreach($ts as $val){
            $diff = abs($val) - abs($closest);
            if($diff < 0.00001 && $diff > -0.00001){
                if(($closest > 0 && $val < 0) || ($closest < 0 && $val > 0)){
                    $closest = abs($val);
                }
            }elseif(abs($closest) > abs($val)){
                $closest = $val;
            }
        }
        return $closest;
    }

?>