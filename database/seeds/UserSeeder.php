<?php

use Illuminate\Database\Seeder;
use App\User;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        
        User::truncate();

        $user = User::create(array(
            'name'=>'dadaye',
             'email'=>'dadaye@hotmail.fr',
             'password'=>bcrypt('clap'),
         ));

        for($i=0; $i<10;$i++){
            $user = User::create(array(
                
                'name'=>$faker->firstName(),
                 'email'=>$faker->email,
                 'password'=>$faker->password,
             ));
        }

    }
}
