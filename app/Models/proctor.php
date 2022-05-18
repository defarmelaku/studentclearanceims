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
        'dorm_no',
        'dormitary_material',
        ];
    

}
