<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Repositorio
 * 
 * @property int $id
 * @property int|null $usuario_id
 * @property Carbon|null $fecha
 * @property string|null $observaciones
 * @property string|null $documento
 * @property string|null $nomenclatura
 * @property string|null $descripcion
 * @property string|null $ubicacion
 * 
 * @property Usuario|null $usuario
 * @property Collection|Detallerepo[] $detallerepos
 * @property Collection|Repotema[] $repotemas
 *
 * @package App\Models
 */
class Repositorio extends Model
{
	protected $table = 'repositorio';
	public $timestamps = false;

	protected $casts = [
		'usuario_id' => 'int'
	];

	protected $dates = [
		'fecha'
	];

	protected $fillable = [
		'usuario_id',
		'fecha',
		'observaciones',
		'documento',
		'nomenclatura',
		'descripcion',
		'ubicacion'
	];

	public function usuario()
	{
		return $this->belongsTo(Usuario::class);
	}

	public function detallerepos()
	{
		return $this->hasMany(Detallerepo::class);
	}

	public function repotemas()
	{
		return $this->hasMany(Repotema::class);
	}
}
