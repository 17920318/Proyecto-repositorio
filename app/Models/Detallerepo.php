<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Detallerepo
 * 
 * @property int $id
 * @property int|null $cantidad
 * @property int|null $material_id
 * @property int|null $repositorio_id
 * 
 * @property Repositorio|null $repositorio
 * @property Tipomaterial|null $tipomaterial
 *
 * @package App\Models
 */
class Detallerepo extends Model
{
	protected $table = 'detallerepo';
	public $timestamps = false;

	protected $casts = [
		'cantidad' => 'int',
		'material_id' => 'int',
		'repositorio_id' => 'int'
	];

	protected $fillable = [
		'cantidad',
		'material_id',
		'repositorio_id'
	];

	public function repositorio()
	{
		return $this->belongsTo(Repositorio::class);
	}

	public function tipomaterial()
	{
		return $this->belongsTo(Tipomaterial::class, 'material_id');
	}
}
