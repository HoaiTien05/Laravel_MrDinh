<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;  

class BillDetail extends Model
{
    use HasFactory;
    protected $table = 'bill_detail';
    protected $fillable = ['id_bill', 'id_product', 'quantity', 'unit_price'];

    public function bill()
    {
        return $this->belongsTo(Bill::class, 'id_bill');
    }

    public function product()
    {
        return $this->belongsTo(Product::class, 'id_product');
    }
}
