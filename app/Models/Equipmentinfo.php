<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Equipmentinfo extends Model
{
    use HasFactory;

    protected $fillable = ['name','model_year', 'speed', 'category', 'manu_id'];
    protected $table = 'equipmentinfo';

    public function notes()
    {
        return $this->hasMany(Noteshistory::class);
    }

    public function manu()
    {
        return $this->belongsTo(Manuinfo::class);
    }

    public function purchaseinfo()
    {

        return $this->hasMany(Purchaseinfo::class);

    }
   

}
