<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    protected $table='doctors';

    public $timestamps = false;

    protected $fillable= ['first_name','last_name','email','phone','is_active'];
}
