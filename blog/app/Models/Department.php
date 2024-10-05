<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Role;

class Department extends Model
{
    protected $table = 'departments';
    protected $primaryKey = 'id';
    protected $fillable = ['name', 'start_date'];
    use HasFactory;

    public function role()
    {
        return $this->belongsTo(Role::class);
    }
}
