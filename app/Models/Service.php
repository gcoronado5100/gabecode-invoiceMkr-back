<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;
    protected $table = 'services';
    protected $fillable = [
        'name',
        'description',
        'price',
        'duration',
        'duration_unit',
    ];

    /**
     * Get the services for the user.
     */
    public function invoices()
    {
        return $this->hasMany(Invoice::class, 'service_on_invoices');
    }


}
