<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class Porto extends Model
{
use HasFactory;

    protected $table = 'tb_coba';

    protected $foreignKey = 'id';

    protected $fillable = ['nama', 'deskripsi','teknologi', 'tanggal', 'link', 'foto'];

    public $timestamps = false;
}
