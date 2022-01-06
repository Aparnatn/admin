<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $table = 'customers';

    public $timestamps = true;

    protected $fillable = [
        'customer_name',
        'contact_person',
    ];

    /**
     * Get the projects associated
     */
    public function projects()
    {
        return $this->hasMany(Project::class);
    }
}
