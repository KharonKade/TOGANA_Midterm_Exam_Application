<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product
{
    public static function all()
    {
        return [
            ['id' => 1, 'name' => 'Laptop', 'price' => 25000],
            ['id' => 2, 'name' => 'Iphone 16', 'price' => 95000],
            ['id' => 3, 'name' => 'Desktop COmputer', 'price' => 105000]
        ];
    }
}
