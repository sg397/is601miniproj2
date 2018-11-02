<?php

namespace Tests\Unit;

use function Sodium\increment;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\User;

class UserTest extends TestCase
{

    /*Insert  User Test*/
    public function testUserInsert1()
    {
        $user = new User;

        $user->id = 99;
        $user->name = 'Aavaa Bbbzb';
        $user->email = 'Aaaaa.Bvbbb@gmail.com';
        $user->password = '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm';

        $user->save();
        User::findOrFail($user->id);

    }

    /*Test to update name of a user*/
    public function testUserUpdate()
    {
         $user = User::findOrFail(99);
         $user->name ='Sunitha Giridipudi';
         $user->save();
    }

    /*test to update User Name to Steve Smith*/
    public function testUserUpdate()
    {
        $user = User::findOrFail(99);
        $user->name = 'Steve Smith';
        $user->save();

    }


}
