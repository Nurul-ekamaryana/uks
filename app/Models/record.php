<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class record extends Model
{
    use HasFactory;
    protected $table = 'record';
    protected $fillable = ['id', 'id_obat', 'id_siswa', 'keluhan', 'dosis', 'status', 'created_at'];
}
