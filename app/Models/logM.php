<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\LogOptions;
use Spatie\Activitylog\Traits\LogsActivity;


class logM extends Model
{
    use HasFactory;
    protected $table = 'logs';
    protected $fillable = ['id', 'id_user', 'activity'];

    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults()->logOnly(['id_user', 'activity']);

    }}
