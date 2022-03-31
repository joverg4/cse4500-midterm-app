<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Manuinfo extends Model
{
    use HasFactory;

    protected $fillable = ['name','dept', 'number','email'];
    protected $table = 'manuinfo';

    public function equipments()
    {
        return $this->hasMany(Equipmentinfo::class);
    }

}