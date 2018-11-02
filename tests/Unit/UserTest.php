<?php

namespace Tests\Unit;

use function Sodium\increment;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\User;
use DB;

class UserTest extends TestCase
{

    /*Insert  User Test*/
    public function testUserInsert()
    {
        $user = new User;
        $newId= DB::table('users')->max('id')+1;
        $user->id = $newId;
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
        $newId= DB::table('users')->max('id');
        $user = User::findOrFail($newId);
        $user->name = 'Steve Smith';
        $user->save();

    }

    /*test user delete*/
    public function testUserDelete()
    {
        $newId= DB::table('users')->max('id');
        $user = User::findOrFail($newId);
        $user->delete();

    }

    /*test to count the rows in users table*/
    public function testUserSeedCount()
    {
        $users = User::all();
        $userCount = $users->count();

        //$this->assertTrue($users->count()===50);
    }

}
