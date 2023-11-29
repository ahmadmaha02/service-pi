<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kesehatan extends Model
{
    protected $table = 'kesehatan';
    protected $primaryKey = 'id_kesehatan';
    public $timestamps = true;
    protected $fillable = [
        'nip', 'status_kesehatan', 'keterangan',
    ];

    public function karyawan()
    {
        return $this->belongsTo('App\Models\Karyawan', 'nip', 'nip');
    }
}
