<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; 
use Illuminate\Support\Facades\Hash;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $hash=Hash::make('admin123');
        $author=Hash::make('author123');
        $designer=Hash::make('designer123');
        DB::table('users')->insert([
            ['name' => "admin",'email'=>'admin@gmail.com','role'=>'admin','password'=>''.$hash.''],
            ['name' => "author",'email'=>'author@gmail.com','role'=>'author','password'=>''.$author.''],
            ['name' => "designer",'email'=>'designer@gmail.com','role'=>'designer','password'=>''.$designer.''],
            ]);
    }
}
