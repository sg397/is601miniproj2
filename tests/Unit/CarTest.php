<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Car;

class CarTest extends TestCase
{
    /* delete car test */
    public function testCarDelete()
    {
        $car = Car::findOrFail(99);
        $car->delete();
    }


    /*Test Car insert*/
    public function testCarInsert()
    {
        $models = Array ('Ford','Honda','Toyota');
        $index = rand(0,2);

        $car = new Car;
        $car->id = 99;
        $car->make = $models[$index];
        $car->model = 'Van';
        $car->year = 1995;

        $car->save();
        $this->assertNotEmpty(Car::findOrFail($car->id));
    }

    /*update car year=2000 */
    public function testUpdateYear()
    {
        $car = Car::findOrFail(99);
        $car->year = 2000;
        $car->save();
    }


}
