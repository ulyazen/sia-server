<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Matakuliah_aktif extends Model
{
    use HasFactory;
    protected $fillable = ['nama','sks','semester','ket'];
}
