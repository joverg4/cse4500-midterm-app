<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Noteshistory extends Model
{
    use HasFactory;
    protected $fillable = ['equipment_id','services', 'software','updates'];
    protected $table = 'noteshist';

    public function equipments()
    {
        return $this->belongto(Equipmentinfo::class);
    }
}