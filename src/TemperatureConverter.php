<?php

namespace App\MyDigitalSchool;

class TemperatureConverter {
    public function convert($temperature, $unite) {
        if($unite == "C") {
            $fahrenheit = ($temperature * 9 / 5) + 32;
            return $fahrenheit;
        }
        else if($unite == "F") {
            $celcius = ($temperature - 32) * 5 / 9;
            return $celcius;
        }
        else {
            throw new \Exception("Error Processing Request", 1);
        }
    }
}