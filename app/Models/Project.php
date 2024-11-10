<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'creation_date', 'author', 'cover'];

    public function technologies(){
        return $this->belongsToMany(Project::class);
    }



}
