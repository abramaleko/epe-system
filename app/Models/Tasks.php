<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tasks extends Model
{
    use HasFactory;

    protected $table = 'tasks';

    public function employee()
    {
        return $this->belongsTo(Employees::class, 'employee_id');
    }

    public function checkCompletion($from, $to)
    {
        $date1= Carbon::parse($from);
        $date2= Carbon::parse($to);
        return $date1->diffInDays($date1);

    }

}
