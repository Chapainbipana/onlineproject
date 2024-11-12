<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use\App\Models\Productt;

class category extends Model
{
    use HasFactory;
    protected $fillable = ['id','name', 'description'];

    public function products()
    {
        return $this->hasMany(Productt::class);
    }
    
}
