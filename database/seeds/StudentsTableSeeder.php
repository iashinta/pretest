<?php

use Illuminate\Database\Seeder;
use App\Student;

class StudentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Student::truncate();
        $nim=1504505053;
        for($i=0;$i<10;$i++){
            $this->createStudent($nim++,'Urip Yogantara','Karangasem','082237137611');
        }
    }

    public function createStudent($nim,$name,$address,$phone){
        Student::create([
            'nim'=>$nim,
            'name'=>$name,
            'address'=>$address,
            'phone'=>$phone
        ]);
    }
}
