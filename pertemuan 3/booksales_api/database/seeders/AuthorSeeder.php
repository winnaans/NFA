<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AuthorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
   public function run()
{
    \App\Models\Author::insert([
        ['name' => 'J.K. Rowling'],
        ['name' => 'George Orwell'],
        ['name' => 'Haruki Murakami'],
        ['name' => 'Tere Liye'],
        ['name' => 'Agatha Christie'],
    ]);
}

}
