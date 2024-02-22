<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Subject extends Model
{
    protected $fillable = ["code", "title", "student_id"];
    use HasFactory;

    public function student() {
        return $this->BelongsTo(Student::class);
    }
}
