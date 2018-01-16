<?php

use Illuminate\Database\Seeder;

use App\Wallet;

class walletsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        
        Wallet::truncate();

        for($i=0; $i<10;$i++){
            $wallers = Wallet::create(array(
                
                'adresse'=>sha1(rand()),
                'user_id'=>$faker->numberBetween(1,10),
                 'devise'=>$faker->realText($maxNbChars = 100, $indexSize = 2),
                 'solde'=>$faker->randomNumber($nbDigits = NULL, $strict = false),
             ));
      }
    }

}
