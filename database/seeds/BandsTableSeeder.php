<?php

use Illuminate\Database\Seeder;
use App\band;
class BandsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        band::truncate();
        for($i=0;$i<10;$i++){
            band::create([
                'name'=>'Kangen Band',
                'vocalist'=>'Andika',
                'genre'=>'pop',
                'since'=>2005
            ]);
        }
    }
}
