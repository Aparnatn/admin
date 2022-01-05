<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class customer extends Model
{
    use HasFactory;
    protected $table = 'customers';
    public $timestamps = true;



    protected $fillable = [
        'customer_name',
        'contact_person',

    ];
}
