<?php

namespace App\Services;

class ConversionService
{
    /**
     * Convierte grados Celsius a grados Fahrenheit.
     * Formula: (C * 9/5) + 32
     */
    public function celsiusToFahrenheit(float $celsius): float
    {
        return ($celsius * 1.8) + 32;
    }
}
