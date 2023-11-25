<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Projects extends Model
{
    protected $table = 'projects';
    protected $primaryKey = 'id_proj';
    public $timestamps = false;
    protected $fillable = [
        'tasks_RND_id_task', 'nama_proj', 'desc_proj'
    ];

    public function tasks()
    {
        return $this->belongsTo('App\Models\Tasks', 'tasks_RND_id_task', 'id_task');
    }

}
