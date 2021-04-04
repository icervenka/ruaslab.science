<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    use HasFactory;

    public function projects()
    {
      return $this->belongsToMany(Project::class)->withPivot('role');
    }

    public function skills()
    {
      return $this->hasMany(Skill::class);
    }

    public function trivia() {
      return $this->hasMany(Trivia::class);
    }

    public function links() {
      return $this->hasMany(Link::class);
    }
}
