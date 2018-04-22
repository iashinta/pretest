<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(StudentsTableSeeder::class);
        $this->call(LecturesTableSeeder::class);
        $this->call(BooksTableSeeder::class);
        $this->call(AdminsTableSeeder::class);
        $this->call(ItemsTableSeeder::class);
        $this->call(BandsTableSeeder::class);
        $this->call(MusicsTableSeeder::class);
    }
}
