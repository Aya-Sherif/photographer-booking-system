<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{

    use HasFactory;
    protected $fillable = ['description','title'];

    public function photos()
{
    return $this->hasMany(Photos::class);
}
}
