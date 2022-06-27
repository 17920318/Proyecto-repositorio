<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contactos extends Model {

public $timestamps = false;    

public $table = 'contactos';
public $fillable = ['name','email','message'];

        
}
