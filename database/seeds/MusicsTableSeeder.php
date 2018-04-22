<?php

use Illuminate\Database\Seeder;
use App\music;
class MusicsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        music::truncate();
        for($i=0;$i<10;$i++){
            music::create([
                'title'=>'Konco Mesra',
                'singer'=>'Nella Kharisma',
                'genre'=>'Dangdut',
                'song_writer'=> 'R. Husin Albana'
            ]);
        }
    }
}
