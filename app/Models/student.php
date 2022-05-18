<?php

namespace App\Models;
use App\Http\Controllers\StudentController;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class student extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'Fname',
        'Mname',
        'Lname',
        'Email',
        'department',
        'facaulity',
        'classyear'
        ];
        public function proctor()
        {
            return $this->belongsTo(proctor::class);
            
        }
}
