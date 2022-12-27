<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;

    //DATOS DEL FORMULARIO NAME
    protected $fillable =[
         'Nombre',
         'Apellidos',
         'Correo',
         'Password',
         'Ciudad',
         'Colonia',
         'Direccion',
         'Celular'];
}
