<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceOnInvoice extends Model
{
    use HasFactory;
    protected $table = 'service_on_invoices';
    protected $fillable = [
        'invoice_id',
        'service_id',
        'quantity',
        'price',
        'total',
        'description',
    ];

    /**
     * Get the invoice that owns the service on invoice.
     */
    public function invoice()
    {
        return $this->belongsTo(Invoice::class);
    }

    /**
     * Get the service that owns the service on invoice.
     */
    public function service()
    {
        return $this->belongsTo(Service::class);
    }

}
