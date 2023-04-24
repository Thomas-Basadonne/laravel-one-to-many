<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    use HasFactory;

    protected $fillable = ["type_of_stack",];

// one to many
    public function projects()
    {
        return $this->hasMany(Project::class);
    }
}