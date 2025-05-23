<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prodi extends Model
{
    use HasFactory;
    protected $table = 'prodis';

    protected $fillable = [
        'nama_prodi',
    ];

    public function mapel()
    {
        return $this->hasMany(Mapel::class);
    }
}
