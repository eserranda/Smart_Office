<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StatusData extends Model
{
    use HasFactory;
    // protected $table = 'status_data';
    protected $fillable = ['id_ruangan', 'apiKey', 'status_dosen', 'status_pintu', 'status_lampu', 'status_ac', 'status_terminal', 'sensor_gerak'];
    public $timestamps = false;

    public function ruangan()
    {
        return $this->belongsTo(Ruangan::class, 'id_ruangan', 'id');
    }
}
