<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Usuario
 * 
 * @property int $id
 * @property string|null $nombre
 * @property string|null $sexo
 * @property string $cuenta
 * @property string|null $password
 * 
 * @property Collection|Acceso[] $accesos
 * @property Collection|Repositorio[] $repositorios
 * @property Collection|Rol[] $rols
 *
 * @package App\Models
 */
class Usuario extends Model
{
	protected $table = 'usuario';
	public $timestamps = false;

	protected $hidden = [
		'password'
	];

	protected $fillable = [
		'nombre',
		'sexo',
		'cuenta',
		'password'
	];

	public function accesos()
	{
		return $this->hasMany(Acceso::class);
	}

	public function repositorios()
	{
		return $this->hasMany(Repositorio::class);
	}

	public function rols()
	{
		return $this->belongsToMany(Rol::class, 'usuariorol')
					->withPivot('id');
	}
}
