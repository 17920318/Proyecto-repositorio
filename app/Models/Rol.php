<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Rol
 * 
 * @property int $id
 * @property string $descripcion
 * 
 * @property Collection|Permiso[] $permisos
 * @property Collection|Usuario[] $usuarios
 *
 * @package App\Models
 */
class Rol extends Model
{
	protected $table = 'rol';
	public $timestamps = false;

	protected $fillable = [
		'descripcion'
	];

	public function permisos()
	{
		return $this->belongsToMany(Permiso::class, 'rolpermiso')
					->withPivot('id');
	}

	public function usuarios()
	{
		return $this->belongsToMany(Usuario::class, 'usuariorol')
					->withPivot('id');
	}
}
