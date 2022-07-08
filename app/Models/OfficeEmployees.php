<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OfficeEmployees extends Model
{
    use HasFactory;
    protected $table = 'office_employees';
    protected $primaryKey = 'id';
    protected $fillable = ['id_office' ];

    // public function employees()
    // {
    //     return $this->hasMany(Employees::class, 'id_office', 'id');
    // }
}
