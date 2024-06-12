<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Project;

class Tecnology extends Model
{
    use HasFactory;

    public function projects(){
        return $this->belongsToMany(Project::class);
    }
}
