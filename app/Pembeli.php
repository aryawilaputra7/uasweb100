<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pembeli extends Model
{
    protected $table='kostumer';
    protected $primaryKey='id_kostumer';
    protected $fillable=['nama_kostumer','alamat_kostumer','NIK']; 
}
