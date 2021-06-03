<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Interest;

class Category extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    
    public function interests() {
        return $this->hasMany(Interest::class);
    }
}
