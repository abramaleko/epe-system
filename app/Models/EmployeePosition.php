<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmployeePosition extends Model
{
    use HasFactory;

    protected $table = 'employee_positions';
    public $timestamps = false;

    protected $fillable = [
        'name',
        'dept_id'
    ];

    public function department()
    {
       return $this->belongsTo(Department::class, 'dept_id');
    }
}
