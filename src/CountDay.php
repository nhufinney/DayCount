<?php

    Class CountDay {

        function dayCalculation ($day, $month, $year) {
            $month_day = array(0, 32, 60, 91, 121, 152, 182, 213, 244, 274, 305, 335);

            $month_order_in_array = $month - 1;
            $month_accumulation = $month_day[$month_order_in_array];
            $day_accumulation = $month_accumulation + $day;

            $temp_year = $year - 2000;
            $leap_day = floor($temp_year/ 4);
            $days_up_to_the_input_year= ($temp_year *365)+$leap_day;

            $total_days = $days_up_to_the_input_year + $day_accumulation;
            $weekday =  $total_days % 7;


            if ($weekday == 1) {
                return "Saturday";
            } elseif ($weekday == 2) {
                return "Sunday";
            } elseif($weekday == 3) {
                return "Monday";
            } elseif($weekday == 4) {
                return "Tuesday";
            } elseif ($weekday == 5) {
                return "Wednesday";
            } elseif ($weekday == 6) {
                return "Thursday";
            } elseif ($weekday == 0) {
                return "Friday";
            }
        }

    }

?>
