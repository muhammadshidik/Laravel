<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TransOrders extends Model
{
    protected $fillable = ['id_customer', 'order_end_date', 'order_status', 'order-code', 'order_pay', 'order_change'];
    //relation: ORM (OBJECT RELATION MAPPING)

    public function customer()
    {
        return $this->belongsTo(Customers::class, 'id_customer', 'id');
    }

    public function getStatusTextAttribute()
    {
        switch ($this->order_status) {
            case '1':
                return "sudah Bayar";
                break;

            default:
                return "baru";
                break;
        }
    }
}
