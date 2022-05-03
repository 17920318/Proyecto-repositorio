<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Rolpermiso
 * 
 * @property int $id
 * @property int|null $rol_id
 * @property int|null $permiso_id
 * 
 * @property Permiso|null $permiso
 * @property Rol|null $rol
 *
 * @package App\Models
 */
class Rolpermiso extends Model
{
	protected $table = 'rolpermiso';
	public $timestamps = false;

	protected $casts = [
		'rol_id' => 'int',
		'permiso_id' => 'int'
	];

	protected $fillable = [
		'rol_id',
		'permiso_id'
	];

	public function permiso()
	{
		return $this->belongsTo(Permiso::class);
	}

	public function rol()
	{
		return $this->belongsTo(Rol::class);
	}
}
