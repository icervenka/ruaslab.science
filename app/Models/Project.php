<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    public function people()
    {
      return $this->belongsToMany(Person::class)->withPivot('role');
    }

    public function leads()
    {
      return $this->belongsToMany(Person::class)->wherePivot('role', 'lead');
    }

    public function contributors()
    {
      return $this->belongsToMany(Person::class)->wherePivot('role', 'contributor');
    }

    public function tags()
    {
      return $this->belongsToMany(Tag::class);
    }
}
