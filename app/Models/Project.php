<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $table = 'projects';

    public $timestamps = true;

    protected $fillable = [
        'project_name',
        'project_location',
        'date',
        'complete_date',
        'customer_id'
    ];

    /**
     * Get the customer associated
     */
    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }
}
