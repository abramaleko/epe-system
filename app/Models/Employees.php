<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employees extends Model
{
    use HasFactory;

    protected $table= 'Employees';

    public function department()
    {
        return $this->belongsTo(Department::class,'dept_id');
    }

    public function position()
    {
        return $this->belongsTo(EmployeePosition::class);
    }}
