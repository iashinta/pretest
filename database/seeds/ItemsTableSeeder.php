<?php

use Illuminate\Database\Seeder;
use App\item;
class ItemsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        item::truncate();
        for($i=0;$i<10;$i++){
            item::create([
                'name'=>'Ultra Milk',
                'price'=>5000,
                'stock'=>25
            ]);
        }
    }
}
