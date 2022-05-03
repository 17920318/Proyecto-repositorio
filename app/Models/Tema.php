<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Tema
 * 
 * @property int $id
 * @property string|null $descripcion
 * 
 * @property Collection|Repotema[] $repotemas
 *
 * @package App\Models
 */
class Tema extends Model
{
	protected $table = 'tema';
	public $timestamps = false;

	protected $fillable = [
		'descripcion'
	];

	public function repotemas()
	{
		return $this->hasMany(Repotema::class);
	}
}
