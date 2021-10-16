<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Experience extends Model
{
    use HasFactory;

    public function user()
    {
        $this->belongsTo(User::class);
    }
    public function project()
    {
        $this->belongsTo(Project::class);
    }
}
