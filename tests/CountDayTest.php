<?php

    require_once "src/CountDay.php";

    class CountDayTest extends PHPUnit_Framework_TestCase
    {

        function test_count_day()
        {
            //Arrange
            $input = new CountDay;
            $day = 1;
            $month = 1;
            $year = 2000;

            //Act
            $result = $input->dayCalculation($day, $month);

            //Assert

            $this->assertEquals(1, $result);
        }

        function test_count_day2()
        {
            //Arrange
            $input = new CountDay;
            $day = 10;
            $month = 4;
            $year = 2000;

            //Act
            $result = $input->dayCalculation($day, $month);

            //Assert

            $this->assertEquals(101, $result);
        }

    }

?>
