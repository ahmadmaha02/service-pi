<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Karyawan extends Model
{
    protected $table = 'karyawan';
    protected $primaryKey = 'nip';

    protected $fillable = [
        'name_lengkap', 'tanggal_lahir', 'alamat', 'nomor_telephone', 'email', 'jenis_kelamin', 'asal_divisi', 'foto_profil',
    ];


    public function EmployeeAccount()
    {
        return $this->hasOne('App\Models\EmployeeAccount', 'nip', 'nip');
    }
}
