<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
{
    \App\Models\Book::insert([
        ['title' => '1984', 'author_id' => 2, 'year' => 1949, 'price' => 100000],
        ['title' => 'Norwegian Wood', 'author_id' => 3, 'year' => 1987, 'price' => 95000],
        ['title' => 'Harry Potter', 'author_id' => 1, 'year' => 1997, 'price' => 120000],
        ['title' => 'Hujan', 'author_id' => 4, 'year' => 2016, 'price' => 85000],
        ['title' => 'Murder on the Orient Express', 'author_id' => 5, 'year' => 1934, 'price' => 110000],
    ]);
}

}
