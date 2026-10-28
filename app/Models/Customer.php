<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Customer extends Model
{
    use HasFactory;

    protected $fillable = ['nama','nomer','alamat'];

    public function order()
    {
        return $this->hashMany(Order::class);
    }
}
