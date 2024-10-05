<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $table = 'employees';
    protected $primaryKey = 'id';
    protected $fillable = ['name', 'address', 'phone', 'father', 'department_name'];

    use HasFactory;

    public function departments()
    {
        return $this->belongsTo(Department::class);
    }
}
