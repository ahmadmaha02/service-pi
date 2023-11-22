<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EmployeeAccount extends Model
{
    protected $table = 'employee_account';

    protected $fillable = [
        'nip', 'email', 'password',
    ];

    public function karyawan()
    {
        return $this->belongsTo('App\Models\Karyawan', 'nip', 'nip');
    }
}
