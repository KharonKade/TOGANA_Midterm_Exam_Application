<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product
{
    public static function all()
    {
        return [
            ['id' => 1, 'name' => 'Skateboard', 'price' => 1500],
            ['id' => 2, 'name' => 'BMX Bike', 'price' => 8000],
            ['id' => 3, 'name' => 'Inline Skates', 'price' => 4000]
        ];
    }
}
