<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Purchaseinfo extends Model
{
    use HasFactory;
    protected $fillable = ['invoice_num','price', 'purchase_date','equipment_id','customer_id'];

    protected $table = 'purchaseinfo';

    public function Equipmentinfo()
    {
        return $this->belongsTo(Equipmentinfo::class);
    }

    public function Customers()
    {
        return $this->belongsTo(Customers::class);
    }
    
    
}