<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Participant
 *
 * @property int $id
 * @property string $nom
 * @property string $login
 * @property string $pwd
 * @property string $email
 * @property string $etat
 * @property string|null $tel
 * @property int $age
 * @property string $sexe
 * @property string $status
 * @property int $id_region
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @property Motivation $motivation
 *
 * @package App\Models
 */
class Abonne extends Model
{
    use HasFactory;
	protected $table = 'Abonne';

	protected $casts = [
		'age' => 'int',
		'id_mot' => 'int'
	];

	protected $fillable = [
		'nom',
		'prenom',
		'age',
		'sexe',
		'proffession',
		'rue',
		'code_postal',
		'ville',
		'pays',
		'telephone',
		'email',
		'id_mot'
	];

	public function motivation()
	{
		return $this->belongsTo(Motivation::class, 'id_mot');
	}
}
