<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Repotema
 * 
 * @property int $id
 * @property int|null $repositorio_id
 * @property int|null $tema_id
 * 
 * @property Repositorio|null $repositorio
 * @property Tema|null $tema
 *
 * @package App\Models
 */
class Repotema extends Model
{
	protected $table = 'repotema';
	public $timestamps = false;

	protected $casts = [
		'repositorio_id' => 'int',
		'tema_id' => 'int'
	];

	protected $fillable = [
		'repositorio_id',
		'tema_id'
	];

	public function repositorio()
	{
		return $this->belongsTo(Repositorio::class);
	}

	public function tema()
	{
		return $this->belongsTo(Tema::class);
	}
}
