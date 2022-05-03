<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Tipomaterial
 * 
 * @property int $id
 * @property string|null $descripcion
 * 
 * @property Collection|Detallerepo[] $detallerepos
 *
 * @package App\Models
 */
class Tipomaterial extends Model
{
	protected $table = 'tipomaterial';
	public $timestamps = false;

	protected $fillable = [
		'descripcion'
	];

	public function detallerepos()
	{
		return $this->hasMany(Detallerepo::class, 'material_id');
	}
}
