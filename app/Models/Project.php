<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Type;

class Project extends Model
{
    use HasFactory;
    public $timestamps = false;

    function type() 
    {
        return $this->belongsTo(Type::class, 'type_id', 'id');
    }
}
