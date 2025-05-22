<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Student extends Model
{
    protected $fillable = [
        'name',
        'student_id_number',
        'email',
        'phone_number',
        'birth_date',
        'gender',
        'status',
        'major_id',
    ];

    public function major(): BelongsTo
    {
        return $this->belongsTo(Major::class, 'major_id');
    }
}