<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Usuariorol
 * 
 * @property int $id
 * @property int|null $rol_id
 * @property int|null $usuario_id
 * 
 * @property Rol|null $rol
 * @property Usuario|null $usuario
 *
 * @package App\Models
 */
class Usuariorol extends Model
{
	protected $table = 'usuariorol';
	public $timestamps = false;

	protected $casts = [
		'rol_id' => 'int',
		'usuario_id' => 'int'
	];

	protected $fillable = [
		'rol_id',
		'usuario_id'
	];

	public function rol()
	{
		return $this->belongsTo(Rol::class);
	}

	public function usuario()
	{
		return $this->belongsTo(Usuario::class);
	}
}
