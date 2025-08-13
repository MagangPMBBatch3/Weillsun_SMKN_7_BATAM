<?php

namespace App\Models\Keterangan;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Keterangan extends Model
{
    use SoftDeletes;
    protected $table = 'keterangan';

    protected $primaryKey = 'id';

    protected $fillable = [
        'bagian_id',
        'proyek_id',
        'tanggal',
    ];

    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
        'deleted_at' => 'datetime',
    ];

    public function bagian()
    {
        return $this->belongsTo(\App\Models\Bagian\Bagians::class, 'bagian_id');
    }
    
    public function proyek()
    {
        return $this->belongsTo(\App\Models\Proyek\Proyek::class, 'proyek_id');
    }
}
