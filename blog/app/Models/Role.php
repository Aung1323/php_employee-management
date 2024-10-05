<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $table = 'roles';
    protected $primaryKey = 'id';
    protected $fillable = ['name', 'department_name', 'email'];
    use HasFactory;

    public function departments()
    {
        return $this->belongsTo(Department::class);
    }
}
