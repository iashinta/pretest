<?php

use Illuminate\Database\Seeder;
use App\Admin;
class AdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $first_name='Urip';
        $last_name='Yogantara';
        $username='uripyogantara';

        Admin::truncate();
        for($i=0;$i<10;$i++){
            Admin::create([
                'first_name'=>$first_name,
                'last_name'=>$last_name,
                'username'=>$username.$i,
                'email'=>$username.$i.'@gmail.com'
            ]);
        }
    }
}
