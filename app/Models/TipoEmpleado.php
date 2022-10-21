<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoEmpleado extends Model
{
    use HasFactory;
    protected $table = 'tipo_empleados';
    protected $primaryKey = 'idtipoEmpleado';
    protected $fillable = ['tipoEmpleado'];
    public $timestamps = false;
}
