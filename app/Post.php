<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nim', 'nama', 'alamat', 'telepon', 'jenis_kelamin', 'agama',
    ];

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'mahasiswa';
}
