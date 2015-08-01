<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

<<<<<<< HEAD
        $this->call(UserTableSeeder::class);
        
        /*DB::table('users')->insert([
            'name' => str_random(10),
            'email' => str_random(10).'@gmail22.com',
            'password' => bcrypt('secret'),
        ]);*/ 
=======
        // $this->call(UserTableSeeder::class);
>>>>>>> d24cd28afdd229ae8f66a8a41e0f15aa4fa732f1

        Model::reguard();
    }
}
