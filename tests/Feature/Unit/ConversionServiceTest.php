<?php

namespace Tests\Unit;

use App\Services\ConversionService;
use PHPUnit\Framework\TestCase;

class ConversionServiceTest extends TestCase
{
    /** @test */
    public function test_celsius_to_fahrenheit_conversion()
    {
        $service = new ConversionService;

        // 0°C debe ser 32°F
        $this->assertEquals(32.0, $service->celsiusToFahrenheit(0));

        // 100°C debe ser 212°F
        $this->assertEquals(212.0, $service->celsiusToFahrenheit(100));

        // Un valor negativo
        $this->assertEquals(-40.0, $service->celsiusToFahrenheit(-40));
    }
}
