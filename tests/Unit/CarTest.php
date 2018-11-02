<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Car;
use DB;
class CarTest extends TestCase
{

    /*Test Car insert*/
    public function testCarInsert()
    {
        $makes = Array ('Ford','Honda','Toyota');
        $index = rand(0,2);

        $newId= DB::table('cars')->max('id')+1;
        $car = new Car;
        $car->id = $newId;
        $car->make = $makes[$index];
        $car->model = 'Van';
        $car->year = 1995;

        $car->save();
        $this->assertNotEmpty(Car::findOrFail($car->id));
    }

    /*update car year=2000 */
    public function testUpdateYear()
    {
        $newId= DB::table('cars')->max('id');

        $car = Car::findOrFail($newId);
        $car->year = 2000;
        $car->save();
    }

    /* delete car test */
    public function testCarDelete()
    {
        $newId= DB::table('cars')->max('id');
        $car = Car::findOrFail($newId);
        $car->delete();
    }

    /*test Car seed count==50 */
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
    /*Car model data type test*/
    public function testCarModelIsString()
    {
        $car = Car::inRandomOrder()->first();
        $this->assertInternalType('string', $car->model);

    }
}
