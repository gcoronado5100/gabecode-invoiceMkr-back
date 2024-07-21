<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    use HasFactory;
    protected $table = 'invoices';
    protected $fillable = [
        'user_id',
        'client_id',
        'invoice_date',
        'amount',
        'tax',
        'total',
    ];

    /**
     * Get the user that owns the invoice.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get the client that owns the invoice.
     */
    public function client()
    {
        return $this->belongsTo(Client::class);
    }

    /**
     * Get the services for the invoice.
     */
    public function services()
    {
        return $this->belongsToMany(Service::class, 'service_on_invoices')
            ->withPivot('quantity', 'price', 'total', 'description');
    }

}
