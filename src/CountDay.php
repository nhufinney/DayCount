<?php

    Class CountDay {

        function dayCalculation ($day, $month) {
            $month_day = array(0, 32, 60, 91, 121, 152, 182, 213, 244, 274, 305, 335);

            $month_order_in_array = $month - 1;
            $month_accumulation = $month_day[$month_order_in_array];
            $day_accumulation = $month_accumulation + $day;
            //$month_accumulation = $result;
            return $day_accumulation;


        }
    }










?>
