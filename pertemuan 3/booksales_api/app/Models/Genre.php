<?php

// app/Models/Genre.php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    public static function allGenres()
    {
        return [
            ['id' => 1, 'name' => 'Fiction'],
            ['id' => 2, 'name' => 'Non-fiction'],
            ['id' => 3, 'name' => 'Fantasy'],
            ['id' => 4, 'name' => 'Science Fiction'],
            ['id' => 5, 'name' => 'Mystery'],
        ];
    }
}
