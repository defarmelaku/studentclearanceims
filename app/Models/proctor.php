<?php

namespace App\Models;
use App\Http\Controllers\ProctorController;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class proctor  extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'Block_no',
       'materialid',
        'dorm_no',
        'dormitary_material',
        ];
    
        public function students()
        {
            return $this->hasmony(student::class);
        }
}
