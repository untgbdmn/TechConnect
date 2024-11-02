<?php

namespace App\Models;

use App\Models\Kelas;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Siswa extends Model
{
    /** @use HasFactory<\Database\Factories\SiswaFactory> */
    use HasFactory;
    protected $table = "_siswa";
    protected $primaryKey = "siswa_id";
    protected $guarded = ["siswa_id"];

    public function kelas(): BelongsTo {
        return $this->belongsTo(Kelas::class, 'kelas_id', 'kelas_id');
    }

}
