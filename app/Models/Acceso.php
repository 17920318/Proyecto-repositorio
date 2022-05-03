<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Acceso
 * 
 * @property int $id
 * @property int|null $usuario_id
 * @property Carbon|null $fechahora
 * @property string|null $terminal
 * 
 * @property Usuario|null $usuario
 *
 * @package App\Models
 */
class Acceso extends Model
{
	protected $table = 'acceso';
	public $timestamps = false;

	protected $casts = [
		'usuario_id' => 'int'
	];

	protected $dates = [
		'fechahora'
	];

	protected $fillable = [
		'usuario_id',
		'fechahora',
		'terminal'
	];

	public function usuario()
	{
		return $this->belongsTo(Usuario::class);
	}
}
