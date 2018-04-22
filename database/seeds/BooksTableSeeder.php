<?php

use Illuminate\Database\Seeder;
use App\Book;
class BooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Book::truncate();
        for($i=0;$i<10;$i++){
            $this->create('Buku Algoritma','Shinoda','Informatika','2015');
        }
    }

    public function create($name,$author,$publisher,$year){
        Book::create([
            'name'=>$name,
            'author'=>$author,
            'publisher'=>$publisher,
            'year'=>$year
        ]);
    }
}
