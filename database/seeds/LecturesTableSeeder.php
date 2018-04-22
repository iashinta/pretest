<?php

use Illuminate\Database\Seeder;
use App\Lecture;
class LecturesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Lecture::truncate();
        $nip=1504505053;
        for($i=0;$i<10;$i++){
            $this->create($nip++,'Urip Yogantara',17,'1997-06-25');
        }
    }

    public function create($nip,$name,$age,$date_of_birth){
        Lecture::create([
            'nip'=>$nip,
            'name'=>$name,
            'age'=>$age,
            'date_of_birth'=>$date_of_birth
        ]);
    }
}
