<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Car;

class CarTest extends TestCase
{

    /*Test Car insert*/
    public function testCarInsert()
    {
        $makes = Array ('Ford','Honda','Toyota');
        $index = rand(0,2);

        $car = new Car;
        $car->id = 99;
        $car->make = $makes[$index];
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

    /* delete car test */
    public function testCarDelete()
    {
        $car = Car::findOrFail(99);
        $car->delete();
    }

    /*test Car seed count==50*/
    public function testCarSeedCount()
    {
        $cars = Car::all();
        $this->assertTrue($cars->count()===50);
    }

    /*year data type test*/
    public function testCarYearDataType()
    {
        $car = Car::inRandomOrder()->first();
        try{
            $this->assertInternalType('int', (int)$car->year);
        }catch(Exception $e) {
            //if any number format exception
            $this->assertTrue(false);
        }

    }

    /*test make is one of the 3 values  ford / honda / toyota*/
    /*year data type test*/
    public function testCarMake()
    {
        $makes = Array ('Ford','Honda','Toyota');

        $car = Car::inRandomOrder()->first();
        $flag = false;
        foreach ($makes as $make){
            if($make == $car->make){
                $flag = true;
                break;
            }
        }
        if(!$flag){
            $this->assertTrue(false);
        }
    }
}
