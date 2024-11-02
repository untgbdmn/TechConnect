<?php

namespace App\Models;

use App\Models\Siswa;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Kelas extends Model
{
    /** @use HasFactory<\Database\Factories\KelasFactory> */
    use HasFactory;
    protected $table = "_kelas";
    protected $primaryKey = "kelas_id";
    protected $guarded = ["kelas_id"];

    // public function siswas(): HasMany {
    //     return $this->hasMany(Siswa::class, 'kelas_id', 'kelas_id');
    // }

}
