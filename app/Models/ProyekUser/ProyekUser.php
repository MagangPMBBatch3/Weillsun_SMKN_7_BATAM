<?php

namespace App\Models\ProyekUser;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProyekUser extends Model
{
    use SoftDeletes;
    protected $table = 'proyek_user';

    protected $primaryKey = 'id';

    protected $fillable = [
        'bagian_id',
        'users_profile_id',
    ];

    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
        'deleted_at' => 'datetime',
    ];

    public function userProfile()
    {
        return $this->belongsTo(\App\Models\UserProfile\UserProfile::class, 'users_profile_id');
    }
    
    public function proyek()
    {
        return $this->belongsTo(\App\Models\Proyek\Proyek::class, 'proyek_id');
    }
}
