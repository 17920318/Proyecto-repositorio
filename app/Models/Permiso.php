<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Permiso
 * 
 * @property int $id
 * @property string|null $descripcion
 * 
 * @property Collection|Rol[] $rols
 *
 * @package App\Models
 */
class Permiso extends Model
{
	protected $table = 'permiso';
	public $timestamps = false;

	protected $fillable = [
		'descripcion'
	];

	public function rols()
	{
		return $this->belongsToMany(Rol::class, 'rolpermiso')
					->withPivot('id');
	}
}
